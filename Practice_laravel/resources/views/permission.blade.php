<!DOCTYPE html>
<html>
<head>
    <title>Dropdown Form</title>
</head>
<body>
    <h1>Select Options</h1>
    <form action="{{ url('postdata') }}" method="POST">
        @csrf
        <label for="dropdown1">Dropdown 1:</label>
        <select id="dropdown1" name="dropdown1">
            <option value="approved">approved</option>
            <option value="pending">pending</option>
            <option value="rejected">rejected</option>
        </select>
        <br>
        
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
