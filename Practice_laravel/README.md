# Laravel-10Documentation

## HTTP Session

A session is like a memory space it's temporarily store information about a user while they are actively using the site or app. It helps the site or app remember things about the user across different  requests

**For example:**

dhoren apni kono akta resturent aaa giyechen  and resturent aaa giye apni waiter ke kichu order dilen tar pore aaabar oorder dilen tokhon waiter vule jabe apni prothom aa ki order diyechilen....kintu jodi apni waiter ke akta notepade diye den tahole ooooo order gulo notepade aaaa likhte parbe  jokhon ja order dicchen ta.... Aikhane waiter hocche amader 'applilcation' and apni hochhe 'user' and notepade ta hocche 'Session'.

## Configuration 

 * Amader Laravel application a Session ar configuration file thake 

      config/session.php

  ai path a  


 * The session driver configuration option defines where session data will be stored for each request. Laravel ships with several great drivers out of the box Such as:

  * file 

    ai file driver ta use korle amader Session ar information gulo storage/framework/sessions ai path a store hobe...and bydefault laravel file driver ta use kore you can check(config/session.php and .env file)

    config/session.php and .env file aa gele amra dekhte pabo SESSION_DRIVER and SESSION_LIFETIME.session lifetime aa je number ta thake ta **Minutes** nirdesh kore.amra chaile oi take barate pari komate oo pari.

    config/session.php a moddhe r akta important bishoy thake ta holo 

         'expire_on_close' => false,

    akhane aitar mane hocche jokhon amader browser ta close hobe tokhon amader session expire hobe na karon aikhane false dewa ache....kintu amra jodi laravel diye kokhono kono **Bank** ar website create kori tokhon amra expire_on_close ar value ta true kore debo tahole jokhon eee amader browser close hobe tokhon eeee session expair hoye jabe mane user ooo logout hoye jabe       


  * cookie

    ai cookie driver ta use korle amader Session ar information gulo secure, encrypted cookies ar moddhe store hobe.


  * database

    ai database driver ta use korle amader Session ar information gulo relational database a store hobe .

  * memcached / redis

    ai memcached ba redis driver ta use korle amader Session ar information gulo  one of these fast, cache based stores a store hobe.

  * dynamodb

    ai dynamodb driver ta use korle amader Session ar information gulo  AWS DynamoDB te store hobe.  


  * array 

    ai array driver ta use korle amader Session ar information gulo  PHP array and will not be persisted ar moddhe store hobe....  

## Driver Prerequisites([Document](https://laravel.com/docs/10.x/session#driver-prerequisites))(i understand this section but i didn't execute it)

## Interacting With The Session([Document](https://laravel.com/docs/10.x/session#interacting-with-the-session))

### Retrieving Data

   There are two primary ways of working with session data in Laravel: the global session helper and via a Request instance $request
    
  #### amra session theke kono specific key ar data take show korar jonno 

   * session helper method bebohar kore korte  pari jemon

          session('key');

     jehetu amader session ar moddhe data gulo key value aakare store thake tai amader kono session ar value show korte hole oi value ar key bole dite hobe.   

   * amra Request instance $request bebohar kore korte pari jemon 

         $request->session()-get('key');  


  #### amra session theke sob data show korar jonno ai vabe korte pari


   * session helper method ar maddhome jemon

           session()->all();


   * Request instance $request ar maddhome jemon

           $request->session()-all();    


  #### amra session theke jodi check korte chai je amader kono key ar value ache ki na tahole amra ai vabe korte pari

   * session helper method ar maddhome jemon

          session()->key('key');


   * Request instance $request ar maddhome jemon

           $request->session()->has('key');


  #### amra session a data store korte pari


   * session helper method ar maddhome jemon

         session(['key' => 'value']);  


   * Request instance $request ar maddhome jemon

          $request->session()->put('key','value');  


  #### amra session theke kono specific key and oi kay ar value take delete korte pari


   * session helper method ar maddhome jemon

          session()->forget('key');

          or, 

          session()->forget(['key1', 'key2']);
   

   * Request instance $request ar maddhome jemon     

          $request->session()->forget('key');

          or,

          $request->session()->forget(['key1', 'key2']);



  #### amader puro website ar session ar data ak bare delete  korte pari

   * session helper method ar maddhome jemon
   
   
               session()->flush()     


   * Request instance $request ar maddhome jemon

             $request->session()->flush()               

  check routes/web.php


  ## Regenerating The Session ID([Document](https://laravel.com/docs/10.x/session#regenerating-the-session-id))


  সেশন আইডি পুনরায় তৈরি করা হয় সাধারণভাবে যাতে কোনো দুর্নীতিবাদী ব্যবহারকারী আপনার অ্যাপ্লিকেশনে সেশন স্থাপনা হামলা করতে না পারে।

  লারাভেল, আপনি যদি লারাভেল অ্যাপ্লিকেশন স্টার্টার কিট বা লারাভেল ফোর্টিফাই ব্যবহার করেন তাদের সময়, তবে প্রাথমিক লগইনের সময় সেশন আইডি স্বয়ংক্রিয়ভাবে পুনরায় তৈরি করে। তবে, আপনি যদি ম্যানুয়ালি সেশন আইডি পুনরায় তৈরি করতে চান, তবে আপনি রিজেনারেট মেথড ব্যবহার করতে পারেন।


## Session Blocking([Document](https://laravel.com/docs/10.x/session#session-blocking))(i understand this but i didn't execute this section of code)



## Adding Custom Session Drivers([Document](https://laravel.com/docs/10.x/session#adding-custom-session-drivers))

amra nijer moto kore akta custom session driver create korte pari....session driver aaa amader website aaa user ar information gulo store hoy....


## Registering The Driver([Document](https://laravel.com/docs/10.x/session#registering-the-driver))


amra nijer moto kore akta custom session driver create korar pore oi custom session driver take Register kore dite hobe....(Check the Document)




 



  
   

