<?php

namespace Tutorialspoint\Http\Controllers;

use Illuminate\Http\Request;
use Tutorialspoint\Journal;

class HomeJournal extends Controller
{
    //


    
    public function journals(Request $request)
    {


        $search = $request->input('search');

        $journals = Journal::query()
            ->where('is_published', 1)
            ->when($search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('title', 'LIKE', "%{$search}%")
                        ->orWhere('author', 'LIKE', "%{$search}%");
                });
            })
            ->orderBy('position', 'desc')
            ->paginate(9)
           ; // keeps search text during pagination

        return view('journals', compact('journals', 'search'));
      
    }

}
