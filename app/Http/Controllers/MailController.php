<?php

namespace App\Http\Controllers;

use App\Mail\SignUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request) 
    {
        $user = $request -> only('first_name','email', 'password');
        Mail::to($request -> user()) -> send(new SignUp($user));
        return redirect('/'); ;
    }
    
}
