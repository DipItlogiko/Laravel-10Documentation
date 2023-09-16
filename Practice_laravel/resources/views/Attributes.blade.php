<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .myclass{
            color: blue;
            font-size: 50px;
        }
    </style>
</head>
<body>
    <x-attributes class="myclass" /> <!--jehetu ami akhane Component Attributes practice korchi tai amai ai argument ba attribute ke component class(app/view/component) ar moddhe likhbo na----->
    <x-attributes class="" /> <!--ai khane ami class="" call korechi shudhu ar moddhe kono class ke pass kori ni karon ami amar attributes class based component(resources/views/component) a set kore diyechi je jodi kew class ar value na dei tumi default vabe ai bootstrap ba tellwin class gulo set kore diba-------->
</body>
</html>