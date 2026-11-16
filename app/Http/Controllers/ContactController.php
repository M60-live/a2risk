<?php

namespace App\Http\Controllers;

use App\Mail\TeamMailer;
use Illuminate\Http\Request;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMails(Request $request)
    {
        $formData = $request->all();
        $form_type       = null;
        $contact_name    = null;
        $email_address   = null;
        $contact_message = null;

        foreach($formData['form_data'] as $input)
        {
            switch ($input['name']){
                case 'type':
                    $form_type = $input['value'];
                    break;
                case 'name':
                    $contact_name = $input['value'];
                    break;
                case 'email':
                    $email_address = $input['value'];
                    break;
                case 'message':
                    $contact_message = $input['value'];
                    break;
            }
        }

        Mail::to($email_address)->send(new ContactForm($contact_name));
//        Mail::to('info@a2risk.co.za')->send(new TeamMailer($form_type,$email_address,$contact_name,$contact_message));
        Mail::to('sipho@alphatobeta.co.za')->send(new TeamMailer($form_type, $email_address, $contact_name, $contact_message));

        return json_encode(array('status' => 'ok', 'content' => 'Message sent'));
    }
}
