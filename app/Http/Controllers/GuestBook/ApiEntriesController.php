<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ApiEntriesController extends Controller
{

    /**
     * Get a list of entries
     *
     * @return Response
     */
    public function getEntries()
    {
        return $this->toJson(Entry::all());
    }

    /**
     * Get a list of modified entries
     *
     * Each message should be reversed, e.g. "What a cool app!" becomes "!ppa looc a tahW"
     * Each name should be capitalized, e.g. "John" becomes "JOHN".
     *
     * @return Response
     */
    public function getSpecialEntries()
    {
        $entries = Entry::all();
        foreach ($entries as &$entry) {
            $entry->name = strtoupper($entry->name);
            $entry->message = strrev($entry->message);
        }
        return $this->toJson($entries);
    }

    /**
     * Return Json Response
     *
     * @param $data
     * @return Response
     */
    private function toJson($data)
    {
        return response()->json($data);
    }
}
