<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>name:dip</p>
    <p>Age:22</p>
    <p>Class:honours</p>
    <p>Roll:21</p>
    <p>Section:D</p>


    @can('Admin','App\Models\User') <!--akhane ami can blade directive ar moddhe bole diyechi ami jei policy ta create korechi oi policy ar nam and kon Model theke amader ai policy authorization ta hobe oi Model ar nam bole diyechi(mane ami Admin policy ar moddhe je user ar information gulo diyechi oi information gulo  oooo amader User Model mane users table theke find korbe).....amra amader je policy ar nam akhane debo oi policy ar moddhe je user ke authorized kora hoyeche oi user ai can ar moddhe thaka code ta shudhu dekhte parbe oonnoo user ra ai can ar moddhe tahaka code ta dekhte parbe na...can mane bojhai para mane can ar moddhe je policy ar nam thakbe and oi policy ar moddhe je user ta authorized thakbe oi user ta can mane dekhte parbe jodi ami akhane cannot ar moddhe kono policy ar nam diye dei and oi policy ar moddhe jei user  ta  authorized ache oi user ta amader cannot ar moddhe je code gulo thakbe ta dekhte parbe na------->
   
    <p>name:admin</p>
    <p>Age:29</p>
    <p>Class:honours</p>
    <p>Roll:10</p>
    <p>Section:A</p>


    @endcan

</body>
</html>