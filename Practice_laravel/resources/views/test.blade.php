<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="
    <?php
    use App\Http\Controllers\HomeController;
    //echo action([HomeController::class, 'sayHello'],['name' => 'Jim']);
    echo action([HomeController::class, 'sayHello']);
    ?> ">
    sayHello
    </a>
</body>
</html>