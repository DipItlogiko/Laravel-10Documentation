<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @empty($name) <!--jodi amar $name variable ar moddhe kono data na thake mane amar name variable ta jodi empty hoy tahole true return korbe and ar moddhe thaka string ke print korbe.... r jodi variable ar moddhe data thake tahole kichu print korbe na------>
      the variable is empty!!!        
    @endempty --}}

    <!--Another way to practice empty() blade Directive---------------------------------->

    @if(empty($name)) <!--Akhane jodi amar $name  variable ta sotti empty hoy tahole true return korbe and if ar modder string ta print korbe ------>
       the variable is empty!!!
    @else <!--jodi amar $name variable ta empty na hoy jodi or moddhe kono value thake tahole false return korbe and else ar moddhe chole ashbe and else ar moddhe thaka string take print kore debe--->
      the variable is not empty!!!
    @endif
    

</body>
</html>