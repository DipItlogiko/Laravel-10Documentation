<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($users as $user) <!--amra akhane foreach loop use korechi karon amra jani kono array ar value print korar jonno arma foreach ba forelse loop use kori.....akhane amader $users valiable ta amader controller theke ashche and jei variable ar moddhe akta array ache users der ------->
       <h1>User Id</h1>
        {{ $user->id}}

       <h2>User Name</h1>
        {{ $user->name }}

        <h2>User Email</h2>
        {{$user->email}}


            
    @endforeach
</body>
</html>