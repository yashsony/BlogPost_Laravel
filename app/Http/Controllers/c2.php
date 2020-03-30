<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Emp;
class c2 extends Controller
{
 public function save(Request $req)
    {
//    	print_r($req->input());
//return DB::table('user')->insertorIgnore(['uname'=>$req->uname,'email'=>$req->email,'age'=>$req->age]);
//return DB::table('user')->where('age',$req->age)->delete();
//return DB::table('user')->where('age',$req->age)->update(['uname'=>$req->uname]);
//return DB::table('user')->select('uname','age')->where('age',$req->age)->get();
 //print_r($req->file());
 //echo $req->file('file1')->store('up1');
 
   $req->session()->put('info',$req->input());
    $info=$req->session()->get('info');
print_r($info['uname']);
if($info['uname']=="joshi")
{
	return redirect('/');
}
else
{
return redirect('/form');
}}

public function page2()
{

	$p=Emp::all();
	return view('p',['p'=>$p]);
}
public function page1()
{
	$data=DB::table('user')->paginate(3);
	return view('page_view',["data"=>$data]);
}
}