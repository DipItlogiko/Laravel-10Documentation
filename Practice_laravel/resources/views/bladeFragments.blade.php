<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> 

    <div>
        <h1>Welcome to ITLogiko</h1>
        <p>This is a paragraph</p>
        <p>This is another paragraph</p>

       @fragment('dialog') {{--fragment ar nam diyechi dialog aikhane ami je kono nam dite pari-----}}
            <div>
                <h1>hi,this part is being rendered from a fragment!</h1>
            </div>
            @fragment('nested-dialog') {{--jodi ami amar route ar moddhe fragment('nested-dialog') ai nam ta likhi tahole ami shudhu ai fragment ar moddhe ja ache tai dekhte pabo-----}}

            <div>
                <h1>this is nested fragment</h1>
            </div>
            
            @endfragment
        
      @endfragment

    </div>

</body>
</html>