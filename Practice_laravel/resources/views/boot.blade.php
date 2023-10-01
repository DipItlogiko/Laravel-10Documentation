<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @foreach ($users as $user)

      {{ $user->id }}

      {{ $user->name }}

      {{ $user->email }}

      {{ $user->password }}
        
    @endforeach

    {{ $users->links() }} <!---akhane ami pagination view take call korechi------------>

<!--Paginator / LengthAwarePaginator Instance Methods (Check READEME.md)----------->
   total users: {{ $users->total() }} <br/><!--akhane amar database aaa mot koi jon user ar data ache oitar total number ta return korbe------->
   currentPage: {{ $users->currentPage() }} <!--akhane dekhabe amara akhon pagination ar kon page a ache mane currentpage ar number ta return korbe---->

</body>
</html>

<!--amra ai file ar opore bootstrap 5 ar cdn ta add kore diyechi ai cdn ta add na korle amader pagination view ta thik thak vabe kaj korbe na ta chara ami amader app/Providers/AppServiceProvider ar boot method ar moddhe  Paginator::useBootstrapFive();
    Paginator::useBootstrapFour(); ai 2ta add kore diyechi check the pp/Providers/AppServiceProvider ar boot method--------->
