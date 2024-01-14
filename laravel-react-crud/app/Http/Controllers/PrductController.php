<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prduct;


class PrductController extends Controller
{
    public function index()
    {
        $product = Prduct::all();

        return view('indexproduct',compact('product'));
    }

    public function store(Request $request)
    {
        $product = new Prduct;
        $product->name = $request->input('name');
        $product->mota = $request->input('mota');
        $product->gia = $request->input('gia');


        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/students/', $filename);
            $product->image = $filename;
        }

        $product->save();
        return redirect()->back()->with('message','Student Image Upload Successfully');
    }
}
