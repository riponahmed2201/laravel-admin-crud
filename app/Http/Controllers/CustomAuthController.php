<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
   public function showRegisterForm(){
       return view('admin.register');
   }

    public function register(Request $request){
        $this->validation($request);
        $request['password']= bcrypt($request->password);
        User::create($request->all());
//        return redirect('/')->with('status','Client Account has been registered successfully!');
        return redirect('custom.login')->with('status','Client Account has been registered successfully!');
       // return $request->all();
    }

    public function showLoginForm(){
       return view('admin.login');
     }

    public function login(Request $request){

        $this->validate($request,[
            'email'=>'required|max:255|email',
            'password'=>'required|max:255|min:6'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, ])) {
            return redirect('/dashboard');
        }
        return 'Ooops somthing went wrong! Please give valid  information';
      }


   public function validation($request){
     return  $this->validate($request,[
          'name'=>'required|max:255',
          'email'=>'required|max:255|email|unique:users',
          'password'=>'required|confirmed|max:255|min:6'
       ]);
   }

}
