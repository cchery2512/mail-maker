<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function sendEmail(){
        $details = [
            'title'     => 'Mail from CCHERY',
            'body'      => 'Este es un correo de Prueba enviado desde el backend.' 
        ];

        Mail::to('cchery2512@gmail.com')->send(new TestMail($details));
        return "Email Sent";
    }
}
