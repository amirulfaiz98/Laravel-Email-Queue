<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendEmail()
    {
        Mail::to('amirulfaiz.work@gmail.com')->send(new SendMailable());
        echo "Email Sent.";
    }
}
