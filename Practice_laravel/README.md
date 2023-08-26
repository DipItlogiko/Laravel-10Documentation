# Laravel-10Documentation

[Link](https://laravel.com/docs/10.x/providers)

## Service Providers

Service Providers hocche  amader sob laravel application ar configaration ar central place. othat amra jokhon eee  kono akta service create kori ba laravel bydefault vabe je service gulo diye dei. shei service gulo ke service container a add korar way ta hocche Service Providers. 

OR,

prrotek ta service, ServiceContainer a add hoy ServiceProvider ar maddhome.


## Service Providers keno bebohar korbo?

amader create kora kono service jodi puro application ar nanan jaigai bebohar korar proyojon hoy tahole amra Service Providers bebohar korbo.


## Service Providers create korar jonno

     php artisan make:provider  service_providers_ar_nam_je_kono


* (service_providers_ar_nam_je_kono) akhane je nam dibo oi name akta service provider create hoye jabe app/Providers ar moddhe   

* If you open the config/app.php file included with Laravel, you will see a providers array. 

  config/app.php ar providers array te giye amader banano service provider ke registar kore dite hobe ta chara oi service provider kaj korbe na 

* sob service providers Illuminate\Support\ServiceProvider class ke extend kore. abong sob service provider gulor moddhe

  * register
  * boot

  ai 2ta method thake

## register method

  amra je gulo Service Container ar sathe bind korte chai shei gulo register method ar moddhe likhbo.

  jokhon request send hoy abong service provider   load hoy tokhon ai register method ta fire hoy.

## boot method

 laravel application ready hoye jarwar pore ai boot method kaj kore , ai service providerer boot method autometically call hoi. ati shadharon vabe setup kaj korar jonno use hoi, ja apni apnar application ar বৈশিষ্ট্যিক logic jog korte use korte paren.

যেমন, আপনি যদি একটি ডেটাবেস বুটস্ট্র্যাপিং কনফিগারেশন সেট করতে চান, তাহলে আপনি এই boot মেথডের মধ্যে সেটআপ কোড যোগ করতে পারেন। এটি সবসময় অ্যাপ্লিকেশন চালনের সময় কাজ করবে এবং আপনার কনফিগারেশন সেটিংস সেট করতে সাহায্য করবে।

# If you do dd(app()) you will see this below 2 option

 * loadedProviders

 ami shei service gulo load koracchi jei service gulo ami bebohar korbo 


 * deferredServices

ami kichu service bebohar korbo jokhon amar oi service gulo proyojon hobe . jemon cash .cash to sob somoy bebohar korbo na amar system a.amar hoito specific kono akta request ar jonno proyojon porbe cash bebohar korar.To ami jokhon aita bebohar korbo thik tokhon eee laravel oi service take load korbe.ai ta amar application ke aktu faster kore.akhane oonek service thake.
