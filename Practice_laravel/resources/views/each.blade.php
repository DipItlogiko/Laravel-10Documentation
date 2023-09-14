<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!--akhane prothom paramiter ta hocche amar view file ar nam jemon amar view file ta ache dip folder ar moddhhe each.blade.php name porer paramitar ta hocche amra array and tar pore paramiter ta hocche akta variable jar moddhe amar array theke akta akta kore value or moddhe jabe...jodi amar $jobs array te kono value ba data na thake tahole forth paramiter a je view file ar nam ache tar moddhe chole jabe  ------>
    @each('dip.each', $jobs, 'job','dip.empty') 


 
</body>
</html>