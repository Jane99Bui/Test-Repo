<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\image;
use Illuminate\Support\Facades\DB;


class ImageController extends Controller
{
    //
    public function index()
    {
        $image = image::all();

        return view('viewimage',compact('image'));
    }
    public function image()
    {
        return view('image');
    }
    // --------------------------
  
    public function viewid($id)
    {
        $image = image::find($id);
        return view('viewimageid', compact('image'));
    }
    // --------------------------

    public function store(Request $request)
    {
        $image = new image;
        $image->name = $request->input('name');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/students/', $filename);
            $image->image = $filename;
        }

        // if($request->hasfile('image'))
        // {
        //     $file = $request->file('image');

        //     $extention = $file->getClientOriginalExtension();
        //     $filename=time().''.$extention;
        //     $file->move('uploads/products/', $filename);
        //     $image->image = $filename;
        // }

        $image->save();
        return redirect()->back()->with('message','Student Image Upload Successfully');
    }
}
