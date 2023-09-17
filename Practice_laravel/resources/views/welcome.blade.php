<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Home Page</h1>
    <a href="{{ URL::signedRoute('secret')}}">Secret</a> <!-- amra ai khane URL fachads theke signedRoute method ta use korechi URL::signedRoute(ar moddhe amader name route ar nam dite hobe signedRoute() method ta te name route ar nam na dile kaj korbe na.....aita URL::signedRoute('secret') amader 'secret' name route ar jonno akta signature generate korbe  )----------->
    <a href="{{ URL::temporarySignedRoute('secretPage',now()->addSeconds(5)) }}">SecretPage</a> <!--5 seconds pore amader secretPage route ar moddhe je page ta thakbe ta expair hoye jabe Go to READEME.md-------->
</body>
</html> 