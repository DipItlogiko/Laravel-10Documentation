# Laravel-10Documentation


## Database: Migrations

Database Migrations ar maddhome amra amader database ar moddhe table create kori.


##  Migration ar maddhome database ar moddhe table create korar niyom:
    

  1. prothome amader akta Artisan command chalate hobe Migration file create korar jonno

                  php artisan make:migration create_flights_table


   ai command ta chalanor por amader  database/migrations ar moddhe amader akta file create hoye jabe  create_flights_table ai name....

   **OR**
   Tachara amra ai nicher command ar maddhome oooo migration create korte pari Model ar sathe nicher command ar  -m mane bojhai migration 


                   php artisan make:model Post -m  


  2. database/migrations ar moddhe create_flights_table ai file a gele amra dekhte pabo amader Schema name akta fasads ke oi file ar moddhe use kora hoyeche ai Schema mane hocche structure mane amader data base ar table ar structure ta kemon hobe ta bojhai Schema diye.and Schema ar oonek method ache  jemon create() mehtod ta amader table create korar jonno use kora hoy ai create() method ta 2 ta paramiter receive kore prothom paramiter ta hocche amader table ar nam and second paramiter ta hocche ta akta function and oi function ar moddhe akta class thake Blueprint ai class ta laravel ar class jar moddhe amader table ar sob datatype(datatype mane jemon varchar() int()) gulo ar moddhe store kora thake.....

  amra oi function ar moddhe amader table ar field gulo set kori        


  3. field gulo set korar por amader nicher ai artisan command ta chalate hobe tahole amader laravel ar migration ar maddhome create kora table ta amader database ar moddhe giye create hoye jabe


                    php artisan migrate



amra opore jemon ta dekhchi jodi amra amder database ar table Migration ar maddhome create kori tahole amader oonek kichu korte hocche kintu jodi amra sorasori amader database a giye SQL(structured queary language) command ar maddhome database aaa table create kori tahole khub sohoje tabel create korte parbo amader database aaaa.....kintu jokhon amra kono team a kaj korbo jokhon akta project ar oopore oonek developer kaj korbe tokhon jodi amra Database ar moddhe giye SQL command ar maddhome table create kori tahole oonek problem hobe jemon dhoren ami akta table create korlam and onno akta table ar column ar nam change korlam SQL command ar maddhome amader database aaa giye and ami amar team ar moddhe thaka onno developer der bole dilam ami akta table create koreci and onno akta table ar column ar nam change korechi ai nam aaa jokhon onno developer amar create kora table and column name ta oonujayi tar database aaa set korte jabe jodi she kono nam ar banan vul kore tahole amader problem face korte hobe tai amra sob sobsomoy migration ar maddhome amader database ar table create korbo....and ami jodi migration ar maddhome database ar table create kori and kono table ba column ar nam modify kori tahole amader team ar ooonoo developer ke ami just bole debo tumi shudhu ```php artisan migrate``` command ta run koro tahole ooo autometic sob set kore debo tomaer database aaa...jar fole kono problem face korte hobe na amader.



## Running Migrations([Document](https://laravel.com/docs/10.x/migrations#running-migrations))


amra nicher ai command ar maddhome amader migration file ar moddhe create kora akta table amader database ar moddhe create hoye jabe.


                 php artisan migrate


amra nicher ai command ar maddhome check korte pari amader create kora migration ar moddhe kon kon migration file gulo(mane migration file ar moddhe je table thake oi gulo) amader database aaa create hoyeche and kon kon migration file gulo amader database aaa create hoy ni.   


               php artisan migrate:status


jokhon amra amader migration gulo migrate kore production website aaa chole jai tokhon jodi amra kono notun kore kono table create kori amader migration file ar moddhome and ```php artisan migrate``` ai command ar maddhome jodi amra amader ai table take database ar moddhe create korte chai tahole amader database ar moddhe ai table ta create korte debe na(kichu security perpas ar jonno) kintu amra aita force korte pari database aa add korar jonno tar jonno amader niche ai command ta chalate hobe       


               php artisan migrate --force     



## Rolling Back Migrations ([Document](https://laravel.com/docs/10.x/migrations#rolling-back-migrations))


* amra ```php artisan migrate``` ai command ar maddhome last jei migration file ar table ta ke migrate kore amader database aa add korechilam oi table take database theke remove korte amra nicher ai command take use korte pari: 

  
                  php artisan migrate:rollback



  oi table ta amader database theke thik eee remove hoye jabe kintu amader database/migrations directory ar moddhe oi migration file ta thakbe amra chaile oi migration file ar moddhe je table ta ache ooita ke kichu modify kore ba or kono field ke modify kore aaabar ```php artisan migrate``` command ar maddhome oi migration ar moddhe thaka table take aabar amader database aaa add kore dite pari.    


* amra ```php artisan migrate``` ai command ar maddhome last jei 5 ta migration file ar table ta ke migrate kore amader database aa add korechilam oi table guloke   database theke remove korte amra nicher ai command take use korte pari:

   
                  php artisan migrate:rollback --step=5


   amra aikhane --step flag ar sathe jei number diye debo ooo oi koita last migrate kora table guloke database theke remove kore debe..


* amra jodi chai kono specifice migration file ke migrate korar por mane database aa oi specifice migration file ar table take add korar por oi spechific migration file take shudhu rollback korar jonno mane database theke remove korar jonno(amra remove korar pore jodi oi migration file aa kono modify kore aabar php artisan migrate chalai tahole oi migration file ar table ta aabar amader database aa add hoye jabe) amra --batch flag ta use korte pari. 3 hocche akhane akta batch number


                   php artisan migrate:rollback --batch=3


amra jokhon ```php artisan migrate:status``` command ta chalabo tokhon amra sob migration file ar batch number dekhte pabo .




* amra jodi chai amra joto gulo migration file ar table guloke php artisan migrate kore database aa add korechi sob guloke aksathe rollback korte tahole ba database theke remove korte tahole amra ai niche command ta chalate pari:


                     php artisan migrate:reset


  pore amra chaile ai migration file gulor table aa jodi proyojon hoy modify korar amra modify kore php artisan migrate ai command ta chalale aabar amader database ar moddhe sob migration file ar table gulo add hoye jabe kintu aager data gulo chole jabe amader table theke.   


## Roll Back & Migrate Using A Single Command([Document](https://laravel.com/docs/10.x/migrations#roll-back-migrate-using-a-single-command))  


* amader jokhon proyojon hobe amader joto gulo migration file ar table guloke php artisan migrate kore database aa add korechi sob guloke aksathe rollback kore mane database theke remove kore abar amader migration file ar table gulo ke database aa aabar migrate ba add korar tahole amra niche ai command ta use korbo:


                     php artisan migrate:refresh


   jokhon amader application ta development environment a thakbe tokhon amra amader application take test korar jonno bivinno data database ar table a set korte pari kintu jokhon amra amader ai application ke production aa niye jabo tokhon amader ai command ta chalate hobe jar fole amader migration file ar moddhe thaka sob table database theke delete hoye jabe and aabar notun kore amaded database aa migartion file  ar moddhe  thaka table gulo add hoye jabe kintu oi table gulote aage jei data gulo chilo ta remove hoye jabe.                 



## Database Connection & Table Options([Document](https://laravel.com/docs/10.x/migrations#database-connection-table-options))


 amra chaile amader database table ar sathe comment ooo pathate pari comment() method ar maddhome. check the Document 



## Updating Tables([Document](https://laravel.com/docs/10.x/migrations#updating-tables)) 


amra jodi kono akta table migration file a create kore oitake php artisan migrate command chaliye database a oi table ta add kore dei tar pore jodi amra oi table take update korte chai tahle amader kache 2 ta way ache

 1. amra chaile jei migration file a amra amader oi table ta rekhechi jei table ta amra update korte chacchi oi migration file take shudhu rollback kore mane database theke remove kore tar por oi migration file aa diye amra oi table take update kore tar pore aabar php artisan migrate command ta chalale amader oi table ta aabar amader database ar shathe add hoye jabe ...kintu aita update korar proper way na karon jodi amra aivabe update kori taholee amader table aa jodi kono data theke thake tahole ta remove hoye jabe aita korar por.

 2. ai way ta hocche amader database a table add korar pore oi table take update korar sothik way.ar jonno prothome amra ```php artisan make:migration update_flights_table``` ai command chaliye amader  akta migration file create korte hobe ai khane ami file name diyechi update_flights_table ami chaile ai khane jekono nam dite pari file ar...and ai file ta create hobe amader database/migrations directory ar modddhe.. oi file aaa giye amra Schema:: fasads class ar sathe table() method ta use korbo karon kono exesting table ke update korte hole amader table() method ta use korte hobe ..and ai table method ta 2 ta paramiter receive kore prothom paramiter ta hocche amader jei exesting table take amra update korte cacchi oi table ar nam and second paramiter hocche amader akta function **(check the Document and database/migrations directory as well)**

## Renaming / Dropping Tables([Document](https://laravel.com/docs/10.x/migrations#renaming-and-dropping-tables))


amra chaile kono exesting table ar name ta change kore dite pari and kono exesting table ke drop kore dite pari **(check the Document and database/migration directory as  well)**


## Columns([Document](https://laravel.com/docs/10.x/migrations#columns))

amra jokhon kono akta table create kori amadre database/migrations directory ar moddhe ```php artisan make:migration create_posts_table``` ai command ta chaliye tokhon amader oi migration file ar moddhe giye amader table ar column gulo likhe dei and amader oi column gulor datatype ki hobe ta amader bole diye hoy and amader migration file a akta Blueprint name akta class thake jei class ar moddhe laravel table ar column ar datatype gulo define kore rekheche jemon amra amader mySQL a shikhechi akta datatype jar nam varchar() ai varchar() datatype ke amader  Blueprint class string() method name define kore rekheche jokhon amra string() method take call korbo tokhon ai string()  behind the sence varchar() kei call korbe ....

  Blueprint class ar moddhe je datatype gulo define kora ache amader oi datatype gulo use kore amader table ar column ar datatype set korte hobe amader migration file aaa.

   ### Available Column Types([Document](https://laravel.com/docs/10.x/migrations#available-column-types))

   ai section a jei column types gulo ar kotha bola hoyeche Blueprint ar moddhe ai column types ba datatypes gulo define kora ache....jokhon amra amader migration file ar moddhe amader table ar column set korbo tokhon ai column types gulo ba datatype gulo amra use korbo.
    
    
   **(check Document)**


   ### Column Modifiers([Document](https://laravel.com/docs/10.x/migrations#column-modifiers))   

   amra amader column field ar sathe bole dite pari ai column ta ki autoIncrement hobe ki na ba nallable hobe ki na ...check(Document)

   **(Important)**


   ### Modifying Columns([Document](https://laravel.com/docs/10.x/migrations#modifying-columns))

   jokon amra kono akta table migration file ar maddhome create kore oitake migrate kore database add korar pore jodi amader oi table ar kono column ke Modify korar poryojon hoy tahole  amra aage akta migration file create kore nebo artisan command ```php artisan make:migration modify_flights_table_column``` 
   
   ar maddhome and ai migration  file ar moddhe giye ja korte hobe ta amader ai Documentation aa bola ache oi khane boleche users table ar aage name column ar max value chilo  25 mane name column aa 25 ta alphabet ar beshi kichu rakhbe na pore oi column ar max ar value ta 50 kore oi column take Modify kore diyeche and change() method ta ke call kore diyeche

   ai kaj ta korar por jodi amra ```php artisan migrate:status``` command ta chalai tahole amra dekhte pabo amader ai migration file ta pending aa ache mane aitake amader ```php artisan migrate``` commad chaliye amader database ar moddhe add kore dite hobe.

   tarpor amra amader database aa giye dekbo oi column ar value 25 theke 50 hoye geche max
    
   
    check(Document)

   Important


   ### Renaming Columns([Document](https://laravel.com/docs/10.x/migrations#renaming-columns))


   jokon amra kono akta table migration file ar maddhome create kore oitake migrate kore database add korar pore jodi amader oi table ar kono column ar name take rename korar proyojon hoy tahole check (Document) document aa from mane bojhacche amader column ar nam akhon jeita ache oi name ta from ar oi jaigai likhe dite hobe and amra notun jei nam ta dite chacchi oi column ar shei nam ta amra to ar jaigai likhe debo.  

   Document je code ta ache ta execute korar jono amra README.md ai file ar (Modifying Columns) ai section aaa jei vabe execute korar kotha bola hoyeche oi vabe amra ai code take oo execute korte parbo.


   ### Dropping Columns([Document](https://laravel.com/docs/10.x/migrations#dropping-columns))

   jokon amra kono akta table migration file ar maddhome create kore oitake migrate kore database add korar pore jodi amader oi table ar kono column ke drop ba remove korar proyojon hoy tahole check the (Document)

   Document je code ta ache ta execute korar jono amra README.md ai file ar (Modifying Columns) ai section aaa jei vabe execute korar kotha bola hoyeche oi vabe amra ai code take oo execute korte parbo.


   ### Creating Indexes([Document](https://laravel.com/docs/10.x/migrations#creating-indexes)) 


   amra amader kono table ar column ar value guloke unique() korar jonno aita dekhete pari.


## belows topics i don't understand:

* Foreign Key Constraints([link](https://laravel.com/docs/10.x/migrations#foreign-key-constraints))

