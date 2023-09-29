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
    <p>Section:A</p>


    @can('isAdmin_Custom_Directory') <!--ami app/Providers/AuthServiceProvider ar boot option ar  moddhe ami isAdmin_Custom_Directory ai name je Gate Authorization define kore diyechi jei user ar jonno oi user chara amader oonno kono user ai part tuku dekhte parbe na ai view page ar ta chara onno sokol path dekhte parbe sokol authenticated user-------->
   
    <p><a href="#">Record Delete</a></p>
    <p><a href="#">Edit Record</a></p>


    @endcan

</body>
</html>