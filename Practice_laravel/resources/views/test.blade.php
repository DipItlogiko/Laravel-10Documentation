<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('postdata') }}" method="post">
        @csrf
        <input type="number" name="vote">
        <button type="submit">Submit</button>
    </form>
</body>
</html>