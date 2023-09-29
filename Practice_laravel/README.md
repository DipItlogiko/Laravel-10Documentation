# Laravel-10Documentation


## Authorization


 Authentication r Authorization shunte ak rokom lagleo ai 2 ta ak na....

 * Authentication hocche kono akta user siginup kore jokhon login korbe tokhon user login korar somoy je username and password debe oi information gulo check kora hobe oi username and password diye kew signup koreche kina jodi amader oi information gulo mile jai amader siginup information ar sathe tahole akta user Authenticated hoye amader application enter korte parbe.

  **in real life example:**
 
  amra ai Authentication ke ticket ar sathe tulona korte pari jemon jokhon amra kono chinema hall a jai tokhon amra ticket kati ai ticket katake bojhanno hocche SignUp....and jokhon amra chinema hall a dhuki tokhon amader ticket dekhiye tar pore dhukte hoy jodi ticket vuya hoy ba match na kore tahole amader chinema hall a dhukte dei na ai ticket dekhanoke bojhano hocche login....and chinema hall hocche amader application.....authentication muloto ai SignUp and login ke handel kore amader application ar.


 * Authorization ar mane hocche amader kono application aaaarr  perticular kono authenticated user ke kon kon access dibo amader  application ar ta bojhai......

  **in real life example:**

  jokhon kono User sothik ticket dekhiye mane authenticated hoye cinema hall aa enter korbe mane amader application a enter hobe oi khane ami oi authenticated User ke je Authorize  ba permission dibo jemon , tumi ai sit aa boshte parba and ac ar hawa khete parba tumi chaile ja khushi khete parba oi authenticated User chinema hall aaaa ai jinish gulo korte parbe mane amader application a shudhu ai jinish guloi korte parbe karon ami oi authenticated User ke shudhu oi Authoriz ba permission diyechi ar baire oi authenticated User kichu korte parbe na chinema hall aaa mane amader application aaaaa

 Authorization ar prosses ta shuru hoy Authentication ar pore....


 * Laravel, Authorization  ar 2ta podhotti amader provide kore Jemon:

   * Gates
   * Policies

   ai Gates and Policies ke route and controller ar sathe tulona kora jai.
## Gates ([Document](https://laravel.com/docs/10.x/authorization#gates))

   **Gates amader simple clouser based Authorization approach provide kore.**

   (kono akta simple action ke perform korar jonno kono user Authorized ache ki na aita amra Gates ar moddhome difine kore dite pari) 

   (jei action gulo kono Model ba resources ar sathe somporkito na ba related na oisob jaigai amra Gates use korbo )

   **Gates methods:**

   * define()

      Gates ke define korar jonno amra ai define() method ta use kori.ar prothom arguments a amara jei nam dibo oi nam  a amader authoraization ca create hobe.

   * allow()


   * denies() (check 26:15[tutorial](https://www.youtube.com/watch?v=2zV0c7a1VNQ))
      

   * forUser()

   * any()

   * none()

   * authorize() (check 24:00[tutorial](https://www.youtube.com/watch?v=rHIXSggC654&t=456s))     

   * check()

   * can()

   * cannot()

   * inspect()

   * before()

   Sometimes, you may wish to grant all abilities to a specific user. You may use the before method 

   * after()


   **Gates blade directive:**(amra jani amara blade.php file a sorasori @ diye ja likhi oiguloke blade directive bole)
     
   * @can()

     @endcan

     Note:  @can(ar moddhe amra jei Gate authorization ar nam diye debo oi authorization ar moddhe jei authenticated user ke permission dewa hoche shudhu oi user eee amader can ar moddhe thaka code gulo dekhte parbe)
   
   * @cannot()

     @endcannot
    
   Note: @cannot() hocche @can() ar biporit ba oposit.

   * @canany()

     @endcanany


   * @can()

     @elsecan()

     @else()

     @endcan

  * @cannot()

     @elseconnot()

     @else()

     @endcannot   


  * @canany()

     @elsecanany

     @else

     @endcanany          
       


 ### Writing Gates([Document](https://laravel.com/docs/10.x/authorization#writing-gates))

  * writing Gates into the App\Providers\AuthServiceProvider

    amra Gates authorization ta define korbo amader App\Providers\AuthServiceProvider ai path a giye AuthServiceProvider ar boot method ar moddhe.

    jokhon amra Gates ke define korbo amader boot method ar moddhe tokhon define() method ar moddhe jei first argument ta dibo oita amader user ar instance hobe mane kon user akhon login koreche tar instance amra dekhte pabo. go to (App\Providers\AuthServiceProvider)


  * writing Gates into the custom directory


    amra oprer   writing Gates into the App\Providers\AuthServiceProvider a jemon sob kichu amader boot method ar moddhe likhechi kintu amader ai
    writing Gates into the custom directory te amra akta custom directory create korbo amader app/Gates and amara sob Gates gulor file app/Gates ai path a rakhbo and tar por amader App\Providers\AuthServiceProvider ar moddhe boot method ar moddhe amader Gates gulo define kore debo.

    ar maddhome amra amader Gates file gulo separate korte pari.


 ### Using Gates Via Middleware

   amra oporer jekono niyome Gate create korar por ba define korar por amra oi Gate ke Middleware ar sathe use korte pari route aaaa....amra  Gate create korar somoy define() method ar moddhe prothomee je argument ar nam diyechilam oi nam dhore amader oi Gate ke call korte hobe 'can' middleware ar sathe(can:ar pore amader Gate ar nam bole dite hobe) karon amader Laravel applilcation ar moddhe app/Http/kernel.php ar moddhe already laravel bydefault vabe amader authorization ar jonno akta middleware create kore rekheche 'can' name . (check routes/web.php)


  ## Using Gates Via Blade  

   amra amader (Writing Gates) section a  jei 2 vabe Gates write korar way likhechi or jekno ak vabe Gate create kore oi gate oonujayi amra amader blade.php file theke kono datake hide kore dite pari amader create kora Authorization ar moddhe ami je user ke shudhu Authorized korechi shudhu oi authorized user eee amader blade.php page ar oi particular option tuku dekhte parbe jei particular option tuku ami amr blade.php file ar moddhe @can('amader_Gate_ar_nam_bole_dite_hobe_je_name_ami_Gate_define_korechi_app/Providers/AuthServiceProvider ar moddhe') 
   

   ar moddhe jei code gulo thakbe ai code gulo shudhu amader Gate ar moddhe je user ke authorized kora hoyeche oi authorized user bade r kono authenticated user ai code tuke dekhte parbe na.(Check routes/web.php)


   @endcan        



   **NOTE:** 

   jokhon amra Gates Authorization blade.php te korbo tokhon amra amader blade.php file ar moddhe je part tuku amader Gates blade directive diye jemon @can(ar moddhe je authoraizatin ar nam ta diye debo and ai authoraization a jei authenticated user ke permition dewa hoyeche shudhu matro oi authenticated user can ar moddhe je code gulo thakbe ta dekhte parbe oonoo kono authenticated user dekhte parbe na) 


   ar moddhe je code gulo thakbe 


   @endcan       


   kintu ar akta problem hocche aita shudhu amader ui theke remove kore debe jodi authorized user chara onno kono user ai page aa ashe kintu ai page ar action remove korbe na....(check the tutorial 21:58[Tutorial](https://www.youtube.com/watch?v=2zV0c7a1VNQ))
   
     


##  Policies([Tutorial](https://www.youtube.com/watch?v=rHIXSggC654))

  Policies ke amra controller ar sathe tulona korte pari. 

  amra jokhon kono Model ba resource ar jonno kichu logic likhi tokhon oitake bole Policies.
   
   **Jodi amader kono action kono particular Model ba resource ar opor proyojon hoy tahole Policies use korbo**


  ### Generating Policies ([Document](https://laravel.com/docs/10.x/authorization#generating-policies))


  Policies amra create korte pari ai command ar maddhome:

                php artisan make:policy policy_ar_nam


  example:

       php artisan make:policy AdminPolicy  
       


  **akhane akta important bishoy hocche jokhon amra kono policy create korbo oi oporer command ar maddhome tokhon akta naming convension amader mante hobe jemon amra jei Model ar jonno policy create korchi oi Model ar nam thik jeivabe lekha ache thik oivabe aage likhte hobe tar por Policy likhte hobe**

  for example:

  amader akta Post Model ache and ami chacchi amader Post Model ar jonno akta policy create korbo...policy create korar somoy amader prothome amader Model ar nam likhte hobe jemon Post tar pore Policy(PostPolicy).   

  ai command ta chalanor por amader akta Policies name akta directory create hoye jabe amader laravel application ar app/Policies name and ai directory ar moddhe amader  AdminPolicy.php file create hoye jabe    


  ### Registering Policies([Document](https://laravel.com/docs/10.x/authorization#registering-policies))


  policy create korar por amader ai created kora policy ke register korte hobe App\Providers\AuthServiceProvider ar protected $policies = [
         ar moddhe
    ];


  for example:

        protected $policies = [
         Post::class => PostPolicy::class,
    ];


   Post::class ta hocche amader Modle and PostPolicy::class hocche amader Policy.


  policy ke register kora  optional akta bishoy jodi amra laravel ar nameing convension mene amader policy ar namgulo likhi tahole laravel bydefault detect kore nei...tai tokhon amader r ai policy ke register korar proyojon pore na....kintu ami jodi nameing convension na mene policy create kori tahole amake obossoi register korte hobe

 
  ### Writing Policies([Document](https://laravel.com/docs/10.x/authorization#writing-policies))


  amra artisan command ar maddhome je police file ta create korlam oi file ar moddhe amra amader method ar nam ja dibo and oi method ar moddhe ja korbo...jokhon amra oi method ar nam dhore call korbo tokhon oi method ar moddhe joto logic ache sob execute hobe.(check app/Policies/UserPolicy.php)


  ### Using Policies via Middleware


  amra amader akta Policy lekhar por oitake Middleware ar maddhome use korte pari tar jonno prothom aa amader can middleware take call korte hobe can middleware ar kaj hocche amader akta authorization provide kore amra amader laravel application ar moddhe aita ke bydefault vabe pabo app/Http/Kernel.php ar moddhe. can: ar pore amra je policy ta likhechi oi policy ar nam can:ar sathe likhte hobe tar pore amader bole dite hobe amra kon Model ar opor ai Authorization ta korte chacchi.....check(routes/web.php)



  ### Using Policies via Blade

  amra amader create kora policy take amader blade.php file aaa use korte pari  Gates blade directive ar maddhome......check(routes/web.php)


  **NOTE:** 

   jokhon amra Policy Authorization blade.php te korbo tokhon amra amader blade.php file ar moddhe je part tuku amader Gates blade directive diye jemon @can(ar moddhe je authoraizatin ar nam ta diye debo and ai authoraization a jei authenticated user ke permition dewa hoyeche shudhu matro oi authenticated user can ar moddhe je code gulo thakbe ta dekhte parbe oonoo kono authenticated user dekhte parbe na) 


   ar moddhe je code gulo thakbe 


   @endcan       


   kintu ar akta problem hocche aita shudhu amader UI theke remove kore debe jodi authorized user chara onno kono user ai page aa ashe tahole... kintu ai page ar action remove korbe na....(check the tutorial 22:26[Tutorial](https://www.youtube.com/watch?v=rHIXSggC654&t=456s))




  ### You are  unauthorized ai message take amra bivinno vabe customized korte pari

   * jemon kono policy ar authorization jodi fail kore tahole amra aivabe amader unauthorized message take customized korte pari(check 31:03[Tutorial](https://www.youtube.com/watch?v=rHIXSggC654&t=456s))


   * othoba amra aivabe ooo korte pari amader proyojon ooonujayi

    abort(403,'message')

   abort ar moddhe amader prothom code ta hocche error code (amra akhane je kono error code likhte pari jegulo laravel a ache (check the below option)) and amra akhane je error code debo oi error code ar message ta ki hobe ta amra akta string ar moddh pass kore dite pari.  


   * amra chaile amader laravel ar moddhe je error code ar file gulo ache oi guloke customize kore dite pari sundor vabe tar jonno amader kichu kaj korte hobe

   1. amader composer ar maddhome laravel application install korar por ai error code ar file gulo dekhte pabo na ai error code ar file gulo amader vendor directory ar moddh pore thake bydefault oi vendor directory theke amader oi errors directory take copy kore amader application ar moddhe niye ashar jonno amader ai command ta chalate hobe


            php artisan vendor:publish


   ai command ta chalanor por amader kichu option ashbe oikhan theke amader laravel errors tag ta select kore dite hobe.   

   tahole amader oi errors directory ta vendor theke amader application ar resources ar moddhe   copy hoye chole ashbe...


  ### Using Policies via User Model(32:41[tutorial](https://www.youtube.com/watch?v=rHIXSggC654&t=456s))


       




  


      

  
           
          




   

     






Gates and Policies ai 2 tar kaj hocche amader Authorization provide kora.


 


