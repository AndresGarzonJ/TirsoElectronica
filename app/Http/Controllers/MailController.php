<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;


class MailController extends Controller
{
    

    public  function sendContactMail()
    {
        Mail::send(['text'=>'mail'],['name','Yeison'], function($message){

            $message->to('yecaicedo@unicauca.edu.co','To Yeison')->subject('test email');
            $message->from('yeisoneduardocaicedo95@gmail.com','Yeison Caicedo');
        });
        
    }
}
