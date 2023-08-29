# Laravel-10Documentation

## Middleware

All middleware are resolved via the service container.

middle ware daroyan ar moto kaj kore.middleware ar moddhe amra logic likhi abong oi middleware take bivinno route ar sathe add kore dei.je route ar sathe amra amader middleware take add korechi oi middleware ar logic gulo jodi match kore shudhu mattro tokhon eee key oi route ke access korte parbe.


Real-life example hishebe bola jai

middleware ta hocche akta daroran jokhon kew biye barite jai tokhon daroyan chack kore tar kache biyer invitation ache ki na jodi thake tahole take jete dei na thakle jete dei na thik ai daroyan ar moto middleware kaj kore.


## For creating a new Middleware

* Run this command

      php artisan make:middleware middleware_ar_nam


  new create hoya middleware ta pawa jabe app/Http/Middleware ar moddhe

* you have to assigned this new created middleware  in the app/Http kernel.php $middlewareAliases array.
