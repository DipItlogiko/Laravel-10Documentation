# Laravel-10Documentation

## HTTP Responses

***all practices are located into the routes/web.php***

* Cache Control Middleware

  লারাভেলে "cache.headers" মিডলওয়্যার রয়েছে app/Http/kernel.php ar moddhe, যা একটি রুটের গ্রুপের জন্য দ্রুতভাবে ক্যাশ-control হেডার সেট করতে ব্যবহার করা যেতে পারে। ডায়রেক্টিভগুলি যে স্নেক কেসের সমমিলিত ক্যাশ-কন্ট্রোল ডায়রেক্টিভের সাথে সরবরাহ করা উচিত এবং সেমিকোলন দিয়ে পৃথক করা উচিত। যদি ডায়রেক্টিভে এট্যাগ সূচিত হয়, তবে স্পষ্ট দিকে একটি MD5 হ্যাশ রেসপন্স কন্টেন্টের হিসেবে স্বয়ংক্রিয়ভাবে ইট্যাগ আইডেন্টিফায়ার হয়


* Attaching Cookies To Responses

  "queue" মেথডটি একটি কুকি ইনস্ট্যান্স তৈরি করতে প্রয়োজনীয় আর্গুমেন্ট গুলি গ্রহণ করে। এই কুকিগুলি ব্রাউজারে প্রেরণ হওয়ার আগে আউটগোয়িং প্রতিস্থাপনে সংযুক্ত হবে।


* Cookies & Encryption

  bydefault vabe laravel a jokhon amra  kono cookie create korei ba jei cookie gulo aaage theke create kora thake shei gulo Encrypt kora thake ja pora ooo jai na and modify kora oooo  jai na ai behebior take change korar proyojon hole amra kichu kaj korte pari ja route/web.php te kora hoyeche


* Some Important things about (Redirects):

  1. [link](https://laravel.com/docs/10.x/responses#redirects)
  
  2. [link](https://laravel.com/docs/10.x/responses#redirecting-named-routes)
  
  3. [link](https://laravel.com/docs/10.x/responses#redirecting-controller-actions)
  
  4. [link](https://laravel.com/docs/10.x/responses#redirecting-external-domains)

    NOTE:  amra away() ar moddhe jei url ta dibo oooo oi url a redirect kore debe
  
  5. [link](https://laravel.com/docs/10.x/responses#redirecting-with-flashed-session-data)   
   
   
* JSON Responses

  jeson response a amader header ar moddhe contant type key bole dite hoy na ooo autometically headder ar contant type application/json set kore nei.(chack routes/web.php)


* File Downloads([link](https://laravel.com/docs/10.x/responses#file-downloads))

 Chack (routes/web.php)


* Response Macros

  If you would like to define a custom response that you can re-use in a variety of your routes and controllers, you may use the macro method on the Response facade.Typically, you should call this method from the boot method of one of your application's in the App\Providers\AppServiceProvider service provider

  



## The belows topics i don't understand:

 * Attaching Cookies To Responses(Last part)([link](https://laravel.com/docs/10.x/responses#attaching-cookies-to-responses))

 * Streamed Downloads([link](https://laravel.com/docs/10.x/responses#streamed-downloads))