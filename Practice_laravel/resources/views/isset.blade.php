<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    {{-- @isset($name) <!--akhane ami chack korchi amar $name variable a data ache ki na ... jodi true hoy tahole ar moddhe thaka lekha ta print korbe... ai $name variable ta ami amr route a set kore diyechi tai eeta true return korche jodi ami aikhane onno kono akta variable ar name dei jeitar data ami kothow set kori nai tahole  aita false return korbe and isset ar moddhe thaka kono kichu print korbe na....mane jodi true return kore tahole isset ar moddhe ja thakbe tai return korbe and jodi false return kore tahol isset ar moddhe jai thak na keno ooo print korbe na ------->
       data is set
    @endisset --}}

    <!--Another way to practice isset() directive ------->

        @if(@isset($name1)) <!--isset() check korbe amar $name1 name kono variable a data ache ki na jodi thake tahole true return korbe and ar modder lekha ta print korbe  --------->
          data is set
        @else <!--jodi $name1 variable ar kono data na thake tahole ooo false return kobe and else ar moddhe chole ashbe and ar moddhe thaka lekhata print korbe --------->
          data is not set

        @endif  

</body>
</html>