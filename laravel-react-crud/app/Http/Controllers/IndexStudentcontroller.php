<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexStudentcontroller extends Controller
{
    public function index()
    {
        $student = DB::table('students')->select('*');
        $student = $student->get();


        return view('student', compact('student'));
    }
}
