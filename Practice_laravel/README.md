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


## API Resource Routes

When you define routes for resources that will be used by APIs, you often don't want to include routes that show HTML templates like 'create' and 'edit' pages. To make things easier, you can use the 'apiResource' method, which will automatically remove these two routes for you.

jokhon amra api resource controller create korbo tokhon oi controller ar moddhe 2 ta method create hoy na akta hocce create method and r akta hocche edit method 

* For creating a new api resource controller

      php artisan make:controller PhotoController --api


##  Nested Resources

  nested resources amra tokhon eee bebohar korbo jokhon dhoren একটি ফটো রিসোর্স আছে যেটির মাধ্যমে একটি ফটোর সাথে একাধিক মন্তব্য সংযুক্ত হতে পারে। রিসোর্স কন্ট্রোলারগুলি নেস্ট করতে, আপনি আপনার রুট ঘোষণায় . নোটেশন ব্যবহার করতে পারেন।


  for example:

       Route::resource('photos.comments', PhotoCommentController::class);

  akhane photos resource a moddhe . diye comments resource ke nested kore diyechi photos resource ar moddhe    

## Shallow Nesting

সাধারণভাবে, প্যারেন্ট এবং চাইল্ড আইডি দুটি ইউআরআইর মধ্যে থাকা দরকার নেই, কারণ চাইল্ড আইডি ইতিমধ্যে একটি ইউনিক আইডেন্টিফায়ার হয়ে থাকে। আপনি আপনার মডেলগুলির ইউআরআই সেগমেন্টে মডেলগুলি চিহ্নিত করতে অটো-ইনক্রিমেন্টিং প্রাইমারি কি মতো ইউনিক আইডেন্টিফায়ার ব্যবহার করতে গিয়ে "শ্যালো নেস্টিং" ব্যবহার করতে পারেন  


## Naming Resource Routes

[Link](https://laravel.com/docs/10.x/controllers#restful-naming-resource-routes)

## Naming Resource Route Parameters

amra naming resource route ar parameters set kore dite pari ar maddhome (Chack routes/web.php)

## Scoping Resource Routes

যখন আপনি এই ফিচারটি ব্যবহার করেন, তখন লারাভেল নিশ্চিত করতে সক্ষম হয় যে একটি চাইল্ড মডেলটি প্যারেন্ট মডেলের অংশীদার হবে এবং এটি স্বয়ংক্রিয়ভাবে স্কোপ করা যাবে, যাতে আপনি স্পষ্টভাবে বলতে পারেন চাইল্ড রিসোর্সটি কোন ফিল্ড দ্বারা পুনরায় পেতে হবে। এটি আপনার এপ্লিকেশনে ডেটা সার্বক্ষণিকভাবে যে ডাটা কোন প্যারেন্ট মডেলে সংশ্লিষ্ট তা নিশ্চিত করে এবং সহজে ডাটা এক্সেস করতে সাহায্য করে।


## Localizing Resource URIs

ডিফল্ট ভাবে, Route::resource ইংরেজি ক্রিয়াপদ এবং বহুবচনের নিয়ম ব্যবহার করে রিসোর্স URI তৈরি করবে। যদি আপনি সৃজন এবং সম্পাদনা ক্রিয়াপদগুলির ভাষান্তর করতে চান, তবে আপনি Route::resourceVerbs মেথড ব্যবহার করতে পারেন। এটি আপনার অ্যাপ্লিকেশনের App\Providers\RouteServiceProvider এর boot মেথডের আদি অংশে করা যেতে পারে

## Supplementing Resource Controllers

Chack routes/web.php

## Singleton Resource Controllers

[Link](https://laravel.com/docs/10.x/controllers#singleton-resource-controllers)

কখনওকি, আপনার অ্যাপ্লিকেশনে সংস্থান থাকতে পারে যা শুধু একটি ইনস্ট্যান্স রাখতে পারে। উদাহরণস্বরূপ, একটি ব্যবহারকারীর "প্রোফাইল" সম্পাদনা বা আপডেট করা যেতে পারে, কিন্তু একটি ব্যবহারকারীর একাধিক "প্রোফাইল" থাকতে পারে না। একইভাবে, একটি ইমেজের একটি "থাম্বনেইল" থাকতে পারে। এই ধরনের সম্পদগুলি "সিঙ্গলটন সম্পদ" বলে চিহ্নিত, অর্থাৎ এই সম্পদের একটি এবং শুধুমাত্র একটি ইনস্ট্যান্স থাকতে পারে। এই ধরনের স্থানাঙ্ক সম্পদের জন্য, আপনি একটি "সিঙ্গলটন" সম্পদ কন্ট্রোলার নিবন্ধন করতে পারেন।

Sometimes, your application will have resources that may only have a single instance. For example, a user's "profile" can be edited or updated, but a user may not have more than one "profile". Likewise, an image may have a single "thumbnail". These resources are called "singleton resources", meaning one and only one instance of the resource may exist. 

## Creatable Singleton Resources

[link](https://laravel.com/docs/10.x/controllers#creatable-singleton-resources)

অর্থাৎ, যখন আপনি এই সিঙ্গলটন সম্পদ রুট নিবন্ধন করতে চান এবং সংরক্ষণ এবং সৃষ্টি রুট সংজ্ঞা করতে চান তখন আপনি এই ক্রিয়াশীল মেথড ইনভোক করতে পারেন।

In other words, occasionally, you might need to set up routes for creating and storing data for a resource that should have only one instance. To do this, you can use the creatable method while defining the routes for that singleton resource.

## API Singleton Resources

apiSingleton মেথড ব্যবহার করা যেতে পারে একটি singleton resource নিবন্ধন করার জন্য যা একটি API দ্বারা পরিচালিত হবে, অর্থাৎ create এবং edit রুটগুলি প্রয়োজন না করে।

## Dependency Injection & Controllers

* Constructor Injection
  
  লারাভেল service container সব লারাভেল controllerগুলি resolve করতে ব্যবহৃত হয়। ফলস্বরূপ, আপনি আপনার controller aa কোনও ডিপেন্ডেন্সিগুলির জন্য যে কোন ডিপেন্ডেন্সিগুলি আপনার কন্ট্রোলারের কনস্ট্রাক্টরে টাইপ-হিন্ট করতে পারেন। ঘোষিত ডিপেন্ডেন্সিগুলি স্বয়ংক্রিয়ভাবে সমাধান করা এবং controller ইনস্ট্যান্সে ইনজেক্ট করা হবে।

## i am not clear about belows topics:

* Shallow Nesting
* Scoping Resource Routes
* Creatable Singleton Resources
* API Singleton Resources
* Dependency Injection & Controllers(i have executed all codes of this section but first two parts i don't understand how it works)
