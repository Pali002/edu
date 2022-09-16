<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller{
    
    public function newStudent() {
        return view("new_student");
    }

    public function submitStudent(Request $request) {
        print_r($request->all());
    }
}
