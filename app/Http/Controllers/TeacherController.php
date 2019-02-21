<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
  public function register() {
    return view('teacher.register');
    //dd('11111111111');
  }
}
