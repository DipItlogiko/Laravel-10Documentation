<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!--For this practice i have changed into the .env file APP_ENV=local to APP_ENV=production and then stop server and run (php artisan cache:clear) then run the server again and you will see the /demo route output in your browser---->
    <!--APP_ENV=local jodi thake tahole aita kaj korbe  na------->
    @production
        <h1>Production Directive</h1>
    @endproduction

</body>
</html>