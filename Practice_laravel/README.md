# Laravel-10Documentation

## URL Generation ([Tutorial](https://www.youtube.com/watch?v=_kkM802vgbI&t=145s))

Laravel provides several helpers to assist you in generating URLs for your application. These helpers are primarily helpful when building links in your templates and API responses, or when generating redirect responses to another part of your application.

## The Basics ([Document](https://laravel.com/docs/10.x/urls#the-basics))


## URLs For Named Routes([Document](https://laravel.com/docs/10.x/urls#urls-for-named-routes))


## Signed URLs([Document](https://laravel.com/docs/10.x/urls#signed-urls))


signed URLs  ar maddhome amara kono   route ke private kore dite pari mane amra oi route ar akta signuture diye dite pari.jodi kew amader oi singeture url a hit kore sora sori tahole kaj korbe na kintu kew jodi oi url ar sathe signeture add kore tahole she oi page ta access korte parbe ....

**Signed URLs ar kichu methods:**

 * URL::signedRoute('name_route_ar_nam')

   URL:: fachads ar signedRoute() ai method ta akta name route ar nam receive kore....and oi name route take mane ami signedRoute(ar moddhe jei name route ar nam dibo oi route ar akta signature key generate kore it looks like signature=44cfbfc9ced09220ccc09090db9d8e3885173370828f9011b48a775d6e42134b) 


 * URL::temporarySignedRoute('name_route_ar_nam',time,pass data to the route)

   temporarySignedRoute() akta name route ar nam receive kore tar porer paramiter a time receive kore jemon now()->addMinutes(30) or now()->addSeconds(13) or now()->addHours(5) and tar porer paramiter ba third patamiter a amra amader name route a data pass korte pari jemon ['user' => 1] ......and oi route aa jei page ta thake ami jodi chai je oi page ta kichukon por expair hoye jabe mane ami jei time a set kore debo tar por oi page ta expair hoye jabe tokhon amra ai method ta use korte pari...ai method ta muloto email varification page aaaa use kora hoy

  Check routes/web.php

## Responding To Invalid Signed Routes([Document](https://laravel.com/docs/10.x/urls#responding-to-invalid-signed-routes))

 check routes/web.php



##  URLs For Controller Actions([Document](https://laravel.com/docs/10.x/urls#urls-for-controller-actions))

Check routes/web.php


## Default Values([Document](https://laravel.com/docs/10.x/urls#default-values))

ar maddhome amar url paramiter ar akta default value set kore dite pari 

###  URL Defaults & Middleware Priority([Document](https://laravel.com/docs/10.x/urls#url-defaults-middleware-priority))

   amra url paramiter ar akta default value set kore dewar por ai kaj ta korte hobe 



 




