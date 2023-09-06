<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
   @if(session('name'))
   <h3 style="color: green"> {{session('name')}} User has been added</h3>
   @endif


   


    <form action="{{ url('postdata') }}" method="post">
        @csrf
        <input type="text" name="name" value="{{ old('name') }}">
        <input type="email" name="email" value="{{ old('email') }}">
        <button type="submit">Submit</button>
    </form>



   
</body>
</html>