<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Jobs\AddRemoteContact;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class ContactImportController extends Controller
{
    public function create()
    {
        return view('contact.import.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'contacts' => 'required|mimes:csv,txt'
        ]);
        
        $path = $request->file('contacts')->getRealPath();
        
        $handle = fopen($path, "r");
        $header = true;
        
        while ($csvLine = fgetcsv($handle, 1000, ",")) {

            if ($header) {
                $header = false;
            } else {
                Contact::create([
                    'user_id' => auth()->user()->id,
                    'first_name' => $csvLine[0],
                    'email' => $csvLine[1],
                    'phone' => $csvLine[2],
                ]);
            }
        }

        return redirect()->route('contacts.index')->withStatus('contacts created.');
    }
}


