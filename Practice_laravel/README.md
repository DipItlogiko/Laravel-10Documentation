# Laravel-10Documentation


## Authentication


 * Authentication bolte akta website ar signup and login ke bojhai..

 * laravel a authentication ar file gulo thake config/auth.php ai  path aaaa go to config/auth.php ....


 * amra jodi Laravel Breeze install kore nei tahole Laravel Breeze amader jonno akta authentication system create kore debe....and ai authentication system ta amader User model ba users table ar oopor vitti kore hobe....go config/auth.php

 * Laravel ar kichu packages ache je gulo amader laravel application  aaaa install korle  authentication system create kore dei  jemon:

   * Laravel Breeze.

   * Laravel Jetstream.

   *  Laravel Fortify.


   ader moddhe Laravel Breeze hocche simple and minimal and ar moddhe authentication ar sob fretures ache...and Laravel Breeze ar sathe amra jei view file gulo pai amader resources/views ar moddhe oi file gulo te Tailwind CSS use kora hoy.


   Laravel Fortify ar moddhe kichu advance authentication fretures ache jemon two-factor authentication




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



## Some Important Things:

  jokhon amra kono auth middleware add korbo kono route a ...tokhon shudhu authenticated user chara oi route aaa oonnoo kono user jete parbe na..jodi unauthenticated user oi route a hit kore tahole take by default login page aaa niye ashbe jai ta amader app/Http/Middleware/Authenticate.php ar moddhe set kore dewa ache amra chaile aitake change kore dite pari jemon ami chaile login route a redirect na kore oonno kono route aa redirect kore dite pari.
