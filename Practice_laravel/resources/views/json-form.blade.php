<!DOCTYPE html>
<html>
<head>
    <title>JSON Request Form</title>
</head>
<body>
    <h1>JSON Request Form</h1>
    <form method="POST" action="{{ url('json-example') }}">
        @csrf
        <label for="json_data">JSON Data:</label><br>
        <textarea name="json_data" id="json_data" rows="5" cols="40">
            {"user": {"name": "John Doe"}}
        </textarea><br>
        <input type="submit" value="Submit JSON Request">
    </form>
</body>
</html>
