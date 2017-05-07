<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('study', function(){
  return "Hello World";
});

Route::get('study/laravel', function(){
  echo "<h1>Study Laravel</h1>";
});

// Truyen tham so vao routes

Route::get('profile/{name}',function($name){
  echo "Your name is: ". $name;
  //public/profile/{name}
});

// Truyen tham so vs phuong thuc where
Route::get('ngay/{date}', function($date){
  echo "Today is: ". $date;
})->where(['date'=>'[0-9a-zA-Z]+']);

// Dinh danh routes
Route::get('Route1', ['as'=>'MyRoute',function(){
  echo "<h1>My Route</h1>";
}]);

Route::get('Goiten', function(){
  return redirect()->route('MyRoute2');
});

Route::get('Route2', function(){
  echo "Route 2 is here";
})->name('MyRoute2');


// GROUP ROUTE
Route::group(['prefix'=>'mygroup'], function(){
  Route::get('user1', function(){
    echo "user 1";
  });

  Route::get('user2', function(){
    echo "user 2";
  });
});

// Tao Controller
Route::get('callController','myController@helloWorld');
Route::get('thamSo/{name}','myController@inTen');
Route::get('login/{name}','myController@login');


//URL
Route::get('MyRequest','MyController@Getdata');


//GetForm
Route::get('getForm', function(){
  return view('postForm');
});

Route::post('postForm', ['as'=>'postForm','uses'=>'myController@postForm']);

Route::get('newView', function() {
   echo "My new view"; 
});


//cookie
Route::get('setcookie','myController@setcookie');
Route::get('getcookie','myController@getcookie');


//Upload images
Route::get('uploadfile', function() { //uploadfile is the Route URL
  return view('upfile'); //upfile is the blade php in resources folder
});

Route::post('postfile', ['as'=>'postfile','uses'=>'myController@postfile']); // postfile is the function

//JSON
Route::get('getjson', 'myController@getjson');

//view
Route::get('mypage', function() {
  return view('folder1.newpage2'); // use . to go into other folder in view folder instead of using /
});

// truyen du lieu vao view
Route::get('myview/{name}', 'myController@myview');
View::share('Computer', 'Microsoft Surface');


//Blade template
Route::get('getshot/{name}', 'myController@getshot');

Route::get('getshot/{name}', function() {
  return view('Pages.news', ['name'=>$name]);
});

Route::get('myarray1', 'myController@getmyarray1');