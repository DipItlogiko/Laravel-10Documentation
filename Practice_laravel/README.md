# Laravel-10Documentation

## File Storage
Flysystem made by Frank de Jonge.

* Flysystem helps with handling files and storage.

* Laravel integrates Flysystem, making it easy to work with files.

* You can use different storage options like your computer, SFTP, or Amazon S3(Amazon S3 hocche akta cloud storage service).

* The best part is, you can switch between these options easily.

So, whether you're developing on your computer or running your website on a server, you use the same methods to handle files.



## Configuration

laravel ar filesystem ar  configuration file thake config/filesystems.php ar moddhe. 


amra ai config/filesystems.php ar moddhe chaile amader eeccha moto custom disks create korte pari  disks array ar moddhe . and amra chile same driver use korte pari akadik disk ar moddhe.

## The Local Driver([Document](https://laravel.com/docs/10.x/filesystem#the-local-driver))

check routes/web.php


## The Public Disk([Document](https://laravel.com/docs/10.x/filesystem#the-public-disk))

check routes/web.php



## Driver Prerequisites([Document](https://laravel.com/docs/10.x/filesystem#driver-prerequisites))

* **S3 Driver Configuration**

  Before using the S3 driver, you will need to install the Flysystem S3 package via the Composer package manager: 

         composer require league/flysystem-aws-s3-v3 "^3.0" --with-all-dependencies


   S3 driver ar configuration file ta ache config/filesystems.php ai path a. amra amader S3 driver array ar moddhe je configuration gulo ache shi gulo fill up korte hobe amader nijossho jodi kono S3 driver thake Amazon ar.(This file contains an example configuration array for an S3 driver. You are free to modify this array with your own S3 configuration and credentials.)  


* **FTP Driver Configuration**([Document](https://laravel.com/docs/10.x/filesystem#ftp-driver-configuration))    
   
  Before using the FTP driver, you will need to install the Flysystem FTP package via the Composer package manager:

         composer require league/flysystem-ftp "^3.0"   
  

* **SFTP Driver Configuration**([Document](https://laravel.com/docs/10.x/filesystem#sftp-driver-configuration)) 


## Scoped & Read-Only Filesystems([Document](https://laravel.com/docs/10.x/filesystem#scoped-and-read-only-filesystems))

chack routes/web.php (there is an error i didn't solve this error because it is a simple error and i am able to solve it)


## Amazon S3 Compatible Filesystems([Document](https://laravel.com/docs/10.x/filesystem#amazon-s3-compatible-filesystems))

too easy to execute  this code that why i didn't execute this section code. For execute this section code first of all you need to add this code 'endpoint' => env('AWS_ENDPOINT', 'https://minio:9000'), into yoru S3 arrary of config/filesystems.php file. and then add this code AWS_URL=http://localhost:9000/local  into your .env file as well.that's it.


## Obtaining Disk Instances([Document](https://laravel.com/docs/10.x/filesystem#obtaining-disk-instances))


ai section a bola hoyeche je jodi amra kokhono Storage:: fasads ar sathe sorasori put() method diye dei and put(ar moddhe kono akta file ar nam and oi file ar content ki hobe ta bole dei ) tahole Storage:: fasads ta default je disk ta set kora ache amader .env file aaa FILESYSTEM_DISK=local and amader config/filesystems.php file a 'default' => env('FILESYSTEM_DISK', 'local'), oi disk a put(ar moddhe thaka file rrr content ta chole jabe) 


## On-Demand Disks([Document](https://laravel.com/docs/10.x/filesystem#on-demand-disks))


 amra chaile one time use ar jonno disk create korte pari amader config/filesystems.php te disks array ar moddhe kono disk define na koreoooooo...amra sorasori Storage:: fasads theke build() method take call kore ai kaj ta korte pari.....check routes/web.php


## Retrieving Files([Document](https://laravel.com/docs/10.x/filesystem#retrieving-files))


amra Storage:: Fasads ar sathe get() method use kore kono disk ar theke kono file ke get korte pari.

Check Document and routes/web.php


## Downloading Files([Document](https://laravel.com/docs/10.x/filesystem#downloading-files))


          return Storage::download('file.jpg', $name, $headers);

amra ai vabe download file ta set kore dite pari..... aikhane jemon Storage:: Fasads theke ami sorasori download() method take call koreci tahole download() method ta amader bydefault je disk set kora ache 'local'  .env and config/filesystems.php te oi local disk ar root path ar moddhe jodi amader download( ar moddhe jei file ar nam dibo oi file ta thake tahole download hobe)  


amader download() ar portho paramiter aaa file ar nam thakbe jei file ta ami download korte chacchi and second paramiter aaa name diye debo je kono akta jokon kew amader oi file take download korbe tokon ai name ta dekhabe and third paramiter aaaa (you may pass an array of HTTP headers as the third argument to the method)


## File URLs([Document](https://laravel.com/docs/10.x/filesystem#file-urls))


amra ai file url ar maddhome Storage ar theke kono file ar url ta pete pari....


            $url = Storage::url('file.jpg');


   akhane Storage:: Fasads ar sathe sorasori url() method ta use kora hoyeche and url(ar moddhe je file ar nam ta bole dewa hoyeche) oi file ta amader default je disk set kora ache 'local' .env and config/filesystems.php te oi local disk ar root path a jodi amar ai file ta thake tahole amader oi file ar url ta return korbe......    


## URL Host Customization([Document](https://laravel.com/docs/10.x/filesystem#url-host-customization))


this array is located into the config/filesystems.php
        

## Temporary URLs([Document](https://laravel.com/docs/10.x/filesystem#retrieving-files))

ai temporary url ta local driver aa support kore na ai temporary urls ta S3 driver aaa support kore.
(but you should check the documentation because the last part of the section  is important)


## Temporary Upload URLs([Document](https://laravel.com/docs/10.x/filesystem#temporary-upload-urls))

 s3 driver aaa shudhu ai Temporary Upload URLs
 ta support kore.



## File Metadata([Document](https://laravel.com/docs/10.x/filesystem#file-metadata)) 


ai section a bola ache ki vabe amra amader Storage ar disk theke kono file ar size ta kivabe dekhbo and amader oi file ta last modified kobe hoyeche and oi file ar mime type ta dekhte pabo and oi file ar  path ta dekhte pabo

(check the document and routes/web.php as well)


## Failed Writes([Document](https://laravel.com/docs/10.x/filesystem#file-metadata))(IMPORTANT) 


If the put method (or other "write" operations) is unable to write the file to disk, false will be returned


check the document 



## Prepending & Appending To Files([Document](https://laravel.com/docs/10.x/filesystem#prepending-appending-to-files))


* prepend()

  ai method ar moddh amra je file and je content ta deye debo oi  content ta amader oi file ar shurute add korbe.


* append()

  ai method ar moddh amra je file and je content ta deye debo oi  content ta amader oi file ar seshe add korbe.


Check routes/web.php



## Copying & Moving Files([Document](https://laravel.com/docs/10.x/filesystem#copying-moving-files))

akhane bola hoyeche amra ki vabe akta file take copy and move korte pari


## Automatic Streaming([Document](https://laravel.com/docs/10.x/filesystem#automatic-streaming))(VERY VERY IMPORTANT)


## File Uploads([Document](https://laravel.com/docs/10.x/filesystem#file-uploads))(IMPORTANT)

   
## Specifying A File Name([Document](https://laravel.com/docs/10.x/filesystem#specifying-a-file-name))


              $path = $request->file('avatar')->storeAs(
              'avatars', $request->user()->id
              ); 

aikhane amader $request theke akta file ashbe avatar name ...avatar hocche amar fortend ar akta input field ar name="avatar" aita and backend aa ami oi name take file(ar moddhe bole diyechi)and ai file take oo store korbe avatars name akta directory te and file ar name ta hobe  $request->user()->id mane request user() ar id.            


## Specifying A Disk([Document](https://laravel.com/docs/10.x/filesystem#specifying-a-disk))(IMPORTANT)

* store()

bydefault store() method default disk ta ke use kore 'local' ja amader .env and config/filesystems.php ar moddhe set kora..... amra chaile amader store() method ar moddhe je content gulo thakbe ta kon disk a store korbe ta bole  dite pari store() method ar second argument aaaa.and store() method ar moddhe je file ta ashbe store() method oi file ar akta name ooo nije theke create kore then oi name amader file take store kore


* storeAs()

  storeAs() ar khettre oo tai aita oo bydefault local disk use kore amara ai storeAs() method ar third argument aaa amader disk ar nam bole dite pari tahole storeAs() method ar moddher content gulo amader oi disk ar root path dhore giye oi content gulo store korbe. and storeAs() method ar moddhe jei file ta thakbe oi file ta ki name save korbe ta amra storeAs() method ar second argument a bole dite pari.


##  Other Uploaded File Information([Document](https://laravel.com/docs/10.x/filesystem#other-uploaded-file-information))


* getClientOriginalName()

  ai method ar maddhome amra amader file ar original name ta dekhte pai kintu aita unsafe.amra ai method ar poriborte  hashName() ai mathod ta use korbo ai mathod ta amader file ar name dekhabe kintu hash kore dibe name ta.jar fole kew sohoje bujte parbe na.


* getClientOriginalExtension()

  ai method ar maddhome amra amader file ar extension ke dekhte pari.kintu ai method ta unsafe.amra ai method ar poriborte extension(); method ta use korbo.

Check routes/web.php


## File Visibility([Document](https://laravel.com/docs/10.x/filesystem#file-visibility))(IMPORTANT)


 
## Local Files & Visibility([Document](https://laravel.com/docs/10.x/filesystem#local-files-and-visibility))

  

## Deleting Files([Document](https://laravel.com/docs/10.x/filesystem#deleting-files))   

ai section a file delete ki vabe korte hoy ta bola hoyeche

jemon 
     
         Storage::delete('file.jpg');


  jehetu ami aikhane Storage:: Fasads   ar pore sorasori delete() method use korechi tai aita bydefault je disk set kora ache 'local' ar root path dhore giye delete(ar moddhe je file ar nam thakbe oita jodi amader local disk ar root path ar moddhe giye khuje pai tahole oi file ta delete hoye jabe)    


R jodi   


           Storage::disk('public')->delete('path/file.jpg');


  r jodi ami Storage:: fasads ar pore disk ta ke specific kore dei thole amar oi disk ar root path dhore  giye delete(ar moddhe fe file ar nam dibo) oi file take delete kore debe..         


## Directories([Document](https://laravel.com/docs/10.x/filesystem#directories))

* **Get All Files Within A Directory** 


  * files()

    ai method ar moddhe amra jei directory ar nam diye debo...files() method oi  directory ar moddhe  thaka shudhu sob file ar akta array amader return korbe...

    check routes/web.php


  * allFiles()

    ai method ar moddhe amra jei directory ar nam diye debo...allFiles() method oi  directory ar moddhe  thaka sob file and sob subdirectory ar akta array amader return korbe...  

    check routes/web.php


## Get All Directories Within A Directory([Document](https://laravel.com/docs/10.x/filesystem#get-all-directories-within-a-directory))    

i have understood this section of code that's way i didn't execute this code....check (Get All Files Within A Directory  practice into the routes/web.php then you will be able to understand this code very easily)
   

## Testing([Document](https://laravel.com/docs/10.x/filesystem#testing)) 

 



## Custom Filesystems([Document](https://laravel.com/docs/10.x/filesystem#custom-filesystems))

laravel Flysystem amader oonek driver diye dei bydefault..oi driver gulo amra config/filesystems.php ar moddhe gele dekhte pabo....jodi amra chai kono custom driver create korte tahole (check the Document)


## Some important things:

* jokhon amra Storage:: Fasads ar sathe disk() use na kore  sorasori kono method use korbo

FOR EXAMPLE:

        Storage::put('file.txt', $contents);


   tokhon amader laravel ar .env and config/filesystems.php te default je disk set kora ache oi disk ar root path a giye amader ai file.txt (contents ar moddhe ja likhbo ta amader file.txt ar moddhe jabe) file ta store hoye jabe......

   bydefault amader laravel ar .env and config/filesystems.php ar moddhe default vabe disk 'local' set kora thake amra chaile ai default disk take change kore dite pari .env and config/filesystems.php file aa giye.


## The belows topics i don't understand:

* Testing([link](https://laravel.com/docs/10.x/filesystem#testing))(i will be able to understand it if i give more time on it)