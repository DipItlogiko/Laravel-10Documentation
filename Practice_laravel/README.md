# Laravel-10Documentation


## Authentication


 * Authentication bolte akta website ar signup and login ke bojhai..

 * laravel a authentication ar file gulo thake config/auth.php ai  path aaaa go to config/auth.php ....


 * amra jodi Laravel Breeze install kore nei tahole Laravel Breeze amader jonno akta authentication system create kore debe....and ai authentication system ta amader User model ba users table ar oopor vitti kore hobe....go config/auth.php

 * Laravel ar kichu packages ache je gulo amader laravel application  aaaa install korle  authentication system create kore dei  jemon:

   * Laravel Breeze.

   * Laravel Jetstream.

   *  Laravel Fortify.


   ader moddhe Laravel Breeze hocche simple and minimal and ar moddhe authentication ar sob fretures ache...and Laravel Breeze ar sathe amra jei view file gulo pai amader resources/views ar moddhe oi file gulo te Tailwind CSS use kora hoy.If you are using the Laravel Breeze or Laravel Jetstream By default, the user will not be able to login for one minute if they fail to provide the correct credentials after several attempts.


   Laravel Fortify ar moddhe kichu advance authentication fretures ache jemon two-factor authentication


   Laravel Jetstream sobchaite advance authentication system provide kore.aita advance akta topic.


   **amader laravel 10 documentation aaa ai 3a authentication  package ar nam bola hoyeche kintu amra ai 3ta bade ooo ui package install kore authentication korte pari.**([Tutorial](https://www.youtube.com/watch?v=S54rI0W1Nt8))




 ta chara chaile amra nijerai amader eecha moto authentication system create kore nite pari Laravel Breeze install na kore ooo....



## Database Considerations([Document](https://laravel.com/docs/10.x/authentication#introduction-database-considerations))

laravel by default App\Models\User Eloquent model includes kore rakhe amader laravel application ar ai patha a app/Models. bydefault laravel App/Models/User ai model take mane users table take use kore authentication ar jonno.


## Specifying A Guard([Document](https://laravel.com/docs/10.x/authentication#specifying-a-guard))

(check Document) IMPORTANT


## Login Throttling([Document](https://laravel.com/docs/10.x/authentication#login-throttling))


throttol ar maddhome amra rate limit kore dite pari jemon amar akta route aaa per miniutes ba per hours ba par day te koita request send korte parbe server aa jodi amader set kora limit ta cross kore tahole akta too many requests ar akta error thorow korbe .and ai throttle middleware ta bydefault vabe amader laravel application aa thake app/Http/kernel.php ar moddhe.


amara chaile amader login route take ai throttle middleware diye rap kore dite pari and akta throttle create korte hobe boot method a and oi khane bole debo jodi 2 miniutes,5 miniutes,10 miniutes ar moddhe amader koi ta request server a ashte pare ta amra boot method ar moddhe bole debo jodi amader dewa somoy ar moddhe je koita request set kore debo boot method aaa oi somoy ar moddhe jodi amader set kora limit ar theke beshi request ashe amader oi route aaaa tahole akta too many request ar akta error throw korbe...amra chaile oi too many request ar error page ta amader moto kore customize kore nite pari..

oi error directory ta amader laravel application ar vendor directory ar moddhe pore thake oi error directory take vendor theke amader application aa copy kore anar jonno amader ai command ta chalate hobe :


               php artisan vendor:publish


   ai command ta chalanor por amader akta option dekhabe and amader oi option theke    laravel-errors ai tag ta select kore dite hobe tar por amader error directory ta resources/views ar moddhe chole ashbe.         

(check Document) IMPORTANT


## Manually Authenticating Users([Document](https://laravel.com/docs/10.x/authentication#authenticating-users))


amra chaile manually authentication korte pari.(check Document)



## Accessing Specific Guard Instances([Document](https://laravel.com/docs/10.x/authentication#accessing-specific-guard-instances))


amra chaile akta custom Guard create korte pari and oi Guard take amra amader Authentication ar jonno use korte pari.custom Guard create korte hole prothome amader jete hobe config/auth.php te oi khane je providers array ache tar moddhe akta emon kore array difine kore dite hobe 



           'Provider_Ar_Name_dite_Hobe_Je_Kono' => [
            'driver' => 'eloquent',
            'model' => akhane_ami_je_Model_ba_table_ar_opor_vitti_kore_Authentication_korte_chacchi_oi_model_ar_path_ta_akhane_bole_dite_hobe,  
        ],


Providers array ar moddhe amader oporer ai custom array ta set korar por sheita ke amader  guards array ar moddhe add kore dite hobe aivabe 



           'gurd_ar_akta_nam_dite_hobe' => [
            'driver' => 'session',
            'provider' => 'akhane_ami_opore_je_name_Provider_create_korechi_oi_nam_ta_akhane_diye_dite_hobe',
        ],


 tar opre amra ai gurd ar nam take guard() function ar  moddhe call kore authenticate korte parbo....

 Check(Document)

## Adding Custom Guards([Document](https://laravel.com/docs/10.x/authentication#adding-custom-guards)) 

Important


## Closure Request Guards([Document](https://laravel.com/docs/10.x/authentication#closure-request-guards))

Important


## Adding Custom User Providers([Document](https://laravel.com/docs/10.x/authentication#adding-custom-user-providers))

Important

amra jodi na chai amader traditional relational database jemon eloquent ar maddhome amader users guloke store korte...tahole (check the documentation)

## Remembering Users([Document](https://laravel.com/docs/10.x/authentication#remembering-users)) 


amra oonek somoy oonek web page ar login page aa dekhi akta remember me checkbox jodi kew oi checkbox ta ke check kore dei tahole oi user ta jotokhon porjonto na manually logout korche totokhon porjonto she logout hobe na.kintu ar jonno obossoi amader users table ar moddhe akta remember_token name akta string column thakte hobe je column ta amader user ar remember me token ta store korbe.amader laravel application aaa bydefault users table a ai column ta include kora thake.


jokhon amader application aaar login page aaa remember me option thakbe tokhon amra ai vabe authentication korbo jodi kono user remember me checkbox check kore login kore tahole


               use Illuminate\Support\Facades\Auth;
 
               if (Auth::viaRemember()) {
                 // ...
               }


## Authenticate A User Instance([Document](https://laravel.com/docs/10.x/authentication#authenticate-a-user-instance)) (Important)  



## Authenticate A User Once([Document](https://laravel.com/docs/10.x/authentication#authenticate-a-user-once))

amra kono single request ar authentication korar jonno once() method ta use korte pari.once() method ta use korle kono session r cookies utillized hobe na.



## HTTP Basic Authentication([Document](https://laravel.com/docs/10.x/authentication#http-basic-authentication)) 


laravel amader jonno akdom simle akta auth.basic middleware create kore rekheche app/Http/kernel.php ar moddhe.

aita amader kono route ar sahte add kore dile dekhte pabo aita amadr authentication ar jonno akta signIn pop up show korche.ai  signIn pop ar moddhe je email field ta ache oi field ta amader users table ar email field theke check korbe user jei email ta diyeche oi email ta asholei amader users table ar moddhe ache ki na .

   ### A Note On FastCGI([Document](https://laravel.com/docs/10.x/authentication#a-note-on-fastcgi))

     jodi amader auth.basic middleware ta thik vabe kaj na kore tahole amader public ar moddhe .htaccess file a giye kichu code add kore dite hobe (check Document)



## Stateless HTTP Basic Authentication([Document](https://laravel.com/docs/10.x/authentication#stateless-http-basic-authentication))  


## Logging Out([Document](https://laravel.com/docs/10.x/authentication#logging-out))

 Important


## Invalidating Sessions On Other Devices([Document](https://laravel.com/docs/10.x/authentication#invalidating-sessions-on-other-devices))


Laravel also provides a mechanism for invalidating and "logging out" a user's sessions that are active on other devices without invalidating the session on their current device. This feature is typically utilized when a user is changing or updating their password and you would like to invalidate sessions on other devices while keeping the current device authenticated.


mane dhoren jokhon kono user tar accoutn ta multiple divices ar moddhe login kore rekheche and oi user ta jodi tar password ta change kore tahole r baki jei device gulote tar accoutn save kora chilo oi baki divices gulo theke amader login ar session data gulo remove korte chaile check the Document.


## Configuration([Document](https://laravel.com/docs/10.x/authentication#password-confirmation-configuration)) (Very Very Important)


 akjon user signup/registration aaa password confirmation korar por oi user 3 hours aaar aage password confirmation ar jonno ask korte parbe na ai set up ta amader laravel application aa bydefault set kora thake config/auth.php ar moddhe 'password_timeout' => 10800, 10800 aita hocche second mane 3 hours.



## Confirming The Password([Document](https://laravel.com/docs/10.x/authentication#confirming-the-password))


Important



## Some Important Things:

  jokhon amra kono auth middleware add korbo kono route a ...tokhon shudhu authenticated user chara oi route aaa oonnoo kono user jete parbe na..jodi unauthenticated user oi route a hit kore tahole take by default login page aaa niye ashbe jai ta amader app/Http/Middleware/Authenticate.php ar moddhe set kore dewa ache amra chaile aitake change kore dite pari jemon ami chaile login route a redirect na kore oonno kono route aa redirect kore dite pari.


## Events([Document](https://laravel.com/docs/10.x/authentication#events))


  authentication process cholakalin somoy laravel bivinno dhoroner eventes ke dispatch kore.amra chaile ai events gulor sathe listeners add kore dite pari
  app/Providers/EventsServiceProvider ar moddhe giye.

## Below topics i don't understand:

* Configuration([link](https://laravel.com/docs/10.x/authentication#password-confirmation-configuration)) (Very Very Important)