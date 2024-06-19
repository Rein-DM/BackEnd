<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendEmail()
    {
        $name = [
            'title' => 'Mail from Laravel',
            'body' => 'This is for testing SMTP mail in Laravel.'
        ];

        Mail::to('reinier.mercado12@gmail.com')->send(new SendEmail($name));

        return "Email Sent!";
    }
}
