# Laravel-10Documentation


## Error Handling

 Exception bolte muloto bojhai run time error..jokhon amra amader application run kori tokhon je error ashe oi error guloke bole run time error ba Exception.


 * amra jokhon akta new laravel project start kori tokhon laravel  bydefault amader jonno error abong exception handling configured kore rakhe...(app/Exceptions/Handler.php)

 * amra amader application ar config/app.php te gele debug name akta option  dekhbo jekhan theke .env file a pathano hoyeche and .env file a
 APP_DEBUG=true kora ache bole amra amader application a joto error pai ba exceptions pai ta amader browser aa dekhai jodi amara ai option APP_DEBUG=false kore dei tahole amader application a kono error hole ta amader browser a dekhabe na thik kothai error ta hoyeche shudhu dekhabe internal server error..

 * jokhon amra Laravel aaa amader web application create korbo tokhon .env file ar ai APP_DEBUG=true rakhte hobe 
 
 * kintu jokhon amra ai  web application ta ke server a deploy korbo ba  production environment aaa niye jabo tokhon APP_DEBUG=false rakhte hobe sob somoy.


 ## The Exception Handler([Document](https://laravel.com/docs/10.x/errors#the-exception-handler))

 * sob excption handel hoy ai app/Exception/Handler class ar maddhome. and  ai class ar modhhe akta register method ache jekhane amra custom exception register kore dite pari.

 * amader jodi proyojon hoy vinno dhoroner excption ke vinno vabe report korar tahole amra register method ar moddhe reportable() method use korbo....reportable() method ta use korle ooo laravel bydefault amader exception guloke log korbe storage/logs/laravel.log ar moddhe jodi amra chai je amader exception gulo jeno log na kore tahole amra jokhon amader reportable method take define korbo tokhon tar sheshe ->stop(); use korbo ooothoba reportable clouser ar moddhe return false; kore debo



## Global Log Context([Document](https://laravel.com/docs/10.x/errors#global-log-context))


