<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\Invoice;

class MailController extends Controller
{
    function sendTestEmail(){
        // mail::send('emails.test',[],function($message){
        //     $message->to('zisan979@giail.com','Zisan');
        //     $message->subject('Test Email 3');
        //     $message->from('zisan@mail.com','Zisa2108');
        // });

        mail::send(['text'=>'emails.text'],[],function($message){
            $message->to('zisan979@giail.com','Zisan');
            $message->subject('Test Email Text');
            $message->from('zisan@mail.com','Zisa2108');
        });

        return 'Email Sent';
    }

    function sendTestEmailWithData(){
        $data=[
            'orderid'=>'15',
            'ordertotal'=>'5000',
        ];


//Only Data


        // mail::send(['html'=>'emails.data'],$data,function($message){
        //     $message->to('zisan979@giail.com','Zisan');
        //     $message->subject('Test Email -With Data');
        //     $message->from('zisan@mail.com','Zisa2108');
        // });



// With Data and Attachments

        // mail::send(['html'=>'emails.data'],$data,function($message){
        //     $message->to('zisan979@giail.com','Zisan');
        //     $message->subject('Test Email -With Data and Attachments');
        //     $message->from('zisan@mail.com','Zisa2108');
        //     $message->attach(public_path('files/data.pdf'),[
        //         'as' => 'invoice.pdf',
        //         'mime' => 'application/pdf',
        //     ]);
        // });


// With Data, Image and Attachments

        mail::send(['html'=>'emails.data-image'],$data,function($message){
            $message->to('zisan979@giail.com','Zisan');
            $message->subject('Test Email -With Data, Image and Attachments');
            $message->from('zisan@mail.com','Zisa2108');
            $message->attach(public_path('files/data.pdf'),[
                'as' => 'invoice.pdf',
                'mime' => 'application/pdf',
            ]);
        });


        return 'Email Sent';
    }

    function sendMailWithMailable(){
        Mail::to('Zisan979@gmai.com', 'NZ')->send(new Invoice());
        return 'Email sent';

    }
}
