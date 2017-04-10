<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class EntriesController extends Controller
{

    public function postEntry(Request $request)
    {
        // get form input data
        $entry = [
            'name' => $request->input('frmName'),
            'message'    => $request->input('frmMessage')
        ];

        // save the guestbook entry to the database
        Entry::create($entry);

        return redirect('/entries');
    }
}
