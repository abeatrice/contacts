<?php

namespace App\Contracts;

use App\Contact;

interface RemoteContact
{
    public function addContact(Contact $contact);

    public function updateContact(Contact $contact);
}
