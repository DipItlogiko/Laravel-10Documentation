<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @php
        $isActive = false;
        $hasError = true;
    @endphp

   <span @class([
        'p-4',
        'font-bold' => $isActive,
        'text-gray-500' => ! $isActive,
        'bg-red' => $hasError,
    ])>This is a test span</span>

   <span class="p-4 text-gray-500 bg-red">This is another test span</span>


</body>
</html>