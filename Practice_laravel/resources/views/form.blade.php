<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('postdata') }}" method="POST">
        @csrf
        <label for="">name</label>
        <input type="text" name ="name">

        <label for="address">address</label>
        <input type="text" name="address">

        <label for="phon">Phon</label>
        <input type="number" name="number">

        <button type="submit" >Submit</button>
    </form>
</body>
</html>