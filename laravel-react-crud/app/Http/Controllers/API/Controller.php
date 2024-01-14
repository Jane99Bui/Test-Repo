<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Controller extends Controller
{
    public function store(Request $request)
    {
        $account = new Account;
        $account->username = $request->input('username');
        $account->password = $request->input('password');
     
        $account->save();
        return response()->json([
            'status'=>200,
            'message'=>'ok',]);
    }
}
