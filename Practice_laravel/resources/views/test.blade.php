<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
</head>
<body>

    @foreach($users as $user)

      <h3>User Id: {{ $user->id }}</h3> 
      <h3> Usder Name: {{ $user->name }}</h3> 
      <h3>User Email: {{ $user->email }}</h3> 
      <h3>User Password {{ $user->password }}</h3> 

    @endforeach  

    {{ $users->links() }} <!-------aikhane ami pagination ar view ta add korechi---------->
</body>
</html>