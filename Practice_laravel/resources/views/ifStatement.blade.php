<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     
    @if (count($array) === 1) <!--akhane ami $array variable take dhorechi ---->
        I have one record!
    @elseif (count($array) > 1)
        I have multiple records!
    @else
        I don't have any records!
    @endif

</body>
</html>