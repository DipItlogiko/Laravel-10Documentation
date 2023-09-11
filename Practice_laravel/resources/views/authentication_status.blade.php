<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    {{-- @unless (Auth::check()) <!--unless() directive akta condition nei () ar moddhe jodi oi condition ta false hoy taholei shudhu unless directive ar moddhe jeita thakbe oita print korbe jodi condition true hoy tahole unless directive ar moddhe ja thakbe ta print korbe na.... jehetu amar akhane Auth::chack korbe ami authenticate achi ki na and check korar pore dekhbe ami authenticate nei tai ooo false return korbe and unless directive ar moddhe ja ache tai print korbe ------>
      You are not signed in.
    @endunless --}}

    <!---------Another example of unless directive-------->

    @php

       $num1 = 5;
       $num2 = 10;

    @endphp

    @unless ($num1 == $num2)<!------aikhane condition ta false return korbe tai ar moddhe thaka lekha ta print korbe----->
       10 is not equal to 5
    @endunless
</body>
</html>