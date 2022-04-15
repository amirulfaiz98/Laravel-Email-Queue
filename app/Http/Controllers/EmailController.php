<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
// use App\Mail\SendMailable;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail()
    {
        // Mail::to('amirulfaiz.work@gmail.com')->send(new SendMailable());
        // echo "Email Sent.";

        $emailJob = (new SendEmailJob())->delay(now()->addSeconds(3));
        dispatch($emailJob);

        echo "Email Sent.";
    }
}
