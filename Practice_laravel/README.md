# Laravel-10Documentation

## Database: Seeding

jokhon amader software ke test korte hoy tokhon amader kichu initial data ar proyojon hoy oi initial data ke amra boli seeding.


jokhon amra migration artisan command(php artisan make:migration create_posts_table  akhane ami file ar nam create_posts_table aita diyechi ami chile ja khushi dite pari amader proyojon oonujayi) ar maddhome kono table create kore oi table ar moddhe kichu temporary ba fake data rakhi tokhon take seeding  bole.


jokhon amra laravel ar sahajje database ar table ar moddhe kono  data rakhte chai tokhon laravel amader 2 ta poddhoti dei 

 1. Seeder

 2. Factory


 ai 2ta poddhotir kaj korar dhoron prai akoi...ai 2ta poddhotir maddhome amra amader database ar table a temporary ba fake data rakhi.


 * **Seeder**

  ai seeder ar maddhome amra amader database ar table ar moddhe real data rakhi..real data mane hocche jei data ashole amra amader website aaa use korbo.

  jemon dhoren ami akta e-commerce ar website baniyechi and oi website take ami amar clint ke diyechi and dhoren amar oi  clint thake U.S aaa te akhon U.S ar kichu City ache and kichu state ache akhon amar clint chacche je U.S ar je City ache and je State ache and je postcode ache ta amader website a autometically dekhak....ai sokol kaj amra Seeder ar maddhome kori.
 

 * **Factory**

  jokhon amra amader website ta banacchi  tokhon amader database ar moddhe kichu fake data rakhte hoy...tokhon amra Factory ke use kori.


  ooonek developer ra shudhu Seeder kei use kore database ar table a real data and fake data rakhar jonno. 


## Writing Seeders([Document](https://laravel.com/docs/10.x/seeding#writing-seeders))  


* amader Laravel Application ar moddhe sob seeding ar class gulo thake database/seeders directory ar moddhe. bydefault laravel amader jonno DatabaseSeeder class define kore rakhe database/seeders directory ar moddhe.


* Seeder create korar jonno amader nicher ai code ta run korte hobe:

                 php artisan make:seeder jei_name_seeder_ta_create_hobe_tar_nam_akhane_dite_hobe_ja_khushi

   jemon 


   php artisan make:seeder UserSeeder    


   amader ai UserSeeder name file ta create hobe database/seeders directory ar moddhe.       


   check the belows to video you will clear:

   * [Tutorial-1](https://www.youtube.com/watch?v=-Ip8Q402Q2w)

   ai videoo ta importana karon akhanee diply bojano hoyeche

   * [Tutorial-2](https://www.youtube.com/watch?v=Y8crm7oULds)
 
   Ororer video ta dekhar por ai video ta dekha uchit.