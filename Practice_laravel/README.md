# Laravel-10Documentation

  ## Service Container

   Laravel Service Container hocche akta powerfull tool.jar maddhome  Dependency injection  gulo Manage kora jai. Beshirvag khettre amra constructor  ar maddhome abong kokhono kokhono setter methods ar maddhome Dependency injection  gulo Manage kori.

   OR, you can say:

  Service Container hocche akta service jeta Laravel provide kore jate kore tumi laravel ke aita bolte paro je kono service ar object kon vabe banate hobe. tar por laravel handel nijei kore .Ai ta hochhe akta maddhom jar maddhome class ar Dependency injection  gulo Manage kora jai.

## Service Container Ar Shubidha:

* bar bar kono service ba class ar object create korte hoy na.
  
    * jar fole memory management hoy
    * code structure thake
    * code a changes kora khub sohoj hoye jai
    * code test ooo sohoje kora jai 

  
* service container nijer kache sob service  ar object rakhe. abong jokhon jokhon amar oi service  gulo theke kono service ar object ar proyojon hobe tokhon laravel amader oi service ar object diye debe.

* Service add korar jonno amra bind method bebohar kori. bind('service_name_dite_hobe_ja_eccha',function(){

}); 

* Jokhon amra add kora service take retrait korar try kori tokhon app helper class ar make method ta use kori.

app()->make('service_name_dite_hobe');

* Jokhon amra custom kono service provider  add korbo tokhon amra app/Providers ar moddhe add korbo.

***Example*** :
Dhoren amar 4ta bookself ache . 1 tar moddhe bangla. 2tar moddhe english . 3 tar moddhe math.4 tar moddhe science. mane 4 ta bookself a 4 rokomer boi ache.

1 bangla

2 english

3 math

4 science

amra jani kon bookself a kon boi ache

jodi emon hoto je 4 ta boi eee aksathe songmisron akare amar akta library thakto tahole amar find out korte khub jhamelo hoto.

Service Container ke amra aitar sathe tulona korte pari 

Service ki?

* Service bolte bojhai amader laravel application a bydefault je service gulo diye dei abong amra nijera amader proyojon onujayi je service gulo toiri korbo shei Service gulo.


Container ki?

* Container bolte bojhai jemon amar bookself .jekhane amar laravel service gulo inject hoye thake 








