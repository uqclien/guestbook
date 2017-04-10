<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EntriesController extends Controller
{

    /**
     * Get Entry
     *
     * @return View
     */
    public function getEntries()
    {
        return view('entries')->with('entries', Entry::paginate(10));
    }

    /**
     * Get Entry by ID
     *
     * @param string $id
     * @return View
     */
    public function getEntry($id)
    {
        return view('entry')->with('entry', Entry::find($id));
    }

    /**
     * Add a new Entry
     *
     * @param Request $request
     * @return \Illuminate\Routing\Redirector
     */
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
