# Laravel-10Documentation

## Eloquent

Laravel ar application ar sathe Database ar codding korar jonno Laravel amader 2 ta poddhoti dei

 1. Database QueryBuilder
 
 (database query builder ar code amra amader controller ar moddhe likhi)

 2. Eloquent ORM(object relational mapper)

  (eloquent ORM ar code gulo amra amader Model ar moddhe likhi)

## Generating Model Classes([Document](https://laravel.com/docs/10.x/eloquent#generating-model-classes))

amra nicher ai command ar maddhome Eloquent Model create korte pari:


            php artisan make:model je_kono_akta_model_ar_nam_dite_hobe_akhane


  jemon 

  ```php artisan make:model Flight```

  amader ai Flight name akta model create hobe app/Models directory ar moddhe 

  * amader app/Models directory ar moddhe thaka protita eloquent model ak ak ta database ar table ke represent kore.  

  amra chaile amader model create korar somoy eee amader model ar sathe akta  migration file ooo create korte pari ai command ar maddhome:

            php artisan make:model je_kono_akta_model_ar_nam_dite_hobe_akhane -m


  jemon

  ```php artisan make:model Flight -m``` 


   ### Inspecting Models([Document](https://laravel.com/docs/10.x/eloquent#inspecting-models))

   amader oonek somoy bujte kosto hoye jai je akta model ar sathe kontable ta connected ache ba oi model ta kon database table ke represent korche and oi model ar sathe ki ki relation ache ki ki attributes ache.... ai information gulo amra khub sohoje dekhte pari  ai command ar maddhome:


                  php artisan model:show amader_model_ar_nam_dite_hobe_je_model_ar_information amra inspect korte chacchi ba dekhte chacchi.


   jemon 

      php artisan model:show Flight   


     akhane amader Flight model ar sob information ta amader dekhabe...          


## Eloquent Model Conventions([Document](https://laravel.com/docs/10.x/eloquent#eloquent-model-conventions))

  ### Table Names([Document](https://laravel.com/docs/10.x/eloquent#table-names))

  jokhon amra eloquent Model create kori migration file chara artisan command  ar maddhome jemon ```php artisan make:model je_kono_akta_model_ar_nam```

  jokhon amra aivebe kono model create kore pore amra migration artisan command chaliye akta migration file create kore or moddhe amader ai Model ar jonno kono akta table create korbo tokhon amader oobossoi oi table ar nam ta amader model ar nam aaa dite hobe and tar seshe akta  s add kore dite hobe ai format take bole("snake case")..and obossoi amader table ar nam ar sob oookhor choto hater hobe tokhon amader oi Model ta ai migration file take autometically detect kore nebe..


  jodi amra  model create korar somoy migration file  aksathe create na kori and pore jodi amader model ar nam onujayi "snake case" use na kore jodi amra kono table create kori tahole amader model ta autometic detect korte parbe na she kon table take use korbe kintu amra jodi chai ai migration file ar table  ta amader ai model ta use koruk tahole amader oi model file ar moddhe giye amake
  bole dite hobe amader oi table ar nam jei table ta amra snake case format use na kore create korechi..jokhon amra amader oi table ar nam ta  protected $table = 'table_ar_nam'; aivabe jei model file ar moddhe likhe debo oi model ta amader oi table take use korbe mane oi model ta amader database ar oi table take represent korbe.



  * kintu amra jodi amader model ta create korar somoy eee migration file ta create kori tahole amader ooporer moto eeto jhamela korte hobe na.tokhon amra just oi migration file ar moddhe giye amader table ar column set kore diye migrate artisan command(php artisan migrate) ta chalalei oi table ta amader database aaa add hoye jabe and amader model ar sathe create howa migration file aar moddhe amra jei table ta create korbo amader model ta oi database ar table ke represent korbe.


  ### Primary Keys([Document](https://laravel.com/docs/10.x/eloquent#primary-keys))


  amader migration file aaa amra je table ar column set kori oi khane bydefault vabe id take primarykey dhore nei...amra jodi amader ai table ar primarykey kon column hobe oita alada kore bole dite chai tahole amader aaage dekhte hobe ai migration ar file aa jei table ta ache oi table ta kon model represent korche tar por oi model aa giye amra 
   protected $primaryKey = 'column_ar_nam_dite_hobe_amader_table_ar'; ai vabe amader oi table theke amra kon column take amader primaykey korte chacchi ta bole dite hobe.
               
         
## Timestamps([Document](https://laravel.com/docs/10.x/eloquent#timestamps))


 amra jokhon migration artisan command(php artisan make:migration create_table_ar_nama) ar maddhome kono akta table create korbo tokhon amra dekhte parbo oi khane bydefault $table->timestamps(); ai column ta thake, ja amader table ar moddhe 2ta column add kore akta hocche ```created_at```  and another is ```updated_at``` amra chaile amader ai 2ta column ar nam amra rename kore dite pari.amader oi table take jei model represent korche oi model aaa giye 



## some important things:

amader kon table take kon model represent korche ta bojhar easy way hocche amader prothom aa dekhte hobe amar Model ar nam gulo ki jai model gulo amader app/Models ar moddhe ache tar por amader dekhte hobe database/Migrations ar moddhe giye kon table ar nam amader model ar mane create kora hoyeche and tar sheshe akta  s add kora hoyeche tahole amra bujte parbo amader ai table take amader oi model ta represent korche.....ta chara amra  r ooo akta way te amader ai bishoy ta dekhte pari ta hocche amader akta command ```php artisan model:show model_ar_nam``` ai command ar moddhe amader jei model ar nam dibo amader oi model ar sob information amader diye debe oikhae amra dekhte pabo amader database ar kon table take amader  ai model represent korche...


## Retrieving Models([Document](https://laravel.com/docs/10.x/eloquent#retrieving-models))

check routes/web.php


## Collections([Document](https://laravel.com/docs/10.x/eloquent#collections)) 

check routes/web.php

## Chunking Results([Document](https://laravel.com/docs/10.x/eloquent#chunking-results))


amra jokhon amader model ar sathe sorasori get() ba all() method ke call korbo tokhon amader oi model ta jei database ar table ke represent kore oi table ar sob data amader laravel ar memory storage space aa akbare load hoy jodi oi table aa amader lakh lakh data thake and amra jodi oi model ar sathe get() ba all() ai method ta use  kori tahole oi model ta jei table ke represent korche oi table aaa jodi lakh lakh data taheke tahole oi ta laravel ar memory storage space aa akbare load hobe and amader laravel ar memory storage space ar jokhon limitation cross hoye jabe tokhon amader laravel ar memory storage space aa overflow hoye jabe and akta error show korbe limitation ar and amader application ta crass korbe....

amra ai proble ta solve korar jonno get() ba all() ai method 2tar poriborte lazycollection ar akta method ```cursor()``` method take use korte pari amader model ar sathe.Ba amra ```chunk()``` method ooo use korte pari ai chunk() method ar kaj hocche amader amra ar moddhe jei number ta diye bebo oi number onujayi amader table theke data guloke vag vag kore anbe jodi ami chunk() method take call kore or moddhe 50 diye dei tahole amader jei model ar sathe amra chunk() method take likhechi oi model ta jei table ke represent korche oi table theke amader 50 ta kore data vag vag kore amader larave ar memory storage space ar moddhe lod korbe jar fole amader laravel ar memory storage option ar moddhe oi table ar lakh lakh data amader laravel ar memory storage space ar moddhe akbare load hobe na...jar fole amader table aaa lakh lakh data thakleoooo amader laravel application crass korbe na.amra ai same kaj tai lazycollection collection ar cursor() method diye ooo kori ```(collection topic ar moddhe ai cursor() method niye diply bola hoyeche go github Collection branch)```
  ### Chunking Using Lazy Collections([Document](https://laravel.com/docs/10.x/eloquent#chunking-using-lazy-collections))

  ### Cursors([Document](https://laravel.com/docs/10.x/eloquent#cursors))


## Advanced Subqueries([Document](https://laravel.com/docs/10.x/eloquent#advanced-subqueries))

## Retrieving Single Models / Aggregates([Document](https://laravel.com/docs/10.x/eloquent#retrieving-single-models))

easy but Important

## Retrieving Or Creating Models([Document](https://laravel.com/docs/10.x/eloquent#retrieving-or-creating-models))

                 use App\Models\Flight;
              ```$flight = Flight::firstOrCreate([
                 'name' => 'London to Paris'
               ]);```


   amra jemon jani amader laravel application ar app/Models ar protita eloquent model ak ak ta database ar table ke represent kore amader oporer ai code aaa Flight model ta jei database ar table ke represent korche amra oi table theke akhane firstOrCreate() method take call korechi ai method ta prothome check korbe amader oi table ar name column ar value ki kothaw London to Paris ache ki na jodi thake tahole amader oi data ta dekhabe jodi na thake tahole database ar oi table ar name column ar moddhe ai value ta 'London to Paris' set kore debe.       



## Retrieving Aggregates([Document](https://laravel.com/docs/10.x/eloquent#retrieving-aggregates))  


  amra jani amader Aggregates function mot 5 ta:

  1. count()

  2. max()

  3. min()

  4. avg()

  5. sum()


  ai aggregates function gulo amra amader model ar sathe ooo use korte pari...akhane ami model bolte amader database ar table kei bojjhacchi karon amra jani amader laravel application ar protita eloquent model database ar ak ak ta table ke represent kore.

## Inserting & Updating Models([Document](https://laravel.com/docs/10.x/eloquent#inserting-and-updating-models))


amra kono akta  form ar data ke amader model ar maddhome database ar table a save kore dite pari ba insert kore  dite pari..kintu amader akta bishoy mone rakhte hobe amra jei model ta use korbo and oi model ta jei database ar table ke represent kore oi database ar table a amader oi data gulo giye save ba insert hobe **(check Document)**

  ### Updates([Document](https://laravel.com/docs/10.x/eloquent#updates))


  amra model ar maddhome jodi kono table ar column ar value take update korte chai tahole (check the Document)...
  
   find() method ar moddhe amra jei number ta diye dei oi number ta amader table ar primary number hishebe amader database theke data khoje jemon amra amader database ar table a primary key id take kori beshirvag somoy jokon amra find() ar  moddhe kono number diye debo tokhon oi number ta amader table ar primary key ar number ar sathe match korle oi primary key ar jei data ta ache amader database a shudhu oi data take oooo niye ashbe


  ### Deleting Models([Document](https://laravel.com/docs/10.x/eloquent#deleting-models))


  amra jokhon kono akta table ar sob data delete kore debo delete() method ar madhhome and delete korar pore jodi amra oi table aaa  aaaabar kono data insart kori ba data rakhi tahole amra dekhbo amader delete korar aage jei porjonto amader id number chilo tar por theke amader notun insart kora data data gulor id number hocche ...jodi amra chai amader table ar data delete korar pore jodi amra notun kore aaabar oi table a kono data rakhi tahole jeno amader id number ta 1 theke suru hoy tahole amra delete() method ar poriborte truncate() method ta use korbo...ai truncate() method ta amader table ar sob data delete kore debe and amader oi table take aabar reset kore debe tarpor amra oi table a notun kore kono data add korle amader id ta 1 theke aabar shuru hobe...

  ### Soft Deleting([Document](https://laravel.com/docs/10.x/eloquent#soft-deleting))


  soft delete hocche temporary delete mane kono akta table ar data ke amader application theke temporary delete kore debo and oita amader application aaa dekhabe na kintu amader database ar oi table theke amader oi data  ta delete hobe na...aita laravel ar akta  freture


  ### Pruning Models([Document](https://laravel.com/docs/10.x/eloquent#pruning-models))

  jokhon amader database ar table theke kichu older(ba purono) data ba record delete korar proyojon hobe (mane amader database ar table ar jei data gulor amader proyojon nei) tokhon amra Laravel ar ai Pruning Model freture ta use korte pari. ([Tutorial](https://www.youtube.com/watch?v=557_IL3d9V8))

  * jodi amra nicher ai command ta chalai tahole amra jei model ar moddhe ```use Prunable ``` ai ta likhechi oi model ta jei database ar table take represent kore oi table theke amader set kora condition oonujayi amader oi table theke oi data guloke remove kore debe sorasori


              php artisan model:prune  


  * jodi amra nicher ai command ta chalai tahole amra jei model ar moddhe ```use Prunable ``` ai ta likhechi  oi model ta jei database ar table take represent kore oi table theke amader set kora condition oonujayi amader oi table theke oi data guloke remove korar aage amade dekhabe kintu remove korbe na koita record amader database ar oi table theke remove hobe jodi amra ```php artisan model:prune``` ai command ta chalai  


              php artisan model:prune --pretend






## Mass Assignment([Document](https://laravel.com/docs/10.x/eloquent#mass-assignment))


check routes/web.php


## Allowing Mass Assignment([Document](https://laravel.com/docs/10.x/eloquent#allowing-mass-assignment))




## Replicating Models([Document](https://laravel.com/docs/10.x/eloquent#replicating-models))
 
 easy to execute([Tutorial](https://www.youtube.com/watch?v=IDlkpI_h2as))


## Query Scopes([Document](https://laravel.com/docs/10.x/eloquent#query-scopes)) 

Scopes hocche simple QueryBuilder method..jemon where(),orderBy().. amra amader model ar moddehe ai whare() method diye kono akta condition set kore dita pari and oi condition aaa ami je queary set kore diyechi oi tar ami akta nam diye dite pari scope ar maddhome and tar por oi scope ar maddhome amra jei  nam ta set korechilam amader condition ar oi nam dhore oi scope take call kore amra oi scope take jekono jaigai use korte pari....


* Laravel amader Query Scopes ar 2ta Poddhoti dei jemon:

 1. Global Scopes

   ai Global Scopes ta amader protita model a sathe use korte parbo....


   * Nicher ai command ar maddhome amra akta Global Scopes create korte pari.

                      php artisan make:scope je_kono_akta_nam_dite_hobe    

           

      jemon

        php artisan make:scope AncientScope


      ai command ta chalanor por  amader laravel application ar app/Models/Scopes directory ar moddhe AncientScope ai name akta Scopes file create hoye jabe.(go with this directory path)


 2. Local Scopes

    amra sora sori amader model ar moddhe giye scopes ar maddhome simple quearyBuilder diye akta condition set kore dite pari...go to (app/Models/User.php)





## Comparing Models([Document](https://laravel.com/docs/10.x/eloquent#comparing-models))    

amra ai comparing models ar maddhome 2 ta model ke compair ba check korte pari amader ai 2ta model ar moddhe ki primary key same ki na table same ki na and database connection ki same ki na.

## Events([Document](https://laravel.com/docs/10.x/eloquent#events))([Tutorial](https://www.youtube.com/watch?v=7GUaH6BI_V0&t=326s))

 ***Laravel ar kichu default Events:***

 * retrieved


  jokhon amra model theke mane model je database ar  table take represent korche oi table theke kono data ke get kori get() method ar maddhome tokhon amader retrieved Events ta fire hoy.

 * creating/created 

  jokon amra model ar moddhe save() method take prothom call kori tokhon amader creating/created ai events fire hoy.


 * updating/updated

  jodi amader table ar kono datake modify kori and then save() method take call kori tahole tokhon amader ai updating/updated events fire hoy.


 * saving/saved

  jokhon amra amader database ar table a create ba update kori data tokhon amader ai saving/saved events fire hoy.


 * deleting/deleted

  jokhon amra database ar kono table theke kono data delete kori tokhon amader ai deleting/deleted ai events fire hoy. 


  * restoring/restored

  jokhon amra amader database ar table theke kono data ke delete korar por oi datake aaabar restore kori tokhon amader ai restoring/restored ai events fire hoy.


  Laravel, ooporer ai Event gulo ke use korar jonno amader 3 ta way provide kore :

  1. **Event listener**

     ai Event listener ar maddhome jodi amra Event use kori tahole amader aage nicher ai command ta chaliye akta Event file create kore nite hobe:

                   php artisan make:event jekono_nam_dite_hobe


      jemon:

        php artisan make:event UserCreated   


      ai command ta chalanor pore amader laravel application ar moddhe app/Events directory ar moddhe UserCreated.php name akta file create hoye jabe. oi create howa file ar moddhe giye construct() method ar moddhe  amader bole dite hobe amra kon model ar oopre amader ai event listener ta performed korate chacchi oi model ar nam ta oi khane likhe dite hobe...jemon ami aitar practice korar jonno amader User model ar moddhe akta event listener add korechi(check app/Models/User.php) tai ami aikhane create howa je event file or construct() method ar moddhe amader ai User model ar nam likhe diyechi.


      ar pore amader ai creat kora Event ta ke Listen koranor jonno akta listener file create korte hobe amader ai nicher command ar maddhome:


                      php artisan make:listener ai_khane_amader_akta_nam_dite_hobe_listener_file_ar   -e  ai_khane_amader_kon_event_file_ar_jonno_amader_ai_listerner_file_ta_create_hobe_tar_nam_dite_hobe


        jemon:

          php artisan make:listener UserCreatedListener -e UserCreated     


        ai command ta chalale amader laravel application ar moddhe app/Listeners directory ar moddhe amader UserCreatedListener.php name akta file create hoye jabe.and amader ai create howa UserCreatedListener.php ai file ar moddhe je handel() function ta ache oi handel() function ar moddhe amader sob logick gulo likhbo and ai function ar moddhe amra ja set kore debo ta execute hobe jokhon amader User model je table take represent korche oi table aa notun kono data add kora hobe tar por.(go to app/Listeners/UserCreatedListener.php)     


        amader ai event listener set korar por amader ai event listener ke Registar kore dite hobe amader app/Providers/EventServiceProvider.php ar moddhe. 


        akhon amra aita check korar jonno je ai event listenter ta thik thak kaj korche ki na tar jonno amra larvel ar akta package install korte pari amader laravel application ar moddhe jar nam laravel breez ai breez package ta amader akta authentication ar service provide kore...ai breez package ta chara ooo amader laravel ar oonek package ache ja amader authentication service provide kore jemon laravel fortyfy and laravel jetstreem  ..aguloar moddhe sobchaite easy and minimal hocche  laravel breez and sobchaite advance hocche laravel jetstreem.
        
        jokhon amra  laravel breez install korbo tar por amra jokhon signup ba registar korbo tokhon oi datagulo amader users table ar moddhe giye store hobe and ai users table take represent kore amader User model.jokon amra signup korbo tar pore oi code ta execute hobe ja amra amader handel() function ar moddhe likhe rekhechi.




  2. **Using Closures** model ar boot function overwrite kore

      check (app/Models/User.php)

      boot function overwrite kore amra Event use korte pari kintu ar akta problem hocche amader created , updated ai laravel Event gulo amader aktar por akta aivabe likhte hocche ja kono proper ba standard way na ..amra jokhon aitake proper ba standarde way te likhte jabo tokhon amader Observers ar concept aaaa jete hobe..

  3. **Observers**

      Observers amader akta class provide kore jar moddhe amader laravel ar default Events gulo oi class ar moddhe autometically set kora thake...


      Observers create korar jonno amader ai command ta chalate hobe

                    php artisan make:observer je_kono_akta_observe_file_ar_nam_dite_hobe --model= model_ar_nam_dite_hobe


        jemon:

        php artisan make:observer UserObserver --model=User  

       ai command ar maddhome jodi amra  observer file create kori tahole amader oi observers file ta User model ke observe korbe mane User model ta amader database ar je table ke represent kore oi table theke jodi kono Events fire hoy taholei shudhu amader ai create kora observer file ar class ar moddhe je events gulo ache oigulo kaj korbe...jemon amader application a jodi kono user signUP kore tahole tar data ta save hobe amader database ar users table ar moddhe and ai users table ke represent kore amader User model to jokhon kono user signup korbe tokhon tar data gulo amader users table aa save hoye jabe and laravle bydefault akta Event fire korbe created, jokhon amader ai created event ta fire hobe tokhon amader ai observer file ar created event ar moddhe chole ashbe and or moddhe ami jei logic gulo likhbo ta amader dekhabe.karon ai event ta amader users table theke fire hoyeche and ai users table ke represent kore amader User Model...jehetu ami amar observer file create korar somoy model ar nam User diye diyechilam tai users table ar jonno kono event fire hole ta amader ai observe file a chole ashbe jei event ta fire hobe oi event ar moddhe chole ashbe karon amader observer file ar moddhe sob event gulo define kora ache.   


       ai command ta chalanor pore amader app/Observers directory ar moddhe   UserObserver.php name akta file create hoye jabe. and oi file ar moddhe jei event gulo set kora  ache oi event ar moddhe amra amader logic likhte pari laravel amader oi model theke mane oi model ar table theke jokhon jei event ta fair korbe tokhon shei event ar jonno amra jei logic likhe rekhechi amader Observer class ar events gulote oi gulo execute hobe.   


       jei Observer class ta ami create korlam ai Observer class take amader app/Providers/EventServiceProvider.php ar moddhe boot option ar moddhe likhe dite hobe check (app/Providers/EventServiceProvider.php)  


ai Event listener gulo use kore amra oonek kaj korte pari...jar moddhe akta holo dhoren kono user amader application aaa singnUp koreche akhon amader laravel application ar jei User model ache oi model ar moddhe amader signUp page ar data gulo jai and amader User model database ar jei table ke represent kore oi table ar moddhe oi datagulo ke store kore dei..jokhon oi  dataguloke amader database ar table aa store kore tokhon laravel ar akta bydefault event fair hoy created name(laravel ar oonek default Events ache ai created event chara oooo) to amra ai created name event ta jokhon fire hoy tokhon amra kono message diye dite pari users ke jokhon user signUp kore amader application aa dhukbe tokhon take akta welcome message dekhate pari(jemon welcome dip ghosh) amra ai ooporer 3 tar jekono akta way use kore amra ai freture ta create korte pari amader application ar moddhe.


## Muting Events([Document](https://laravel.com/docs/10.x/eloquent#muting-events))

jokhon ami kono Model ar sathe Events listener add kore rakhbo  oporer je kono akta niyome and ami jodi chai je amader oi model ar sathe kono events listener kaj na koruk tokhon amra withoutEvents() method take call korte pari amader model ar sathe jokhon ami amader model ar sathe withoutEvents() ai method take call kore debo tokhon ami jei model ar sathe ai method take call korechi oi model ar sathe jodi kono even listener add kora thake  tahole ooooo  oi events listener gulo karj korbe na karon ami amar model ar sathe withoutEvents() method take call korechi tai.










