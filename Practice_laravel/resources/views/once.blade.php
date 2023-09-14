@extends('layouts.MasterLayout')

@section('contant')
    <h1>My Laravel Application</h1>

    @once {{--@once ডাইরেক্টিভ ta আপনাকে টেমপ্লেটের একটি অংশ ডিফাইন করতে দেয়}} --}}
        @push('scripts') {{--amader layouts.MasterLayout.blade.php te giye @stack('scripts') likhte hobe tahole MasterLayout.blade.php ai push kora javascprit ta ke receive korbe ta chara korbe na----}}
            <script>
                // Your custom JavaScript...
                alert("Hello from custom JavaScript!");
            </script>
        @endpush
    @endonce
@endsection
