<?php

namespace App\Http\Controllers;
use App\Models\Account;

use Illuminate\Http\Request;

class AccountController extends Controller
{
   

    public function store(Request $request)
    {
        $account = new Account;
        $account->name = $request->input('name');
        $account->password = $request->input('password');
        $account->save();
        return response()->json(['status'=>200,'message'=>"okay"]);
    }
}
