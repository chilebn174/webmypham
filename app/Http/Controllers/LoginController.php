<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Role;
use App\RoleUser;
use App\Social;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;
class LoginController extends Controller
{
    public function getLogin()
    {
        $category = Category::all();
        $brand = Brand::all();
        $num=0;
        $login=0;
        return view('user/login',compact('category','brand','num','login'));
    }
    public function postLogin(Request $req)
    {
        $credentials = ['email' =>$req->email, 'password' =>$req->password];
        if (Auth::attempt($credentials)){
            $userImg=Auth::user();
            $user=[
                'email' =>$req->email,
                'password' =>$req->password,
            ];
            session()->put('user',$user);

            return redirect()->route('trang-chu');

        }
        else{
            $mess=[
                'flag'=>'danger',
                'message'=> 'Email hoặc mật khẩu không đúng'
            ];
//            dd($mess);
            return redirect()->back()->with($mess);
        }
    }
    public function google()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callback_google(){
            $users = Socialite::driver('google')->stateless()->user();
            $authUser = $this->findOrCreateUser($users);
            $account_name = User::where('id',$authUser->user)->first();
            $user=['email'=>$account_name->email,'id'=>$account_name->admin_id];
            session()->put('user',$user);
            return redirect('trang-chu')->with('message', 'Đăng nhập Admin thành công');

}

    public function findOrCreateUser($users){
        try {
            DB::beginTransaction();
        $authUser = Social::where('provider_user_id', $users->id)->first();
        if($authUser){
            return $authUser;
        }

        $social = new Social([
            'provider_user_id' => $users->id
            ]);
        $orang = User::where('email',$users->email)->first();

        if(!$orang){
            $orang = User::create([
                'name' => $users->name,
                'email' => $users->id,
                'password' => encrypt('123456'),
            ]);}
            $social->login()->associate($orang);
            $social->save();
            $account_name = User::find($authUser->user);

            $roleUser= new RoleUser();
            $roleUser->user_id=$account_name->id;
            $roleUser->role_id=2;
            $roleUser->save();
            session()->put('user',['email'=>$account_name->email,'id'=>$account_name->id]);
            DB::commit();
            return redirect('/trang-chu');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . ', Line: ' . $exception->getLine());
        }

}
    public function getLogout()
    {
        Auth::logout();
        session()->forget('user');
        return redirect()->route('login');
    }
}
