<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/post') }}" method="POST">
        @csrf
         
        <label for="text">Title</label>
        <input type="text" name="title">

        @error('title')
        <span style="colour:red">{{ $message }}</span>

        @enderror
        <br/> <br/>


        <label for="">Body</label>
        <input type="text" name="body">
        @error('body')
            <span>{{ $message }}</span>
        @enderror
        <br/> <br/>

        <button type="submit">Submit</button>
    </form>
</body>
</html>