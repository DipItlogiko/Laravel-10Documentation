<html>
    <head>
        <title>{{ $title ?? 'Todo_Manager' }}</title> <!--akhane ami bole diyechi je jodi amar ai component take call kore kew title pass kore tahole $title oi title ar value take pass korbe jodi kew title pass na kore amader ai component aaa tahole ami akta bydefault value set kore diyechi 'Todo_Manager'----------->
    </head>
    <body>
        <h1>Todos</h1>
        <hr/>
        {{ $slot }}
    </body>
</html>