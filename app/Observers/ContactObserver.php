<?php

/**
 * Author: Andrew Beatrice
 * Site: http://andrewbeatrice.com/
 * Email: abeatrice.mail@gmail.com
 * Date: 4/25/20
 */

namespace App\Observers;

use App\Contact;
use App\Jobs\AddRemoteContact;
use App\Jobs\UpdateRemoteContact;

class ContactObserver
{
    /**
     * Handle the contact "created" event.
     *
     * @param  \App\Contact  $contact
     * @return void
     */
    public function created(Contact $contact)
    {
        AddRemoteContact::dispatch($contact);
    }

    /**
     * Handle the contact "updated" event.
     *
     * @param  \App\Contact  $contact
     * @return void
     */
    public function updated(Contact $contact)
    {
        UpdateRemoteContact::dispatch($contact);
    }
}
