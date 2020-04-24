<?php

namespace App\Services;

use App\Contact;
use App\Contracts\RemoteContact;

class Klaviyo implements RemoteContact
{
    private $klaviyo;
    
    public function __construct() 
    {
        $this->klaviyo = new \Klaviyo(config('services.klaviyo.public'));
    }

    public function addContact(Contact $contact)
    {
        $this->klaviyo->identify([
            '$id' => $contact->id,
            '$email' => $contact->email,
            '$first_name' => $contact->first_name,
            '$phone_number' => $contact->phone,
        ]);
    }

    public function updateContact(Contact $contact)
    {
        $this->klaviyo->identify([
            '$id' => $contact->id,
            '$email' => $contact->email,
            '$first_name' => $contact->first_name,
            '$phone_number' => $contact->phone,
        ]);
    }
}
