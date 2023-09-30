# Laravel-10Documentation

## Database: Query Builder([Document](https://laravel.com/docs/10.x/queries#running-database-queries))[Tutorial](https://www.youtube.com/watch?v=uq4NXqc14v0&t=595s)

jokhon amra laravel ar sahajje database a kono coding korte chai tokhon amader 4 ta stap ke follow korte hoy.Jemon


 1. amader akta database create korte hoy.

 2. tar pore amra database Migration kori.mane amra laravel ar sahajje database ar moddhe table create kori.   

 3. tar pore amra Seeding kori mane amra jei table create kori tar moddhe amra data kicu data rakhi.

 4. tar pore amra Model create kori.ai Model ar moddhe amra database ar coding kori.Amader Laravel ar Models directory ar moddhe thaka protita Model database ar ak akta  table ke represent kore. Laravel amader 2ta poddhoti dei laravel ar sathe  database aaar coding korar jonno.

    1. **Query Builder**

     (QueryBuilder ar code amra   sobsomoy controller ar moddhe kori)

    2. Eloquent ORM

     (Eloquent ORM ar code amra sobsomoy Model ar moddhe kori) 


**jokhon amra PHP ar sahte database ar coding kori tokhon amader oikhane SQL command likhte hoto ja oonek somoy complex hoye jai....ai complexcity take sesh korar jonno laravel amader QueryBuilder ai freture ta provide kore.**

QueryBuilder ar karone amader SQL command likhte hoy na.

QueryBuilder ar amra joto coding korbo ta sob amra amader Controller ar moddhe korbo Model ar moddhe amra QueryBuilder ar code korbo na.  


Database related jei CRUD(create,read,update,delete) operation gulo hoy ai operation gulo perform korar jonno amra QuearyBuilder ar help nite pari.

* amader joto CRUD operation ache tar jonno jodi amra QueryBuilder use kori tahole amra kichu shubidha pabo jemon:

 1. amra database ar coding ke fast korte parbo. 

 2. QueryBuilder amader application ke SQL injection attacks theke protect kore..karon QueryBuilder background aaaa PHP ar PDO format use kore.

 3. Laravel jei jei database ke suppor kore(MySQL,PostgreSQl,SQLite,SQL Server) oi sokol database ar sathe QueryBuilder work kore.


## Running Database Queries([Document](https://laravel.com/docs/10.x/queries#running-database-queries)) 


  ### Retrieving All Rows From A Table

   check (routes/web.php)


  ### Retrieving A Single Row / Column From A Table

   check (routes/web.php) 


  ### Retrieving A List Of Column Values

   Check (routes/web.php)


## Aggregates([Document](https://laravel.com/docs/10.x/queries#aggregates))   

amra jani Aggregates function muloto 5 ta Jemon:

 1. count()

 2. max()

 3. min()

 4. avg()

 5. sum()


## Select Statements([Document](https://laravel.com/docs/10.x/queries#select-statements))

   ### Specifying A Select Clause

   check (routes/web.php)


## Limit & Offset([Document](https://laravel.com/docs/10.x/queries#limit-and-offset))

* skip() and offset()

 ar kaj aakoi amra ar moddhe je number ta  diye debo oi koita data ar rows ke skip korbe ba offset korbe (mane oi koita data ar rows ke dekhabe na skip korbe)


* limit() and take() ar kaj aaakoi ar moddhe je number ta diye debo oi koita data amader dekhabe kono specific table ar theke.


        $users = DB::table('users')->skip(10)->take(5)->get();


ai code tar mane hocche amader users table theke 10 ta data ar rows ke dekhabe na mane skip korbe and tar por take(5) take ar moddhe 5 dewa ache tar mane ooo prothome 10 ta skip korar pore 5 ta data ar rows amader dekhabe karon amra sobar shesh get() use korechi.get() mane hocche amra read korte chacchi.



## Delete Statements([Document](https://laravel.com/docs/10.x/queries#delete-statements))


```$deleted = DB::table('users')->delete();``` 

jokhon amra aivabe kono database ar table ke delete korbo kothon amader oi database ar table theke sob data delete hoye jabe jemon ooporer code oonujayi amader users table ar sob data delete hoye jabe.........kintu ai vabe jodi amra kono table ar sob data delete kori tahole amader akta problem jokon aivabe kono table ar sob data delete korar pore aabar notun kore kono data inseart korbo ba add korbo tokhon amader  id ta 0 theke shuru hobe na..amader delete korar aage oi table a jei id number porjonto data chilo tar por theke id number debe jodi ami notun kono data inseart kori... table ar sob data delete korar por.


ai proble ta solve korar jonno laravel amader akta method provide kore jar nam  **truncate();**


```DB::table('users')->truncate();```


amra jodi aivabe delete kori **trancate()** method ar maddhome tahole amader users table theke sob data delete hoye jabe and ami jodi sob data delete korar por abar notun kore ai users table aaa data inseart kori tahole amar id number **1** theke shuru hobe.


amra jodi chai kono table ar sob data akbare delete na kore kono akta condition oonujayi table theke kichu data delete korte tahole amra aivabe korte kari


```$deleted = DB::table('users')->where('votes', '>', 100)->delete();```


akhane amader users table theke data delete hobe where ar moddhe je condition ta likhbo  tar oopor vitti kore.....jemon aikhane ami bolechi votes column ar value jeigulo 100 ar oopore ache oi data ar rows gulo delete hoye jabe amader users table theke......amra chaile where ar  moddhe where(id,1) ai ta dile amader users table ar moddhe id number 1 jeikhane aache oi row ta shudhu delete korbe.


## Laravel Query Builder - Insert Update Delete([tutorial](https://www.youtube.com/watch?v=YBLni0HJbXI))


## Debugging([Document](https://laravel.com/docs/10.x/queries#debugging))

check (routes/web.php)

amra routes/web.php ar moddhe akta debugging code ke execute korechi check the document....document ar jei code gulo ache ta ami bujhechi tai jonno r execute kori ni.


## Some important things :


ami akhane join ar code gulo execute kori ni karon amader github a ami amar SQL ar practice gulo rekhechi and ami oita dekhle bujte parbo and ai document ar moddhe jei join ar code gulo dewa ache oi gulo ami laravel ar moddhe execute korte parbo.



## belows topics i don't understand:

* Pessimistic Locking ([link](https://laravel.com/docs/10.x/queries#pessimistic-locking))
