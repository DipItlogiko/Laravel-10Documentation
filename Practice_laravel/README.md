# Laravel-10Documentation

**Chack route/web.php**

## Routing

route mane hocche rasta ba path. 

* Jodi amra kono custom route file create kori routes derectory ar moddhe tahole obossoi amake app/Providers ar moddhe RouteServiceProvider.php ar moddhe bole dite hobe. bydefault vabe routes derectory ar moddhe jei file gulo thake shei gulo app/providers ar RouteServiceProviders ar moddhe define kora thake. 

* route ar nam sob somoy unique rakhte hobe mane ak name 2 ta route create kora jabe na  

## Router Methods

Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);

## Dependency Injection

Dependency Injection ar maddhome amra akta class ar proparty ba object ke onno akta class a use korte function ar moddhe paramiter  akare pass kore sheitake bebohar korte pari.


## The Route List

* amader akta laravel application a mot koto gulo route ache ta chack korar jonno.(akhane amader create kora route abong laravel project create korar somoy bydefault vabe je route create hoyeche sob gulo dekhte pabo)

      php artisan route:list 


* amader akta laravel application a mot koto gulo route ache abong oi route gulor sathe kon middleware gulo add ache ta dekhar jonno.(akhane amader create kora route abong laravel project create korar somoy bydefault vabe je route create hoyeche sob gulo dekhte pabo)

      php artisan route:list -v



* bydefault sob route soriye jeigulo shudhu amra create korechi shudhu oi gulo dekhar jonno (kintu atar moddhe api ar route ta oo dekhai)

      php artisan route:list --except-vendor 


* amader laravel application a bydefault je route gulo create kora thake shudhu oi gulo dekhar jonno

      php artisan route:list --only-vendor


* puro laravel application ar theke route  ar kono specific URL ta ke find korar jonno

      php artisan route:list --path=URL_ar_nam

  ***Example*** :

    php artisan route:list --path=dashboard


* amader akta laravel application ar sob information dekhar jonno

      php artisan about



## Route Groups

এটি মূলত আপনার এপ্লিকেশনের রুট গুলি গ্রুপ করার একটি উপায় যাতে আপনি আপনার এপ্লিকেশনের বিভিন্ন অংশে বিভিন্ন রুট গুলি সেট করতে পারেন।


* Route Groups ar shubidha

  এটি আপনাকে কোড প্রসেসিং এবং সাজানোর সুবিধা দেয় এবং আপনি সহজেই মিডলওয়্যার, জরুরি অ্যাথেন্টিকেশন এবং অন্যান্য রুট গুলির সাথে সংমিলিত করতে পারেন।


## Middleware

Middleware work like a gurad.

* For Creating a new middleware

      php artisan make:middleware middleware_name

* After creating a new middleware we can see the new middleware in app/Http/middleware


* After creating a middleware we have to registar new created middleware in app/Http/kernel.php in $middlewareAliases array.we will set a key for the middleware.and we will be able to access this middle ware by the key in our hole application. 


## Route Model Binding

Route model binding laravel ar akta important topic.

রাউট মডেল বাইন্ডিং কী?

jokhon kono route sorasori model niye kaj korbe tokhon take route model binding bole । jar fole , আপনি নিজে ডেটাবেস থেকে মডেল ইনস্ট্যান্স প্রাপ্ত করার জন্য ম্যানুয়ালি কুয়েরি চালাতে হয় না, লারাভেল এই ডেটাবেস কুয়েরি করে এবং আপনার কন্ট্রোলার ফাংশনে সরাসরি মডেল ইনস্ট্যান্স উপলব্ধ করায়।

রাউট মডেল বাইন্ডিং কিভাবে কাজ করে?

আপনি একটি রাউট সংজ্ঞায়িত করতে পারেন যে আপনি একটি প্যারামিটার (সাধারণভাবে একটি আইডি) একটি মডেল ইনস্ট্যান্স সঙ্গে বাইন্ড করতে চান। লারাভেল স্বয়ংক্রিয়ভাবে সম্পর্কিত মডেল ইনস্ট্যান্স ডেটাবেস থেকে প্রাপ্ত করে এবং এই ইনস্ট্যান্সটি আপনার কন্ট্রোলার ফাংশন বা রাউট ক্লোজারে ইনজেক্ট করে।

উদাহরণ হিসেবে, ধরা যাক আপনার একটি User মডেল আছে এবং আপনি একটি ব্যবহারকারীর প্রোফাইল দেখাতে চান তাদের আইডি দ্বারা:


সুবিধা: রাউট মডেল বাইন্ডিং আপনার কোডকে সহজ করে  


## Soft Deleted Models

[link](https://www.youtube.com/watch?v=XZ-Isc5lzF8)

* soft delete mane hocche ooo kono akta jinish ke permanently delete korbe na temporary delete korbe .

### Soft Deleted Moderls korar stapes:

* jei Model theke soft delete korte chacchi oi model a giye likhte hobe
    
        use Illuminate\Database\Eloquent\SoftDeletes;

*  and oi Model ar class {ar modde likite hobe}     

       use SoftDeletes;

* tar por oi Model ar jonno jei table ta ache database/migrations ar moddhe , amader oi table ar moddhe r akta field add korte hobe deleted_at name 

       php artisan make:migration add_deleted_at_to_tablear_name
   
   Example:
 
    php artisan make:migration add_deleted_at_to_users_table   
       
      
* tar por notun akta migration file create hoye jawar por oi notun create hoya migration file a giye up() function ar Schema ar moddhe giye likhte hobe

      $table->softDeletes()


* tar por migration file take chalate hobe tahole amader create kora deleted_at field ta database ar oi table a create hoye jabe      

      php artisan migrate

jokhon amra amader application ar oi Model theke kichu delete korbo oita amader application theke chole jabe kintu database theke delete hobe na...kintu jokhon amra amader application kono data delete korbo oi data ta chole jabe and oi tabele ar oi row te delete_at field a data set hoy jabe amra oi data ta kobe delete korechi


### Soft delete ar Important kichu Function:

* withTrashed()

   ai function ta amra tokhon eee bebohar korbo jokhon amra Trashed data abong unTrashed data 2 tai ante chacchi.


* onlyTrashed()

  ai function ta amra tokhon eee bebohar korbo jokhon amra shudhu mattro Trashed ba deleted data ante chacchi.

* restore()

  ai function ta amra tokhon eeee bebohar korbo jokhon amra Trashed kora data ba deleted kora data take aabar firiye ante chacchi.

* forceDelete()

  ai function ta amra tokhon eee bebohar korbo jokhon amra kono data ke permanently delete korte chacchi.ar fole amader application theke oo data delete hoye jabe aabar database theke ooo data delete hoye jabe.


## Customizing The Key
 
"Customizing The Key" অর্থ হলো "কাস্টমাইজ করা কী। কখনও এলোকুয়েন্ট মডেলগুলি আপনি ইচ্ছা করতে পারেন আপনার id কলামের বদলে অন্য কোন কলাম ব্যবহার করে নিবেন। এটি করতে, আপনি রুট প্যারামিটার সংজ্ঞানন্তরটির ডেফিনিশনে কলামটি নির্দিষ্ট করতে পারেন।" 


## Rate Limiting

jokhon ami chachhi amar kono url a ak minite a ba per minites a koto gulo request amader server a ashbe tar jonno amra Rate Limite set korte pari.



## Cross-Origin Resource Sharing (CORS)

Laravel can automatically respond to CORS OPTIONS HTTP requests with values that you configure. All CORS settings may be configured in your application's config/cors.php configuration file. The OPTIONS requests will automatically be handled by the HandleCors middleware that is included by default in your global middleware stack. Your global middleware stack is located in your application's HTTP kernel (App\Http\Kernel).



## Route Caching

* jokhon amra amader application server a deploy korbo tar age aita chalate hobe

        php artisan route:cache

* php artisan route:cash chalanor pore jodi amra aabar notun kore kono route likhi tahole

        php artisan route:clear

  tar por aaabar route cache korte hobe

       php artisan route:cache   

tar pore amra server a deploy korbo amader application.   


Route Caching ar shubidha hocche:

* jokhon amader application ta load hoy tokhon bar bar amader route ta call hobe na.oi ta cache hoy thakbe .


### I am not Clear About belows topic:

Inspecting The Current Route

Custom Keys & Scoping

Customizing Missing Model Behavior(aita ami bujte perechi kintu execute korte parchi na)

Customizing The Resolution Logic

Explicit Binding(execute korte perechi kintu kintu bishoy ta ashole ki vabe kaj korche bujhe uthte parchi na and RouteServiceProvider.php ar boot method ar oi ak line code ta soriye dileoo keno kaj korche aita bujte parchi na)

 
Subdomain Routing(excitue kore ni kew)