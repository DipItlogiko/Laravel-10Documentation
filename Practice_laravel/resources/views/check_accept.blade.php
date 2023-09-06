<html>
<head>
    <title>Check Accept Header</title>
</head>
<body>
    <h1>Check Accept Header</h1>
    <form action="/check-accept" method="GET">
        <label>
            <input type="radio" name="accept" value="text/html" checked> text/html
        </label>
        <br>
        <label>
            <input type="radio" name="accept" value="application/json"> application/json
        </label>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
