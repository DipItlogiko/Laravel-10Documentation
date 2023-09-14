<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    @switch($status)
        @case('Pending') {{--akhane chack korbe amar status ar value ta ki Pending ki na jodi Pending hoy tahole ai case ta kaj korbe---}}
           <p>your order is in pending</p> 
            @break
        @case('Approved')
        <p>your order is Approved</p> 

            @break

        @case('Rejected')
          <p>your order is Rejected</p>
          @break

        @default {{--akhane status ar value jodi ooporer 3 tar akta ooo na hoy and status ar value jodi oonnoo kichu hoy tahole @default kaj korbe---}}
          <p>Your order is cancelled</p>
            
    @endswitch

</body>
</html>