<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->course = $request->input('course');
        $student->section = $request->input('section');
        $student->save();
        return redirect()->back()->with('status','Student Added Successfully');
    }
    public function edit($id)
    {
        $student = Student::find($id);
        return view('editstudent', compact('student'));
    }
    public function delete($id)
    {
        $student = Student::find($id);
        return view('delete', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->course = $request->input('course');
        $student->section = $request->input('section');
        $student->update();
        return redirect('student');
   
    }
     public function destroy(Request $request,$id)
        {
            $student = Student::find($id);
            $student->delete();
            return redirect('student');
        }
}
