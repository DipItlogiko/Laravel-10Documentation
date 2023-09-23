# Laravel-10Documentation

## Collections

 The Illuminate\Support\Collection class provides a fluent, convenient wrapper for working with arrays of data. 

 mane hocche

 kono data ar array [] niye kaj korte hole amra oi  khetree collection ar bebohar korbo. 


## Creating Collections([Document](https://laravel.com/docs/10.x/collections#creating-collections)) 

amra kono collection create kori Illuminate\Support\Collection ai class ar akta helper method ar maddhome jar nam collect()

collect() helper methods ar moddhe amra jei array [] ta pass korbo oi array ar jonno collect() method Illuminate\Support\Collection class ar akta instance create korbe.


check routes/web.php


## Extending Collections([Document](https://laravel.com/docs/10.x/collections#extending-collections))

check routes/web.php


## Macro Arguments([Document](https://laravel.com/docs/10.x/collections#macro-arguments))

check routes/web.php

## Available Methods([Document](https://laravel.com/docs/10.x/collections#available-methods))

amra jani jokhon amra kono data ar array niye kaj korbo Tokhon amra Collection use korbo.

ai Collection ar kichu methods ache jar maddhome amra amader array ar moddhe kichu operation korte pari khub sohoje:

![image](./Screenshot%20from%202023-09-21%2022-11-11.png)

Mast check the Document

## Method Listing([Document](https://laravel.com/docs/10.x/collections#method-listing))

 * all() 

  ai method ar kaj hocche amader array ar sob data dekhabe

  check routes/web.php


 * avg()

   ai method ar kaj hocche amader array ar value ar akta avarage number ber kora.


 * chunk()

  ai method ar kaj hocche amra chunk(ar moddhe je number ta pass korbo oi number onujayi amader array ar value gulo vag kore debe)  


 * dd()

 ai ta hochhe die and dump aita amra amader application ar jeikhane use korbo tar por theke amader application ar code gulo r execute hobe na.

 jodi amra na chai amader application ar code gulo execute na hok tahole amra shudhu dump() method use korbo ....amra amader application ar jeikhane dump() method ta use korbo tar por thekeoooo amader application ar code execute hobe .


 * first()

  ai method ar kaj hocche jodi ooo prothome kono data pai tahole dekhabe


 * firstOrFail() 

  ai method ar kaj hocche jodi ooo ptothome kono data pai tahole dekhabe and jodi  na pai tahole akta error throw korbe Illuminate\Support\ItemNotFoundException.


 * pipeThrough()

   ai method ar  moddhome amra multiple function run korate pari ar moddhe. (check document)

 * random()

  ai method ta bebohar kore amra amader array theke ak ak somoy ak ak ta value print korate pari ...and jodi amra random(ar moddhe kono number pass kore dei jomon 2 ba 3 ja khushi tahole oooo amader array theke protibar 2 ta ba 3 ta kore value niye amader dekhabe) ....kintu jodi amader array te 2 ba 3 ta value ta thake r ami jodi random(ar modddhe 2 ba 3 pass kori tahole ) ai error ta InvalidArgumentException throw korbe 


 * pop()

   ar kaj hocche amader array ar last ar dik theke 1 ta kore value remove kore debe.....jodi ami pop(ar moddhe kono number pass kori jemon 1 ba 3 jai ee hok na keno oooo amar array ar last ar dik theke 1 kore ba 3 ta kore value remove kore debe)


 * shift()

  ar kaj hocche amader array ar prothom ar dik theke 1 ta kore data remove  kore debe.....jodi ami shift(ar moddhe kono number pass kori jemon 1 ba 3 jai ee hok na keno ooo amar array ar prothom dik theke 1 kore ba 3 ta kore vlue remove kore debe )  


 * skip()

   ar kaj hocche amader array ar prothom theke value guloke remove kore debe...amra skip(ar moddhe jei number pass korbo oooo amader array ar prothom theke oi koita value skip kore bad baki gulo dekhabe)


## Higher Order Messages([link](https://laravel.com/docs/10.x/collections#higher-order-messages))(IMPORTANT)      


## Lazy Collections([link](https://laravel.com/docs/10.x/collections#lazy-collections))([tutorial](https://www.youtube.com/watch?v=jCiypgzg9os&t=197s))

amra kom memory use kore data ar boro set niye kaj korte parbo ai Lazy Collections ar maddhome... mane oonek data gulo amara less memory consumption diye kaj korte parbo ai lazy collections ar maddhome.


* for example:

 jemon dhoren amader User model ar users table aaa  oonek user ar data thakte pare 1 lakh 2 lakh ba tar theke ooo beshi...to jokhon amra User::all() ai ta call korbo tokhon amar database ar users table theke sob user ar data amader laravel ar memory storage a load kore nei beshi data laravel ar memory storage load hole laravel ar memory storage limit cross hoye gele laravel akta error throw korbe...ai problem ta solve korar jonno amra Lazy Collection ta use korbo...

* cursor()

  ai method ta Lazy Collection ar akta instance create kore

amra User::cursor() aivabe likhle Lazy Collection ar akta instance create korbe User moddle ar jonno


Check routes/web.php

* ta chara jodi amader eemon hoy je amader application a akta 10 lokkho line ar bar tar bishi line ar  akta text file ache...and shei text file take jodi bydefault vabe read kori tahole amader laravel ar memory storage aaa sob line gulo load hobe and beshi line amader laravel ar memory storage aaa load howar karone amader laravel ar memory storage limitation cross hote pare jar fole laravel amader akta error throw korbe and application crash korbe.     

 chack routes/web.php (text file handel with lazy collection) section



## Lazy Collection Methods([link](https://laravel.com/docs/10.x/collections#lazy-collection-methods))


## the belows topic i don't understand: 

* reduceSpread()([link](https://laravel.com/docs/10.x/collections#method-reduce-spread))

