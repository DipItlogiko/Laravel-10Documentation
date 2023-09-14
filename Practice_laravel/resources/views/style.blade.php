<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!--akhane ami style take conditionally handel korchi @style blade directive ar maddhome----->
    @php 
      $isActive = false; 
    @endphp
 
   <span @style([
        'background-color: red'=>$isActive,
        'font-weight: bold' => $isActive,
    ])>hello</span>
 
 <!--akhane ami static vabe akta style likhchi ja sob somoy akoi thakbe ----->
    <span style="background-color: red; font-weight: bold;">hello</span>

</body>
</html>