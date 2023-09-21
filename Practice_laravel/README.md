# Laravel-10Documentation

## Logging

* amader application ar moddhe ki hocche ta somporke rr ooo jante laravel amader logging service provide kore. ja amader log file a message log korar and system ar error gulo log korar onumoti dei. 

* channels ar opor vitti kore laravel logging. channels is located into config/logging.php

* Protita channels log information lekhar nirdishto way represent kore. 

Jemon:

 single channel log files lekhe akta single log file aaaaa


 slack channel sends log messages to Slack.


## Configuration

 logging configuration ar file ai config/logging.php aikhane ache amra chile amader application ar log channels gulo ar moddhe configure korte pari amra chaile custom kono channels create korte pari ar moddhe.


 bydefault laravel stack channels use korbe messages logging ar khetre.

 stack channels ta use kora hoy akta single channels ar moddhe multiple channels add korar jonno.


##  Configuring The Channel Name([Document](https://laravel.com/docs/10.x/logging#configuring-the-channel-name))


By default, Monolog is instantiated with a "channel name" that matches the current environment, such as production or local. To change this value, add a name option to your channel's configuration


## Available Channel Drivers([Document](https://laravel.com/docs/10.x/logging#available-channel-drivers))

![image](./Screenshot%20from%202023-09-20%2019-44-26.png)



## Logging Deprecation Warnings([Document](https://laravel.com/docs/10.x/logging#logging-deprecation-warnings)) 


## Writing Log Messages([Document](https://laravel.com/docs/10.x/logging#writing-log-messages))


logger amader 8 ta levels provide kore(emergency, alert, critical, error, warning, notice, info and debug) jei level ar maddhome amra bivinno message amader log file aaa log korate pari. 


## Writing To Specific Channels([Document](https://laravel.com/docs/10.x/logging#writing-to-specific-channels))

amra jodi kono custom channel create kore oi channel ar  moddhe kono log message pass korte chai ba log korte chai tahole amra oi channel ta ke specific vabe bole debo jemon 
                 Log::channel('dip')->info('Something happened!');
    
    akhane ami akta custom dip name chaccel create korechi config/logging.php ar moddhe and oi chennel ar moddhe amra info ar moddhe jei message ta ache ta pass korchi.


amra ai vabe ooooo multiple channels ar moddhe akta message pass korte pari


                 Log::stack(['channel_ar_nam1', 'channel_ar_nam2'])->info('Something happened!');



## On-Demand Channels([Document](https://laravel.com/docs/10.x/logging#on-demand-channels))      

ar maddhome amra config/logging.php te channel na likhe oono kono file theko  oooo channel build korte pari and oi channel a kono message pass korte pari.


## Customizing Monolog For Channels([Document](https://laravel.com/docs/10.x/logging#customizing-monolog-for-channels))


ar maddhome amra log file a amra je format aaa data ba log information gulo dekhte pai(jemon storage/logs/laravel.log) amra chaile oi format take amader eeecha moto customized kore nite pari jemon amra jodi chai datetime ta prothome na dekhiye sheshe ba majhe dekhabe eemon kore sob data ba log information guloke amra format kore dekhate pari nijer eccha moto.



## SOME IMPORTANT THINGS:
([tutorial](https://www.youtube.com/watch?v=qK3OHxshLbw)

logs ar proyojon amader tokhon hobe jokhon amra amader laravel application take  debug korbo. 

jokhon amra amader appliction take live server run korbo tokhon jodi kono error ashe amader application a tokhon amara oi error gulo log ar maddhome debug kore dekhte pari.  

laravel logging ar khetree Monolog library use kore bydefault.

check routes/web.php

)


([tutorial](https://www.youtube.com/watch?v=RhnDmMnok64)

it's a very important video. in this video he show us how to get the log file and print it in our browser....




)

## belows topic i don't understand

* Available Channel Drivers([link](https://laravel.com/docs/10.x/logging#available-channel-drivers))(in this topic i am clear about all channel drivers)

* Channel Prerequisites([link](https://laravel.com/docs/10.x/logging#channel-prerequisites))

* Contextual Information([link](https://laravel.com/docs/10.x/logging#contextual-information))