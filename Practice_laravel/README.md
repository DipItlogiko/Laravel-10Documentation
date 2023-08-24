# Laravel-10Documentation

 ## Request Lifecycle

   ***[Link](https://laravel.com/docs/10.x/lifecycle)***


   **1.**  akti laravel application ar sob request ar entry  point holo public/index.php file.

   **2.** public/index.php te request gulo ashar por  public/index.php chack korbe amader application mentenense mood a ache ki na.tar por   


   **3.** public/index.php   Composer ar   dependense guloke auto load kore.(amader manually load  korar dorkar nei aita autoload.php ar maddhome aita autometically amader framework ar moddhe load hoye jai).abong tar por bootstrap/app.php ke load kore tar por


   **4.** app/Http/Kernel.php akhan theke joto service provider ache joto amader configuration ache joto environment load korte hobe joto service provider load korte hobe ai sob kaj app/Http/Kernel.php ar maddhome hoy. app/Http/Kernel.php akhan theke 2 ta jinish ber hoye ashe ta holo 

   1. console request  and

   2. HTTP request

   akhan thekei generate hoy. tar por


   **5.** HTTP request ba console request load hoyar por oi request take send kora hoy Router ar kache.


   **6.** Router ar kache request take send korar por Router oi request take Process kore dekhe je amar request valid na ki na. tar por dekhe ami je URL kujchhi ba find korchi oi ta ashole ache ki na.jodi thake tahole oi Route ar controller ke dekhe abong controller theke view load hoye jai.

   **7.** view load korar por aita theke akta Response Generate kore.

   **8.** Response Generate korar por shei Response take aabar public/index.php te send kora hoy. tar por shei ta Web Server(apache,inginx) hoye User a kache pouchai.

   ***NOTE*** :  amader akta laravel application ar sob Request ashe public/index.php  te  abar sob Response send kore ooo public/index.php 

   ***Image***: 

   ![image not found!](/Practice_laravel/Screenshot%20from%202023-08-24%2011-48-45.png "San Juan Mountains")    

 

