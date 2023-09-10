<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileDownloadController extends Controller
{
    public function downloadFile()
    {
        $pathToFile = 'pdf/dip.jpg';  ////// pdf folder is located into the public folder
        return response()->download($pathToFile);
    }


    public function downloadFileWithCustomNameAndHeaders()
    {

    $pathToFile = 'pdf/dip.jpg'; // pdf folder is located into the public folder
    $name = 'Itlogiko.jpg'; // akhane ami amar file name take customize korechi  mane ami amar file ar nam take chaile aivabe change kore dite pari 
    $headers = [
        'Content-Type' => 'application/jpg', //  akhane amra key value format aa response header aaa data pass korchi
        'X-Custom-Header' => 'Custom Value', // Add any custom headers you need
        ];

    return response()->download($pathToFile, $name, $headers);
   }

}
