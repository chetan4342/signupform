<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logger;
class SignupForm extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function submit(Request $request)
    {
     $logger = new Logger;
     $logger->name=$request->name;
     $logger->email=$request->email;
     $logger->password=$request->password;
     $logger->save();
     echo "Welcome";
     echo "<pre>";
     print_r($request->input('name'));
    }

}
