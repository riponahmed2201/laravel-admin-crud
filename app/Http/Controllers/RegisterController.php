<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
   public function create(){
       return view('admin.register');
   }
   public function store(Request $request){
           $this->validate($request,[
           'name' =>'required',
           'email'=> 'required|unique:users',
           'password' =>'required',
           'confirm_password' =>'required|same:password',
       ]);
      $data = new User();
      $data->name= $request->name;
      $data->email= $request->email;
      $data->password= $request->password;
      $data->save();
      return redirect('login')->with('status','Registration succesfully. Now login please!');


   }
}
