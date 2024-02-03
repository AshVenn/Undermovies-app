<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\HelloUndermovie;
class Get_started extends Controller
{
    //
    public function sendEmail(Request $request){
       
        Mail::to($request->input('email'))->send(new HelloUndermovie());

    }
}
