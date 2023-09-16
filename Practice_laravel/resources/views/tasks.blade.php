<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <x-test>
        <x-slot:title>
            Custom Title
        </x-slot:title> <br>
     
        @foreach ($tasks as $task)
            {{ $task }} <br>
        @endforeach
    </x-test>

</body>
</html>