<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class c1 extends Controller
{
 public function index1()
    {

   

     $r=DB::table('user')
     ->distinct()
     ->orderby('age','desc')
     ->whereNotIN('age',[20,21])
     ->get();
return view('a',['user1'=>$r]);
    //	return DB::select('select * from user where uname="a"');
    	//print_r($users);
    	//return DB::select('select * from user');
       //return DB::select('select * from user where uname="a"');

    }
    public function index3(){
     //$r=DB::table('user')->orderby('age')->get();
  //$r=DB::table('user')->distinct()->get();
   //$r=DB::table('user')->orderby('age','desc')->get();
 // $r=DB::table('user')->first();
  //print_r($r);
      $r = DB::table('user')
                    ->whereNotIn('age', [1, 2, 3])
                    ->get();
return view('a',['user1'=>$r]);


/*$r=DB::table('user')->pluck('uname');
foreach ($r as $title) {
    echo $title."<br>";
}
var_dump($r);
*/
//$r= DB::table('user')
//->select('uname', 'age as user_age')->where('age',1)->get();
//return view('a2',['user1'=>$r]);



/*$r=DB::table('user1')->insertorIgnore([
    ['name'=>'l', 'email' => 'taylor@example.com'],
    ['name'=>'p', 'email' => 'dayle@example.com']
]);

    }
    public function index4()
    {
    //  $user1= DB::table('user')->select('uname', 'age as user_age')->get();
  //$user1 = DB::table('user')->distinct()->get();
  //$user1 = DB::table('user')->orderby('age', 'desc')->get();
  $user1 = DB::table('user')->get();
//  $user1 = DB::table('user')->first();
  print_r($user1);
  //  return view('a2',['user1'=>$user1]);

    //  print_r($user1);
    }
  public function index5()
    {
$query = DB::table('user')->select('uname');
$users = $query->addSelect('age')->get();
print_r($users);
    }
    




    public function index2()
    {
    


    $user1=DB::table('user')->get();
    //  $user1=DB::table('user')->pluck('uname');
            return view('a',['user1'=>$user1]);

//$user1=DB::table('user')->pluck('uname');
/*print_r($user1);
     foreach ($user1 as $name => $title) {
    echo $title."<br>";
}
    	//$user1=DB::table('user')->get();
  //  	print_r($user1);    //$user1=DB::table('user')->where('uname','a')->get();

 // $user1=DB::table('user')->find(4);
//$user1=DB::table('user')->avg('age');

/*$user1=DB::table('user')->insert(
	['uname'=>'john',
	'email'=>'john123@gmail.com',
	'age'=>'22']);
    print_r($user1);

*/
  //      $users1=DB::table('user')->where('uname','john')->update(['age'=>'34']);

  //	$users1=DB::table('user')->where('uname','john')->delete();
// $users1= DB::table('user')->where('uname', 'b')->value('email');

    /*	$titles = DB::table('user')->pluck('uname');
foreach ($titles as $title) {
    echo $title."<br>";
}*/

 /*   $user = DB::table('user')->where('uname','b')->first();//for selecting a row
print_r($user);*/
/*$roles = DB::table('user')->where('uname','a')->pluck('uname', 'age');

foreach ($roles as $name => $title) {
    echo $title.$name."<br>";
}
$roles = DB::table('user')->pluck('uname', 'age');//pluck is used for selecting a column

foreach ($roles as $name => $title) {
    echo $title.$name."<br>";
}
*/}
public function join1()
{
  return DB::table('user')
  //->join('new1','name','user.uname')->get();
  ->leftJoin('new1', 'name', '=', 'user.uname')->get();
}
}
