<?php

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group([], function() {
  Route::resource('/', 'welcomeController',[
      'only' =>['index']

  ]);
});

Auth::routes();

// Route::middleware(['auth'])->group(function() {
//     Route::resource('tasks', 'TaskController', [
//         // 'only' => [
//         //     'index', 'store', 'update'
//         // ]
//     ]);
// });

// Route::get('tasks', function () {
//     // Only authenticated users may enter...
// })->middleware('auth');
Route::group(['middleware' => 'auth'], function() {
    Route::resource('tasks', 'TaskController');
  });

Route::group(['middleware' => 'auth'], function() {
    Route::resource('buy', 'buyController',[
        'only' =>['index' , 'store' ,'update']

    ]);
  });

  Route::group(['middleware' => 'auth'], function() {
    Route::resource('sell', 'sellController',[
        'only' =>['index']

    ]);
  });
 /*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Auth::routes(); 



// Route::get('/p1', function () {
//     return view('home');
// });

// Route::get('/p3', function () {
//     return view('about');
// });

// Route::get('/p2', function () {
//     return view('login');
// });

// Route::get('/a', function () {
//     Config::set('app.name','Book Store'); // set the name of app
//     echo Config::get('app.name'); // fetches name of app from app.php in routes folder
// });


// Route::get('/b', function () {
//    return "Custom Message Print -> Paramvir Singh";
// });

// // For your simple message printing sytax given above ^

// Route::get('/pass/{name}', function ($name) {
//     return 'hello '.$name;
//  });

//  //will extract next part after pass and store in variable name
//  // type in URL ->  http://127.0.0.1:8000/pass/paramvir
//  // output -> hello paramvir
//  // /something is mandatory.

 

//  Route::get('/pass2/{name?}', function ($name = "SINGH") {
//     return 'hello '.$name;
//  });

//  // For Optional write ? like this -> {name?} and provide deafult value to name
//  // parameter like -> ($name = "SINGH")

//  Route::get('/pass3/{name?}', function ($name = "SINGH") {
//     return 'hello '.$name;
//  })->where('name','[a-z A-Z]+');

//  // ->where('name','[a-z A-Z]+'); is used to restrict the value after / 
//  //[a-z A-Z] means that it can accept single alphabet only from a-z or A-Z
//  //[a-z A-Z]+ means combination of alphabets is allowed from this range
//  //[0-9] means only single digit allowed from this range
//  //[0-9]+ means combination of digits is allowed from this range

//  Route::get('/pass4/{name?}/{id?}', function ($name = "SINGH", $id = '11702998') {
//     return 'hello '.$name." ->".$id;
//  })->where(['name'=>'[a-z A-Z]+' , 'id'=>'[0-9]+'] );

//  // For Multple parameters use above syntax

//  Route::get('/pass5/{name?}/{id?}', function ($name = "SINGH", $id = '11702998') {
//     return 'hello '.$name." ->".$id;
//  })->where('name','[a-z A-Z]+');

//  // ID will be evaluted bcoz of code written in app->providers->route service providers-> boot function at
//  // that place ->      Route::Pattern('id','[0-9]+');
//  // no need to write this again and again.. work for all when id comes in contact

//  Route::get('/pass6/{id}', function ($id) {
//     if($id == 20)
//     {
//         echo "param";
//         return 'hello '.$id;
//     }
//     else
//         return "sssss";
//  });

//  /* 
//  if(Route::input('id')==20)
//  {
//      echo "Hello";
//  }
//  else
//  {
//      echo "121";
//  }
 
//  */

//  Route::get('user/profile1',function()
//  {
//      echo "This is a Redirected Route";
//  })->name('profile1');

//  Route::get('redirect',function()
//  {
//     return redirect()->route('profile1');
//  });


//  // another way or redirection

//  //Route::redirect("/p1","/p2"); // When p1 will be opened, it will redirect to p1
 

//  Route::get('/greeting',function()
//  {
//      return view("myview.greeting", ['name' => 'param', 'add' => 'nz']);
//  });

//  // Fetching from url
//  Route::get('/greeting2/{a}/{b}',function($a,$b)
//  {
//      return view("myview.greeting2",['name'=>$a,'add'=>$b]);
//  });

//  Route::get('/check','c1@userinfo');
//  Route::get('/check2/{id2}','c1@userinfo2');


//  //Fetching values from url of get method
//  // run as /ui/?nam=anthing
//  // anything will be printed
//  Route::get('/ui',function()
//  {
//      $name = request('nam');
//      return view("userinfo",["n" => $name]);
//  });


//  Route::get('/ui2/{a}',function($a)
//  {
//      $posts = ['a1'=>"First Value","a2"=>"Second Value"];
//      return view('userinfo2',['x'=>$posts[$a]]);
//  });


// // Using Controller
//  Route::get('/check3/{a}','c1@userinfo3');

//  Route::get('/nav1', function () {
//     return view('nav');
// });

// Route::get('/form/f1',function()
// {
//     return view('form');
// }
// );
// //Route::post('/form/userform','c1@f1');
// // Direct function to return view



// Route::view('/form/f2','form');
// Route::post('/form/u1','param@f1');
// Route::get('/ca/{id1}/{id2?}','param@f2');

// Route::view('/m1/{a}','home')->middleware('age');

// Route::middleware(['age'])->
// group(function()
// {
//     Route::get('/a1',function()
//     {
//         echo "<br> This is first group middleware";
//     });

//     Route::get('/a2',function()
//     {
//         echo "<br> This is second group middleware";
//     });
// });

// Route::view('/m2/{a}','home')->middleware('verify1');

// Route::get('/db1','param@f3');
// Route::get('/db2','param@f4');







// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
