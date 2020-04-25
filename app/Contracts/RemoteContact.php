<?php

/**
 * Author: Andrew Beatrice
 * Site: http://andrewbeatrice.com/
 * Email: abeatrice.mail@gmail.com
 * Date: 4/25/20
 */

namespace App\Contracts;

use App\Contact;

interface RemoteContact
{
    public function addContact(Contact $contact);

    public function updateContact(Contact $contact);
}
