# Laravel-10Documentation

## Helpers

laravel bivinno global helper PHP functions use kore. ai global helper PHP function ar beshir vag functions use hoy framework dara...amra ai global helper PHP functions guloke amader application gulote use korte pari.


## Available Methods([Document](https://laravel.com/docs/10.x/helpers#available-methods))

* **Arrays & Objects**([Document](https://laravel.com/docs/10.x/helpers#arrays))

  ![image](./Screenshot%20from%202023-09-24%2021-50-25.png)


  * Array::accessible()

    ai method ta nirdharon kore accessible(ar moddhe amra jei array ta pass korbo oi array ar value gulo accessible ki na) jodi array ar value gulo accessible hoy tahole true return korbe na hole false return korbe


  * Arr::add()

    ai method ar maddhome amra array add kore dite pari


  * Arr::toCssClasses()  

   ai method ta important

  * Arr::toCssStyles()

   ai method ta important 



## Paths([Document](https://laravel.com/docs/10.x/helpers#paths))

![image](./Screenshot%20from%202023-09-25%2013-16-59.png)


 * app_path()

   amader laravel application ar app directory ar akta fully  qualified path return kore ai app_path() function ta.

   check routes/web.php


 * base_path() 

    amader laravel application ar root directory ar akta fully qualified path return kore ai base_path() function ta.


 * config_path()

   amader laravel application ar config directory ar akta fully qualified path return kore ai config_path() function ta.


 * database_path()

   amader laravel application ar database directory ar akta fully qualified path return kore ai database_path() function ta.

 * lang_path() 

   amader laravel application ar lang directory ar akta fully qualified  path return kore ai lang_path() function ta .
   jokhon amra akta new laravel project setup korbo ba create korbo composer ar maddhome tokhon amader application ar moddhe lang directory ta thakbe na bydefault ai lang directory ta amader vendor ar moddhe pore thakbe bydefault ami jodi chai amader ai lang directory take amader vendor theke copy kore niye ashte amader project ar moddhe tahole amader ai command ta chalate hobe:


            php artisan lang:publish



 * public_path()

   amader laravel application ar public directory ar akta fully qualified path return kore ai public_path() function ta.


 * resource_path()  

   amader laravel application ar resources directory ar akta fully qualified path return kore ai resource_path() function ta.


 * storage_path()

   amader laravel application ar storage directory ar akta fully qualified path return kore ai storage_path() function ta.  

 * mix()

   check documentation       



## URLs([Document](https://laravel.com/docs/10.x/helpers#urls))

 ![image](./Screenshot%20from%202023-09-25%2016-27-10.png)


  check Document 



## Miscellaneous([Document](https://laravel.com/docs/10.x/helpers#miscellaneous))(IMPORTANT)


  ![image](./Screenshot%20from%202023-09-26%2009-22-36.png)


 * abort()
   
   abort(403);

 * abort_if()

   abort_if(! Auth::user()->isAdmin(), 403);


  * app()

    ai app() function ta service container ar instance return kore.


  * bcrypt()  

    The bcrypt() function hashes the given value using Bcrypt. You may use this function as an alternative to the Hash facade.

  * config()
    
    The config function gets the value of a configuration variable. The configuration values may be accessed using "dot" syntax, which includes the name of the file and the option you wish to access. A default value may be specified and is returned if the configuration option does not exist


  * dump()

    amra amader dump() function ar moddhe je variable ta pass kore debo oi varaible ar value dekhanor pore amra amader application ar jekhane dump() function ta use korechi tar pore jodi kono code thake tahole oi code gulo  ooooo execute hobe dump() korar por....kintu ami jodi chai je dump() korar por dump() ar nicher code gulo(jodi thake) execute na hok tahole amra dd() function ta use korbo.


  * fake()    


  * info()

   amra amader log file a kono information pass korar jonno ai info() function ta use kori.


  * logger()

    The logger function can be used to write a debug level message to the log file. ai method ar maddhome arma aita trac korte pari amader application a ke logout  korlo ke login korlo and ai information guloke amra admin dashboard a show korate pari..


  * throw_if()
  


  (check Document) all function are described there.

## Other Utilities ([Document](https://laravel.com/docs/10.x/helpers#other-utilities)) 

 * **Benchmarking** ***(IMPORTANT)***

   amader laravel application ar akta nirdisto part ar performance test korar jonno amra ai Benchmarking use korte pari. ai Benchmarking amader bole debe oi nirdishto part ar code ta execute hote koto miliseconds time legeche

   (Check Document)






  
 * **Sleep** 

    Laravel's Sleep class is a light-weight wrapper around PHP's native sleep and usleep functions, offering greater testability while also exposing a developer friendly API for working with time.

    Laravel uses the Sleep class internally whenever it is pausing execution.


    (check Document)


 

    

## Some Important Things:

 amra Arr::  ar pore je method ba function gulo use kori oi method ba function guloke bole global helper php function.



## Belows topic i don't understant:

 * Lottery([link](https://laravel.com/docs/10.x/helpers#lottery))

 * Pipeline([link](https://laravel.com/docs/10.x/helpers#pipeline))

 