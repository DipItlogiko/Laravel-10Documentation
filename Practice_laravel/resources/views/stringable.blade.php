<form method="POST" action="{{ url('process-name') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <button type="submit">Submit</button>
</form>
