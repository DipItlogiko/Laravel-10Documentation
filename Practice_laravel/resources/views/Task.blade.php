<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" action="{{ url('post-data') }}">
        @csrf
        <label for="archived">Archive Task:</label>
        <input type="checkbox" id="archived" name="archived" value="1">
        <button type="submit">Submit</button>
    
    </form>

</body>
</html>

