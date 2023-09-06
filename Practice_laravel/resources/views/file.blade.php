<form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="photo">
    <input type="submit" value="Upload">
</form>
