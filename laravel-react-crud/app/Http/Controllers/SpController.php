<?php

namespace App\Http\Controllers;
use App\Models\Sp;

use Illuminate\Http\Request;

class SpController extends Controller
{
    public function store(Request $request)
    {
        $student = new Sp;
        $student->name = $request->input('name');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/products/', $filename);
            $student->image = $filename;
        }

        $student->save();
        return redirect()->back()->with('message','Student Image Upload Successfully');
    }
}
