<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c1 extends Controller
{
    public function userinfo()
    {
        echo "Hello Param";
    }

    public function userinfo2($a)
    {
        echo "Hello";
        return view('cont',['id'=>$a]);
    }

    public function userinfo3($a)
    {
        $posts = ['a1'=>"First Value","a2"=>"Second Value"];
        return view('userinfo2',['x'=>$posts[$a]]);
    }

    public function f1(Request $a)
    {
        $a->validate([
            'n1'=>'required|alpha_dash',
            'n2'=>'required|email',
            // 'n6' => 'required|same:n5',
            // suppose n5 is password field and n6 is confirm password, then
            // the above syntax is required for validation
            'n3'=>'date',
            'n4'=>'required|integer|max:24|min:18'
        ]);
        print_r($a->input());
        echo "<br>".$a->n1;
        echo "<br>".$a->n2;
        echo "<br>".$a->n3;
    }
}
