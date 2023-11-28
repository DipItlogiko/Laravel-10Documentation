# Laravel-10Documentation

## Eloquent_Relationships


   amader database ar table gulo prai eeee  akta r aktar sathe releted thakte pare jemon akta blog post  aaa  ooonek comment thakte pare ba oi comment gulo kon user koreche oi user ar table mane users table and amader commemnts table ar moddhe amra relation create korte pari...jemon amra jodi chai amader users table theke kono akta user blog post a multiple  comment korte parbe tahole amar users table and comments table ar moddhe amra One To Many relation ta create korte pari..Eloquent_Relationships amader powerful queary builder ooo serve kore mane amra amader Eloquent_Relationships ar maddhome  queary oo build korte pari...

   queary builder bolte amader database ar theke data queary kore aana ke bojhai jemon amra laravel-10 Database Queary builder shikhechi temon vabe amra amader Eloquent_Relationships ar maddhome ooo queary build korte pari...


   * Laravel Eloquent_Relationship ar maddhome amra nicher ai relation gulo create korte pari:

     * One To One
     * One To Many
     * Many To Many
     * Has One Through
     * Has Many Through
     * One To One (Polymorphic)
     * One To Many (Polymorphic)
     * Many To Many (Polymorphic)


## Defining Relationships ([Document](https://laravel.com/docs/10.x/eloquent-relationships#defining-relationships))  


amra amader laravel ar relation gulo laravel application ar moddhe app/Models ar moddhe model class ar moddhe likhi...Eloquent_Relationship amader queary builder(queary builder amra amader controller ar moddhe likhi) ta ooo provide kore....


## One To One([Tutorial](https://www.youtube.com/watch?v=mQT8BLEZaWA&t=1000s))

  * Laravel ar One To One relationship hocche akdom basic type ar akta relationship. ai relationship ta amra use kori jokhon akta user ar akta profile thakbe ba akta husband ar akta ee wife thakbe ba akta wife ar akta ee husband thakbe tokhon eee amra One To One Relationship use korbo....

  * One To One Relationship jokhon amra amader kono Model ar moddhe likhbo tokhon amader ```hasOne()``` method ta use korte hobe  ai ```hasOne()``` method mane bojhai One To One relationship....


  Syntax:

  ```hasOne(Phone::class, 'foreign_key', 'local_key');```

  akhane hasOne() diye bojhacche ai ta One To One relationship, Phone::class  aita hocche amader model ar nam jei model ar sathe amai One To One relationship korbo. tar porer parameter ta hocche foreign_key, jodi amra laravel ar default convation ar sathe jete na chai mane jodi ami nije kono foreign_key define kori tahole shei khetre amader define kora foreign_key ar nam ta mane column ar nam ta amader second paramiter ar moddhe likhte hobe...bydefault laravel amader parant Model ar name theke define kore nei foreign_key...amader uchit foreign_key ke change na kora, laravel bydefault jeita ke nei oitakei rakha uchit..jar fole amader kom code likhte hobe and complecity barbe na amader code ar ....

  third paramiter hocche 'local_key', ai local_key ta amra tokhon eee likhbo amader one to one relation ar moddhe jokhon   amader table ar primary key ta id column na hoye jodi onno kono column hoy tahole...amader table ar primary key ta jodi id column na hoye onno kono column hoy tokhon amader oi column ar name ta local_key ar oi jaigai likhe dite hobe.....jodi amader table ar id column ta primary key hoy tahole r third paramiter ta pass kora lagbe na.... 

  hasOne() model ta amra parents Model ar moddhe likhbo

  **Defining The Inverse Of The One To One Relationship**
   
   jokhon amra kono model ar moddhe hasOne() method diye One To One relation korbo tokhon oita hobe husband ar sathe wife ar relationship and wife ar sahte husband ar relation korar jonno amader inverse mane biporit One To One Relationship korte hobe tar jonno amra jei model ar moddhe hasOne() method diye One To One Relationship korechi tar oposit model ar moddhe giye amader belongsTo() method diye inverse One To One relationship korte hobe...

   Syntax:

   ```belongsTo(User::class, 'foreign_key', 'owner_key')```

   akhane prothome amader model class ar nam ta likhte hobe tar por forreign_key ar column ar nam ta likhte hobe and tar porer paramiter  ta  amra pass korbo jodi amader parents Model ar primary key id column na hoye jodi onno kono column primary key hoy shei khtrre amader oi column ar nam ta ai third paramiter ar moddhe pass kore dite hobe ...

   belongsTo() method ta amra child Model ar moddhe use korbo..karon amader child model ta always parent model take belongs korbe tai...

   check routes/web.php

