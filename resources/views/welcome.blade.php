@extends('app')

@section('content')
    <h2>Ini Bagian Content</h2>
    <ul>
        @foreach ($names as $name)
            <li>{{ $name }}</li>
        @endforeach
    </ul>
@endsection

@section('footer')
    <h2>Ini Bagian Footer</h2>
@endsection
