<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TeamMailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $form_type = '';
    public $email_address = '';
    public $contact_name = '';
    public $contact_message = '';

    public function __construct($form_type,$email_address,$contact_name=null,$contact_message=null)
    {
        $this->form_type = $form_type;
        $this->email_address = $email_address;
        $this->contact_name = $contact_name;
        $this->contact_message = $contact_message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mailers.team_notification')
            ->subject('Website Notification')
            ->with(
                [
                    'form_type'=>$this->form_type,
                    'email_address'=>$this->email_address,
                    'contact_name'=>$this->contact_name,
                    'contact_message'=>$this->contact_message
                ]
            );
    }
}
