# Laravel-10Documentation

## Database: Pagination([Tutorial](https://www.youtube.com/watch?v=6U1mGD2RBWU))


dhoren amader database ar kono akta specific table ar moddhe oonnek data ache doren 500 ba tar beshi and ami chacchi je amader oi specific table tar datagulo ke fatch korar pore ta amader akta page ar moddhe sob data na dekhak oi specific table ar data guloke 10 ta ba 20 ta ba 30 ta ba 40 ta ba 50 ta eemon kore dekhak tokhon amra  Database Pagination ar use korbo.


oonek somoy amra oonek data akta Database ar table theke fatch kore aane akta single page aa show korale tokhon oi page ta load hote oonek somoy lage ...jodi amara database Pagination ar moddhome data guloke 10 ta ba 20 ta ba 30 ta eeemon kore ak ak ta single page aaa data guloke show korai tahole amader page load hote beshi somoy nebe na.


## laravel amader 3 ta method dei ai Pagination ar jonno


 1. Paginate()

    amra amader Controller file ar moddhe giye querybuilder ar maddhome database theke kono specific table theke data fatch korar somoy amra ai Paginate() method ta use korte pari and ai pagination(ar moddhe jei number ta amra pass korbo oi number onujayi amader database ar table theke data show korbe akta page aa jodi ami 5 dei tahole 5 ta data ar row amader akta page aa dekhbe) and paginate() method ar pore amader get() method jar kaj amader database theke data guloke read korano ai get() method ooo use kora lage na jodi amra paginate() method ta use kori tahole. R jodi ami paginate() method ar moddhe kono number na dei tahole ooo bydefault 15 set kore debe mane amader akta single page ar moddhe amader 15 rows ar data dekhabe.

    jemon

    ```DB::table('users')->peginate(5)```

    akhane ami database quearu builder ar maddhome bolechi amar users table theke 5ta kore data ar row dekhaba ak ak ta single page aaa...


    amra jodi ai paginate() method ta use kori tahole ai method ar pagination view ta eemon hobe:

    ![image](./Screenshot%20from%202023-10-01%2010-36-35.png)

    
    Check (routes/web.php)


 2. simplePaginate()

      ```DB::table('users')->simplePeginate(5)```



      jodi ami simplePaginate() method ar moddhe kono number na dei tahole ooo bydefault 15 set kore debe mane amader akta single page ar moddhe amader 15 rows ar data dekhabe.

      amra jodi ai simplePaginate() method ta use kori tahole ai method ar pagination view ta eemon hobe:

      ![image](./Screenshot%20from%202023-10-01%2010-42-47.png)


     


 3. cursorPaginate()


     ai cursorPaginate() mathod ta amader ooporer 2 ta paginate method theke aktu aalada...kintu dekhte aita simplePaginage() ar view ar moto hoy.


     jodi ami cursorPaginate() method ar moddhe kono number na dei tahole ooo bydefault 15 set kore debe mane amader akta single page ar moddhe amader 15 rows ar data dekhabe.


     ```DB::table('users')->orderBy('id')->cursorPaginate(5)```

     ar moddhe amader akta  extra method add korte hoy jar nam orderBy() ai orderBy() method ar kaj hocche ai method ar moddhe amra kono table ar je field ar nam diye debo oi field take oooo sort korbe accending format aaa mane choto theke boro format aaa sort korbe.ami orderBy() method ar second argument aaa bole dite pari kon format aaaa aamaded oi table ar column ta sort hobe jemon accending naki diccending.bydefault orderBy() ar moddhe je column ar nam dibo oooo oi column take accending format aa sort korbe bydefault...


     orderBy() metho take use na korle amra cursorPaginate() method take use korte parbo na....jodi amra orderBy() method ke chara cursorPaginate() likhi ba code ta run kori tahole amader akta error ashbe.


     cursorPaginate() method take use korar somoy amra most of the time orderBy() ar  moddhe column ar nam id rakhbo..


     * ai cursorPaginate() method ar shubidha hocche:

        1. ai method take amra oonek boro dataset(mane dhoren amder akta table aa lakh lakh koti kori data ache shei khetrre amra ai method take use korte pari pagination ar jonno) ar sathe use korte pari.

        2. ai  method ta oonek fast hoy ooporer 2 ta method ar theke.ai method ta opore 2 ta method ar thke fast hole oooo ai method ta beshi popular na....beshir vag khettre sob project aaaa paginate() method take use kora hoy pagination ar jonno.
       
     * ai cursorPaginate() method ar ooshubidha hocche:

        1. ai method ta amader server ar resource beshi use kore karon ooo caching
        kore rakhe. ar karone amader server aaa oonno je process gulo ache oi gulo slow hoye jete pare.



     amra ai cursorPaginate() method ta oi applicationei use korbo jei application 
     aaa amader scroll to peginate(mane scroll korar sathe sathe amader pegination hobe)  korte hobe oi application aaaaa. 

     jemon (printerest) web site a gele amra dekhte pabo scroll to pegination ar bishoy ta oikhae user der picture gulo amra joto scroll korbo toto amra image gulo dekhte parbo ai ta hoy ashole scroll to peginate ar karone ja amader cursorPaginate() pagination method ta provide kore ...

     ### Cursor Paginator Instance Methods([Document](https://laravel.com/docs/10.x/pagination#cursor-paginator-instance-methods))


     ai method gulo amra amader cursorPaginator ar sathe use korte pari ...jodi tumi na bujte paro ai method gulo ki vabe execute kobe tahole ai READEME.md file ar (Paginator / LengthAwarePaginator Instance Methods) ai section aa jaw karon oikhane Paginator / LengthAwarePaginator Instance Methods gulo ki vabe execute korte hobe ta dekhano hoyeche oi dekhar pore ai khane method gulo tumi execute korte parba.ai method gulo amader view file theke execute korte hobe.



## amader blade file a pagination ar view ta dekhanor jonno:


   amader controller ar moddhe database quearybuilder ar maddhome kono akta specific table ar sob data ke fatch kore ante hob jemon


   ```$allUsers = DB::table('users')->peginate(5)```


   tar por controller theke amader akta view file ar moddhe ai $allUsers variable take pass kore dete hobe jemon

   ```return view('view_file_ar_nam',['allUsers' => $allUsers]);```   


   tar por  view_file_ar_nam  ai khane je view file ar nam dibo oi view file ar moddhe giye amader aita likhlei amra amader pagination ar view ta peye jabo

   ```{{$allUsers->links()}}```


   aikhane links() amader jonno akta pagination ar view ar jonno akta html generate korbe.and oi html ar sathe amader bydefault vabe Tailwin css freamwork ar class add thake(amra chaile Bootstrap css freamwork ar class oo add korte pari Tailwin css freamwork ar class ke bad diye laravle amader ai freture ta oo dei) check the below section.

   ## Using Bootstrap([Document](https://laravel.com/docs/10.x/pagination#using-bootstrap))

         
   check (routes/web.php)


   ## Paginator / LengthAwarePaginator Instance Methods([Document](https://laravel.com/docs/10.x/pagination#paginator-instance-methods))


   check the document there they have provided so many mathods which we can use with our pagination.....i have practiced some methods from there in (routes/web.php Using Bootstrap section boot.blade.php) 


   ### Displaying Pagination Results([Document](https://laravel.com/docs/10.x/pagination#displaying-pagination-results))

   amra ai section ar important bishoy gulo oopoore   likhechi (amader blade file a pagination ar view ta dekhanor jonno) ai section aaa.

      


   ### Adjusting The Pagination Link Window([Document](https://laravel.com/docs/10.x/pagination#adjusting-the-pagination-link-window))

   amader view file aaa je pagination ar window ta ashe amra chaile oita ke adjust korte pari...check the Document.



## Customizing The Pagination View([Document](https://laravel.com/docs/10.x/pagination#customizing-the-pagination-view))   







## Customizing Pagination URLs([Document](https://laravel.com/docs/10.x/pagination#customizing-pagination-urls))

amra jokhon pagination ar view take amader application ar blade file aa view korai tokhon amra dekhte pabo jokhon amra pagination ar kono button a click kori tokhon amader browser ar url a aita dekhbe bydefault paginate?page=1(check routes/web.php Paginate() section )
amra ai url take ooo customize kore dite pari.(check routes/web.php Customizing Pagination URLs section)



amra database quearyBuilder chara oooo amader data base theke kono specific table ar data ke fatch korte kari Model(mane Eloquent ORM) ar maddhome .


## Appending Query String Values ([Document](https://laravel.com/docs/10.x/pagination#appending-query-string-values))


amra appends ar moddhe jei array ta pass korbo oi array ar value ta amra amader url ar moddhe dekhte pabo....check Document



## Appending Hash Fragments([Document](https://laravel.com/docs/10.x/pagination#appending-hash-fragments))


amra amader paginate ar pore jodi fragment() use kori and fragment ar moddhe jodi ami kono string pass kori tahole amra oi string take # ar pore dekhte pabo amader url ar moddhe.



## Converting Results To JSON([Document](https://laravel.com/docs/10.x/pagination#converting-results-to-json))

check (routes/web.php)

## Customizing The Pagination View([Document](https://laravel.com/docs/10.x/pagination#customizing-the-pagination-view))

amra pagination ar jei view ta dekhte pai amader blade.php te

ai process a:

  amader controller ar moddhe database quearybuilder ar maddhome kono akta specific table ar sob data ke fatch kore ante hob jemon


   ```$allUsers = DB::table('users')->peginate(5)```


   tar por controller theke amader akta view file ar moddhe ai $allUsers variable take pass kore dete hobe jemon

   ```return view('view_file_ar_nam',['allUsers' => $allUsers]);```   


   tar por  view_file_ar_nam  ai khane je view file ar nam dibo oi view file ar moddhe giye amader aita likhlei amra amader pagination ar view ta peye jabo

   ```{{$allUsers->links()}}```

bydefault...ai take jodi amra change korte chai mane ai bydefault pagination ar view ta ke na dekhiye amader create kora kono custom view file amra dekhate pari jei view file ar moddhe amader nijeder degine kora pagination ar code lekha thakbe....(for achiving this check Document)

 