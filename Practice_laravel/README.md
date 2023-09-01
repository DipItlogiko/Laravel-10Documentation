# Laravel-10Documentation

## Controllers

***All practices are located in routes/web.php***

controller jekhane amra amader route ar logic gulo likhi.

controller ar nam sob somy miningfull hole valo hoy jemon:

উদাহরণস্বরূপ, একটি UserController ক্লাস সমস্ত ব্যবহারকারীর সংক্রান্ত সমস্ত অনুরোধ হ্যান্ডল করতে পারে, যেমন: ব্যবহারকারী দেখানো, তৈরি করা, আপডেট করা এবং মুছে ফেলা সমস্ত অনুরোধ। ডিফল্ট অবস্থায়, কন্ট্রোলারগুলি app/Http/Controllers ডিরেক্টরিতে সংরক্ষণ করা হয়।


* For making new controller

       php artisan make:controller controller_ar_nam


## Invokable Controllers

invokable controllers hocche single action controller..mane je controller ar moddhe akta action ee thakbe abong oi controller shudhu oi akta action takei perform korbe.


* For Creating a new Invokable Controllers

       php artisan make:controller controller_ar_nam --invokable


## Resource Controllers 

[Tutorial-link](https://www.youtube.com/watch?v=ejOWLTUIo8w)

resource controllers amader oonek gulo route and oonek gulo function bydefault diye dei.ai function gulo (CRUD)create,read,update,delete operation ar jonno kaj kore.


* For Creating a new Resource Controllers

        php artisan make:controller controller_ar_nam --resource

* Specifying The Resource Model

  jokhon amra chacchi je amader resource controller create korar somoy amader resource controller a kon model ta bebhohar korbo ta bole dite pari jemon:

       php artisan make:controller controller_ar_nam --model=model_ar_nam --resource

  **Example**:

  php artisan make:controller ExampleResourceController --model=Post --resource     
  
*  resource controller akta set korar por kon url a hit korle resource controller ar kon action a jai ta niche deya holo:

  ![image!](/Practice_laravel/Screenshot%20from%202023-08-31%2016-08-11.png "San Juan Mountains")

**NOTE:** Resource Controller ar moddhe thaka kono function ar nam change kora jabe na.change korle oi function kaj korbe na.

Resource Controller ar maddhome amra je kono application ke khub taratari toiri korte pari.

## Controller Middleware

amra middleware ke controller ar moddhe ooooo likhte pari.(chack routes/web.php)

## Generating Form Requests
  
   ###  form request classes 

   [Tutorial_link](https://www.youtube.com/watch?v=8oMLIWJsCoE);

এটি আপনার এপ্লিকেশনের সেকিউরিটি এবং ডেটা সঠিকভাবে প্রস্তুত করতে সাহায্য করে এবং স্থিতিশীল কোড লেখার একটি প্রশাসনিক অপশন হতে পারে

jokhon amra amader resource controller create korbo model shoho tokhon tar sheshe --requests diye dile amader resource controller ar storage abong update method ar jonno 2ta request generate hobe.sei 2 ta request amra app/Http/Request ar moddhe pabo abong chile amra oi request ar moddhe validation korte pari rules() ar moddhe.

* For creating This

      php artisan make:controller controller_ar_nam --model=model_ar_nam --resource --requests


  **Example:**

   php artisan make:controller PhotoController --model=Photo --resource --requests


**OR:**   

  we can create a single Requset in this way:

      php artisan make:request request_ar_nam


  Example:

  php artisan make:request StorePostRequest     

  
  Note: app/Http/Request ar moddhe ai StorePostRequest ta create hoye jabe  


## Partial Resource Routes

 chack Routes/web.php
