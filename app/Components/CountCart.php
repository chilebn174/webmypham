<?php

namespace App\Components;

use Illuminate\Support\Facades\Auth;

class CountCart
{


    public function countCart(){
        $num=0;
        $cart=session()->get('cart'.Auth::id());
        $total=0;
        if($cart!=array()){
            foreach($cart as $item){
                $total+=$item['qty']*$item['price'];
                $num+=$item['qty'];
            }}
        $arr=[
            'num'=>$num,
            'total'=>$total
        ];
        return $arr;
    }

}
