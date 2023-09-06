<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="{{ url('postdata') }}">
    @csrf
    <label for="birthday">Birthday:</label>
    <input type="date" id="birthday" name="birthday" >
    <input type="text" id="elapsed" name="elapsed" placeholder="13:45" required>
    <button type="submit">Submit</button>
</form>


</body>
</html>