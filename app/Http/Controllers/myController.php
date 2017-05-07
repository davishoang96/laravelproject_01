<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response; // Library for Cookie

class myController extends Controller
{
    //
    public function helloWorld()
    {
      echo "<h1>Hello Controller</h1>";
    }

    public function inTen($name)
    {
      echo "<h1>Hello</h1>". $name;
    }

    public function login($name)
    {
      echo "Your are in login page". $name;
      return redirect()->route('MyRoute2');
    }

    public function Getdata(Request $request)
    {
      //return $request->path();

      // get or post
      // if($request->isMethod('get'))
      //   echo "This is get<br>";
      // else
      //   echo "This isn't get<br>";
      // return $request->url();

      if($request->is('My*'))
        echo "Have Req";
      else {
        echo "No Req";
      }
    }

    public function postForm(Request $request)
    {
      echo $request->first_name;
    }

    public function presshere(Request $request)
    {
      echo $request->name;
    }

    public function create_user()
    {

    }

    // set & get cookie //
    public function setcookie()
    {
      $response = new response();
      $response->withCookie('Viet','Project Laravel', 1);

      return $response;
    }

  
    public function getcookie(Request $request)
    {
      return $request->cookie('Viet');
    }


    // upload images using Request method
    public function postfile(Request $request)
    {
      if($request->hasFile('myfile'))
      {

        $file = $request->file('myfile'); // store image into $file
        if($file->getClientOriginalExtension('myfile') == 'JPG')
        {
          $filename = $file->getClientOriginalName('myfile'); // get original filename
      
          echo $filename;

          $file->move('img', // move file to img
          $filename); // rename file
          echo " File uploaded";
        }
        else
          echo "Wrong file extension!";
      }
      else
        echo "Upload file failure!";
    }

    // Json
    public function getjson(Request $request)
    {
      $array = ['E-Learning'=>'Laravel', 'Nodejs', 'Python', 'Angular 2'];
      return response()->json($array);
    }

    public function getmyarray1()
    {
      $array = ['1','2','3','4'];
      return view ('test.array', compact('array'));
    }

    public function getshot($name)
    {
      return view('Pages.news',['name'=>$name]);
    }

}
