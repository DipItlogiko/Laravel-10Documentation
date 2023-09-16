<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    {{-- <x-aleart> <!--amra component ke call korar pore ar opening and closing tag ar moddhe je additional content ta pass korchi ai content ta amra amader component ar moddhe $slot variable ar moddhe pabo mane $slot variable ar moddhe chole jabe ----->
        <span>i am dip</span>
    </x-aleart> --}}

    {{-- OR --}}

    <x-aleart>
       
        <x-slot:title> {{--akhane slot kono component ar nam na aleart hocche amader component r kono component ar  moddhe additional content pass korle shitake amra amader component ar blade file a $slot variable ar maddhome access korte pari kintu amra chaile slot ar  title define kote dite pari ai vabe <x-slot:title> aita ai vabe oo lekha jai<x-slot name="title"> jodi amar component ar blade file a diye ami $title ta use kori tahole ami dekhte pabo amader ai title ar moddhe ja ache ta and ai titel bade amra amader component ar moddhe ja likhbo mane jei additional content gulo pass korbo ta sob amra amader component ar blade file a $slot variable ar maddhome access korte parbo .....---}}
            server Error
        </x-slot>


        <strong>Whoops!</strong> Something went wrong! 

    </x-aleart>
          
</body>
</html>