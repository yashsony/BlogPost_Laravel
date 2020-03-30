<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class param extends Controller
{
    public function f1(Request $a)
    {
        $a->validate([
            'n1'=>'required|alpha_dash',
            'n5'=>'required',
            'n6' => 'required|same:n5',
            'n3'=>'date',
            'n4'=>'required'
        ]);
        echo "<br> Name : ".$a->n1;
        echo "<br> Password : ".$a->n5;
        echo "<br> Gender : ".$a->n4;
        echo "<br> DOB : ".$a->n3;
    }

    public function f2($a,$b=3)
    {
        $f1 = $a + $b;
        $f2 = $a - $b;
        $f3 = $a / $b;
        $f4 = $a * $b;
        return view('caDisplay',['sum'=>$f1,'diff'=>$f2,'quo'=>$f3,'pro'=>$f4]);
    }

    public function f3()
    {
        return DB::select('select * from emp1');
    }

    public function f4()
    {
        $a =  DB::table('emp1')->get();
        $b =  DB::table('emp1')->where('name','Paramvir Singh')->get();
        echo $a;
        echo "<br><br>".$b;
    }

}