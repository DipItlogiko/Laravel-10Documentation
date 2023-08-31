# Laravel-10Documentation

## Middleware

***ALL PRACTICES ARE IN ROUTES/WEB.PHP***

All middleware are resolved via the service container.

middle ware daroyan ar moto kaj kore.middleware ar moddhe amra logic likhi abong oi middleware take bivinno route ar sathe add kore dei.je route ar sathe amra amader middleware take add korechi oi middleware ar logic gulo jodi match kore shudhu mattro tokhon eee key oi route ke access korte parbe.

এটি ইনকামিং রিকোয়েস্ট এবং অ্যাপ্লিকেশনের কোর লজিক মধ্যে একটি ফিল্টার বা সেতুর মত কাজ করে। 


Real-life example hishebe bola jai

middleware ta hocche akta daroran jokhon kew biye barite jai tokhon daroyan chack kore tar kache biyer invitation ache ki na jodi thake tahole take jete dei na thakle jete dei na thik ai daroyan ar moto middleware kaj kore.


## For creating a new Middleware

* Run this command

      php artisan make:middleware middleware_ar_nam


  new create hoya middleware ta pawa jabe app/Http/Middleware ar moddhe

* you have to assigned this new created middleware  in the app/Http kernel.php $middlewareAliases array.


## Global Middleware

আপনি যদি আপনার অ্যাপ্লিকেশনে প্রতিটি HTTP রিকোয়েস্টে মিডলওয়্যার চালাতে চান, তাহলে আপনার app/Http/Kernel.php ক্লাসের $middleware প্রপার্টিতে মিডলওয়্যার ক্লাসটির নামটি তালিকাভুক্ত করুন।

global middleware are run during every request to your application.

অর্থাৎ, প্রতিটি HTTP রিকোয়েস্ট প্রদান হলে এই মিডলওয়্যার চলবে।  

## Middleware Groups

middleware groups are located in app/Http kernel.php

middleware groups are automatically applied by your application's App\Providers\RouteServiceProvider service provider to routes within your corresponding web and api route files

the web and api middleware groups are automatically applied to your application's corresponding routes/web.php and routes/api.php files by the App\Providers\RouteServiceProvider.

## Middleware Priority

aitar maddhome amra middleware guloke akta nidisto korome chalate pari

কখনওই হয় যে, আপনি যখন আপনার মিডলওয়্যারগুলি নির্দিষ্ট ক্রমে চালাতে চান কিন্তু রুটে তাদের ক্রম নির্ধারণে কোন নিয়ন্ত্রণ রাখতে পারেন না। এই ক্ষেত্রে, আপনি আপনার app/Http/Kernel.php ফাইলের $middlewarePriority প্রপার্টি ব্যবহার করে মিডলওয়্যারের প্রাথমিকতা নির্ধারণ করতে পারেন। এই প্রপার্টি আপনার HTTP কার্নেলে ডিফল্টভাবে থাকতে পারে না। যদি এটি অস্তিত্ব না থাকে, তাহলে নীচের ডিফল্ট সংজ্ঞানানুসারে এটি ডিফল্টভাবে define করতে পারেন:


      protected $middlewarePriority = [
          \Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests::class,
          \Illuminate\Cookie\Middleware\EncryptCookies::class,
          \Illuminate\Session\Middleware\StartSession::class,
          \Illuminate\View\Middleware\ShareErrorsFromSession::class,
          \Illuminate\Contracts\Auth\Middleware\AuthenticatesRequests::class,
          \Illuminate\Routing\Middleware\ThrottleRequests::class,
          \Illuminate\Routing\Middleware\ThrottleRequestsWithRedis::class,
          \Illuminate\Contracts\Session\Middleware\AuthenticatesSessions::class,
          \Illuminate\Routing\Middleware\SubstituteBindings::class,
          \Illuminate\Auth\Middleware\Authorize::class,
      ];



## Middleware Parameters

মিডলওয়্যার পর্যবেক্ষণও অতিরিক্ত প্যারামিটার প্রাপ্ত করতে পারে। উদাহরণস্বরূপ, যদি আপনার অ্যাপ্লিকেশনে প্রদত্ত কোন ক্রিয়া পূর্বে একটি "রোল" দেওয়া হতে বেশি পরীক্ষা করা দরকার হয় তবে আপনি একটি EnsureUserHasRole মিডলওয়্যার তৈরি করতে পারেন যা একটি রোল নাম অতিরিক্ত আর্গুমেন্ট হিসেবে গ্রহণ করে।

আপনার অ্যাপ্লিকেশনে প্রদত্ত কোন কাজ করতে প্রাধিকৃত ব্যবহারকারীর কাছে একটি "রোল" আছে কিনা যাচাই করতে প্রয়োজন হলে, আপনি EnsureUserHasRole মিডলওয়্যার তৈরি করতে পারেন, যা একটি রোল নাম অতিরিক্ত আর্গুমেন্ট হিসেবে গ্রহণ করবে।

অতিরিক্ত মিডলওয়্যার প্যারামিটারগুলি $next আর্গুমেন্টের পরে মিডলওয়্যারে পাঠানো হবে।

রুট সংজ্ঞায় মিডলওয়্যার প্যারামিটার নির্ধারণ করার জন্য আপনি মিডলওয়্যারের নাম এবং প্যারামিটারগুলি আলাদা করতে : ব্যবহার করতে পারেন। একাধিক প্যারামিটার থাকলে তা কোমা দ্বারা আলাদা করা উচিত।


## Terminable Middleware

jokhon amra chacchi je middleware tar moddhe thaka sob action complete kore browser a response send korar por kono akta kaj koruk tokhon amra Terminable Middleware bebohar korbo. 

amra chile kono middleware ke service container ar sathe bind korte pari tar jonno amader app/Providers ar moddhe AppServiceProvider ar register() method a bole dite hobe middleware ta. 

terminate" মেথডটি Request এবং Response উভয়ই পেতে হবে। একবার একটি "terminable" মিডলওয়্যার সংজ্ঞায়িত করে ফেলার পরে, আপনাকে এটি অ্যাপ/এচটিটিপি/কার্নেল.php ফাইলে রুটগুলির বা গ্লোবাল মিডলওয়্যারের তালিকায় যোগ করতে হবে।

আপনি যখন "terminate" মেথডটি আপনার মিডলওয়্যার থেকে কল করবেন, তখন Laravel সার্ভিস কন্টেনার থেকে মিডলওয়্যারের একটি পুনরায় ইনস্ট্যান্স রেজল্ভ করবে। যদি আপনি একই মিডলওয়্যার ইনস্ট্যান্সটি হ্যান্ডল এবং টার্মিনেট মেথডগুলি কল করার সময় ব্যবহার করতে চান, তবে মিডলওয়্যারটি কন্টেনারে একই মিডলওয়্যার ইনস্ট্যান্স ব্যবহার করার জন্য কন্টেনারে সিঙ্গেলটন মেথড ব্যবহার করতে হবে। সাধারণভাবে এটি আপনার AppServiceProvider এর register মেথডে করা উচিত।

* সিঙ্গেলটন মেথড ar kaj hocche ooo kono akta class ar aktai inestance create kore abong amader jokhon eeee oitar proyojon hoy singletone amader oi akoi inestance repeat kore.