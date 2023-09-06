<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Save your student data </h1>

<form action="{{ url('postdata') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="enter your name here" value="{{ old('name') }}"> <br> 
    <input type="email" name="email"  placeholder="enter your email hare" value="{{ old('email') }}"> <br>
    <input type="text" name="phon" placeholder="enter your phon" value="{{ old('phon') }}"> <br>
    <button type="submit">Submit</button>
</form>
</body>
</html>