<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index(){
      return view('dashboard');
  }

  public function studentview(){
      return view('layouts.studentlist');
  }
}
