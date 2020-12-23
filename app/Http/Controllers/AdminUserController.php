<?php

namespace App\Http\Controllers;

use App\Role;
use App\Traits\DeleteModelTrait;
use App\Traits\StorageImage;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AdminUserController extends Controller
{
    use StorageImage;
    use DeleteModelTrait;

    private $user;
    private $role;

    public function __construct(User $user, Role $role)
    {
        $this->user = $user;
        $this->role = $role;
    }

    public function index()
    {
        $users = $this->user->paginate(10);
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        $roles = $this->role->all();
        return view('admin.user.add', compact('roles'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $dataUser = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),

            ];
            $dataImage = $this->storageTraitUpload($request, 'image_path', 'user');
            if (!empty($dataImage)) {
                $dataUser['image_path'] = $dataImage['file_path'];
                $dataUser['image_name'] = $dataImage['file_name'];
            }
            $user = $this->user->create($dataUser);

            $roleIds = $request->role_id;
            $user->roles()->attach($roleIds);
            DB::commit();
            return redirect(route('users.index'));

        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . ', Line: ' . $exception->getLine());

        }

    }

    public function edit($id)
    {
        $roles = $this->role->all();
        $user = $this->user->find($id);
        $roleOfUser = $user->roles;
        return view('admin.user.edit', compact('user', 'roles', 'roleOfUser'));
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $dataUser = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),

            ];
            $dataImage = $this->storageTraitUpload($request, 'image_path', 'user');
            if (!empty($dataImage)) {
                $dataUser['image_path'] = $dataImage['file_path'];
                $dataUser['image_name'] = $dataImage['file_name'];
            }
            DB::table('users')
                ->where('id', $id)
                ->update($dataUser);
            $user = $this->user->find($id);
            $user->roles()->sync($request->role_id);
            DB::commit();
            return redirect(route('users.index'));

        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . ', Line: ' . $exception->getLine());

        }
    }

    public function delete($id)
    {
        return $this->deleteModelTrait($id, $this->user);
    }
}
