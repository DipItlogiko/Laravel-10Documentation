<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function archiveTask()
    {
        return view('Task');
    }

    public function postData(Request $request)
    {
        $archived = $request->boolean('archived');

        dd($archived);
    }
}
