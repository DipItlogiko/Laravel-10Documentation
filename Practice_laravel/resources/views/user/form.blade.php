<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('name') }}" method="POST">
        @csrf
        <label for="name">Name</label><br>
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>
</body>
</html>