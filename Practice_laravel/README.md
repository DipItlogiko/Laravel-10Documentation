# Laravel-10Documentation

# HTTP Requests

***All topic practices are located into the routes/web.php***

Laravel's Illuminate\Http\Request class provides an object-oriented way to interact with the current HTTP request being handled by your application as well as retrieve the input, cookies, and files that were submitted with the request.


## Interacting With The Request

## Accessing The Request

ডিপেন্ডেন্সি ইনজেকশনের মাধ্যমে বর্তমান HTTP অনুরোধের একটি ইনস্ট্যান্স পেতে, আপনার রুট ক্লোজার বা কন্ট্রোলার মেথডে Illuminate\Http\Request ক্লাসটি টাইপ-হিন্ট করতে হবে। আগমনী অনুরোধ ইন্সট্যান্স লারাভেল সার্ভিস কন্টেনার দ্বারা স্বয়ংক্রিয়ভাবে ইনজেক্ট হবে

## Retrieving The Request URL

   * url() method 

   abong 

  * fullUrl() method ar kaj aikoi

  2ta method eee amader full url return kore 

***NOTE:*** 

 To retrieve the full URL for the incoming request you may use the url or fullUrl methods. The url method will return the URL without the query string, while the fullUrl method includes the query string that's it.



## Retrieving The Request Host 

[link](https://laravel.com/docs/10.x/requests#retrieving-the-request-host)


## Content Negotiation

laravel a incoming request gulo inspecting korar jonno laravel oonek methods  provide kore.  getAcceptableContentTypes() methos ta ooo hocche tader moddhe akta. 


* getAcceptableContentTypes() 

  request je content types gulo accept kore tar akta array amra getAcceptableContentTypes() ai method ar maddhome dekhte pari.

* accepts()

  contant type ar array accept kore accepts() method and request dare jodi kono contant type accepted hoy tahole true return korbe otherwise false return korbe 

* prefers()
 
  You may use the prefers method to determine which content type out of a given array of content types is most preferred by the request. If none of the provided content types are accepted by the request, null will be returned.


## PSR-7 Requests   
  
PSR-7  Http মেসেজের জন্য ইন্টারফেস নির্ধারণ করে, যার মধ্যে রিকোয়েস্ট এবং রেসপন্স থাকে। আপনি যদি একটি PSR-7 রিকোয়েস্টের ইন্সট্যান্স পেতে চান তাহলে প্রথমে কিছু লাইব্রেরি ইনস্টল করতে হবে।


*     composer require symfony/psr-http-message-bridge

*     composer require nyholm/psr7


 Laravel ব্যবহার করে স্যমফোনি HTTP মেসেজ ব্রিজ কম্পোনেন্ট ব্যবহার করে, যা স্বাভাবিকভাবে লারাভেল রিকোয়েস্ট এবং রেসপন্স কে PSR-7 সাথে কাজ করার সাথে সাথে রূপান্তর করে।


## Retrieving JSON Input Values

যখন আপনি আপনার অ্যাপ্লিকেশনে JSON অনুরোধ পাঠান, তখন রিকোয়েস্টের Content-Type হেডারটি সঠিকভাবে application/json হতে হবে। এই সময়, JSON ডেটা আপনি যেভাবে চান সেই input মেথডের মাধ্যমে অ্যাক্সেস করতে পারবেন, যদি ডেটা JSON এর অভ্যন্তরীণে নেস্ট করা থাকে। আপনি যেমন চান "ডট" সিনট্যাক্স ব্যবহার করতে পারেন যেটা JSON অ্যারে / অবজেক্টের নেস্টেড মান পেতে সাহায্য করে।


## Retrieving Stringable Input Values

সাধারণ স্ট্রিং হিসেবে রিকোয়েস্টের ইনপুট ডেটা নেওয়ার পরিবর্তে, আপনি Illuminate\Support\Stringable এর একটি ইনস্ট্যান্স হিসেবে রিকোয়েস্ট ডেটা পেতে স্ট্রিং মেথড ব্যবহার করতে পারেন।


## Retrieving Boolean Input Values

When dealing with HTML elements like checkboxes, your application may receive "truthy" values that are actually strings. For example, "true" or "on". For convenience, you may use the boolean method to retrieve these values as booleans. The boolean method returns true for 1, "1", true, "true", "on", and "yes". All other values will return false. 


## Retrieving Enum Input Values

 an Enum is a special class that represents a group of constants.


## Flashing Input Then Redirecting

আপনি যখন সাধারণভাবে সেশনে ইনপুট ফ্ল্যাশ করতে এবং তারপরে পূর্বের পৃষ্ঠায় পুনর্নির্দেশ দিতে চান, তখন আপনি সহজেই withInput মেথড ব্যবহার করে ইনপুট ফ্ল্যাশিং এবং redirecting একসাথে করতে পারেন।


## Retrieving Old Input

পূর্ববর্তী অনুরোধ থেকে ফ্ল্যাশ করা ইনপুট তথ্য পুনরাপেক্ষণ করতে, Illuminate\Http\Request এর একটি ইনস্ট্যান্সে old মেথড চালান। old মেথডটি সেশন থেকে পূর্বের ফ্ল্যাশ করা ইনপুট ডেটা তুলে আনবে

## Storing Uploaded Files
[link](https://laravel.com/docs/10.x/requests#storing-uploaded-files)

* store()

  The store method accepts the path where the file should be stored relative to the filesystem's configured root directory. This path should not contain a filename, since a unique ID will automatically be generated to serve as the filename.

  The store method also accepts an optional second argument for the name of the disk that should be used to store the file. The method will return the path of the file relative to the disk's root


* storeAs()

  If you do not want a filename to be automatically generated, you may use the storeAs method, which accepts the path, filename, and disk name as its arguments. 


## If you want to skip TrimString middleware and ConvertEmptyStringsToNull  middleware for your specific route then you can check it.those middlewares ar global middleware it's apply automatically in all routes .if you want to skip it for specific route then you can go with this link 

[link](https://laravel.com/docs/10.x/requests#input-trimming-and-normalization)

## The belows topics i don't understand:

* Content Negotiation (Second last  part) ([link](https://laravel.com/docs/10.x/requests#content-negotiation)) 

* PSR-7 Requests (I understand this but i am unable to execute the code)([link](https://laravel.com/docs/10.x/requests#psr7-requests))

* Retrieving All Input Data (Last part)([link](https://laravel.com/docs/10.x/requests#retrieving-all-input-data))

* Retrieving JSON Input Values ([link](https://laravel.com/docs/10.x/requests#retrieving-json-input-values))

* Flashing Input Then Redirecting ([link](https://laravel.com/docs/10.x/requests#flashing-input-then-redirecting))

* Cookies ([link](https://laravel.com/docs/10.x/requests#cookies)),([tutorial-link](https://www.youtube.com/watch?v=Sm67ra3MLdQ))

* Configuring Trusted Proxies ([link](https://laravel.com/docs/10.x/requests#configuring-trusted-proxies))

* Configuring Trusted Hosts ([link](https://laravel.com/docs/10.x/requests#configuring-trusted-hosts))