<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <h1>User Information</h1>
        <li>Id:{{ $user->id }}</li>
        <li>Name:{{ $user->name }}</li>
        <li>Gmail:{{ $user->email }}</li>
        <li>Password:{{ $user->password }}</li>
      

    </ul>
</body>
</html>