<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    {{-- @env('local') <!--akhane env()  ar moddhe bole diyechi 'local' ooo amar .env file a giye dekhbe APP_ENV=local ache ki na jodi thake tahole true return korbe and ar moddhe thaka element gulo print korbe.....jodi APP_ENV= ai khane local na hoye production hoy tahole ai ta kaj korbe na mane ooo false return korbe and ar moddhe ja thakbe ta print korbe na------->
        <h1>your current environment is local</h1>
    @endenv --}}

<!--Another Way to practice env() directive------>

    {{-- @if(@env('local')) <!--jodi amar env local hoy sottie tahole oo true return korbe and if ar moddhe ja ache ta print kore debe----> 
       <h1>your current environment is local</h1>
    @else  <!--jodi amr env ba environment ta local na hoy tahole oo false return korbe and else a chole ashbe and else ar moddhe ja thakbe tai print kore debe ---->
       <h1>your current environment is production</h1>
    @endif  --}}

<!--OR---->

    {{-- @env(['local', 'production']) <!--Akhane env() chack korbe amar .env file theke APP_ENV= te ki ache jodi local ba production ai 2 tar moddhe je kono akta pailei ooo true return korbe and ar moddhe thaka element print korbe...  jodi ai 2ta bade oono kichu thake APP_ENV= ar moddhe tahole aita false return korbe and ar moddhe thaka kichu print korbe na----->
        <h1>your current environment is local or production</h1>
    @endenv --}}


<!--OR---->
   
    @if(@env('local', 'production')) <!--Akhane env() chack korbe amar .env file theke APP_ENV= te ki ache jodi local ba production ai 2 tar moddhe je kono akta pailei ooo true return korbe and ar moddhe thaka element print korbe...  jodi ai 2ta bade oono kichu thake APP_ENV= ar moddhe tahole aita false return korbe and ar moddhe thaka kichu print korbe na----->
      <h1>your current environment is local or production</h1>
    @else <!--jodi oporer 'local','production' ai 2ta .env ar moddhe APP_ENV= aikhane na thake tahole ooo false return korbe and else a chole ashbe and else ar moddhe ja thakbe tai print korbe----->
       <h1>your current environment is not local or production</h1>
    @endif
    

    
</body>
</html>