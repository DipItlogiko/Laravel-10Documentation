<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GitHub;

class GitHubController extends Controller
{
    public function downloadReadme()
    {
        return response()->streamDownload(function () {
            echo GitHub::api('repo')
                        ->contents()
                        ->readme('laravel', 'laravel')['contents'];
        }, 'laravel-readme.md');
    }
}
