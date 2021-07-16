<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use App\Jobs\SendEmail;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function sendEmail(){
        $details = [
            'title'     => 'Mail from CCHERY',
            'body'      => 'Este es un correo de Prueba enviado desde el backend.' 
        ];



        SendEmail::dispatch('justaburguer@gmail.com', $details);
        //Mail::to('cchery1225@gmail.com')->send(new TestMail($details));
        
        return "Email Sent";
    }
}
