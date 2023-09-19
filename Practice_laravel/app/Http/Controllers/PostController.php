<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'title' => 'bail|required|max:255',
        //     'body' => 'required',
        // ]);

        ////// OR (amra ai vabe oooo validation rules gulo likhte pari | ai ta use na kore)

        $validatedData = $request->validate([ ////// validation rules jodi kono input field na mane tahole validation ar nicher code gulo execute hobe na jemon akhane hello world print korbe na jodi kono user amader input field ar value ai define kora rules ar baire onno kichu dei
            'title' => ['bail','required','max:255'],
            'body' => ['required'],
        ]);

        return 'hello world!';
    }
}
