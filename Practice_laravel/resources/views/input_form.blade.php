 
<!DOCTYPE html>
<html>
<head>
    <title>Input Example</title>
</head>
<body>
    <form method="POST" action="{{ route('input.process') }}">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
