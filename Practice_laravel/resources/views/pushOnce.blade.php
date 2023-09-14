@extends('layouts.MasterLayout')

@section('title')
    pushOnce    
@endsection

@section('contant')
    <h1>this is from pushOnce.blade.php</h1>
@endsection

@pushOnce('scripts')
    <script>
        alert('This is from pushOnce.blade.php');
    </script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/18.2.0/umd/react.production.min.js" integrity="sha512-8Q6Y9XnTbOE+JNvjBQwJ2H8S+UV4uA6hiRykhdtIyDYZ2TprdNmWOUaKdGzOhyr4dCyk287OejbPvwl7lrfqrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endPushOnce