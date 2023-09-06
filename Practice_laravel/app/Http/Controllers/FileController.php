<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function uploadFile(Request $request)
{
    if ($request->hasFile('photo')) { //// akhane ami bolechi jodi amar $request ar modhhe name='photo' field a kono photo thake tahole ar moddher code gulo execute hobe 
        $uploadedFile = $request->file('photo');

        // Get the fully-qualified path of the uploaded file.
        $path = $uploadedFile->path();
         //dd($path);

        // Get the file extension (may be different from the client-supplied extension).
        $extension = $uploadedFile->extension();
         //dd($extension);
        // You can use $path and $extension as needed.
        // For example, store the file or display its information.
        


        ////__Storing Uploaded Files_(store())_//// 

        // Example: Storing the file in the storage directory.
        //$uploadedFile->store('images');//////images hocche amar directory name ai derectory ta amar storage directory ar moddhe akta app directory create korbe karon config/filesystem.php ar moddhe 'root' => storage_path('app') aita bolache tai oo app directory create korbe tar moddhe amar images directory ta create korbe.  default amader file local a save hobe amra jodi amazon ar s3 te oooo save korte pari   
      
        
       ////__Storing Uploaded Files_(storeAs())_//// 

       $uploadedFile->storeAs('images','dip.jpg'); ///akhane prothom ta hocche amar directory name jekhane  amr file gulo save hobe and second ta hocche amar file ar nam akhane o jeifile eee save korbe ai name save korbe and second bar kew kono file upload korle file ta overwrite hobe jabe kintu filename same thakbe. akhane amra r akta argument oo poss korte pari check Readme.md file
       /////or
       //$request->photo->storeAs('images','dip.jpg'); //////// amra oporer line ta aivabe ooo likhte pari 

        return "File uploaded successfully!";
    }

    return "No file was uploaded."; ///// name='photo' field a kono photo na diye submit korle ai ta show hobe 
}
}
