@extends('layout')

@section('title', 'Welcome!')

@section('content')
  <h1>My {{ $foo }} page!</h1>
    <ul>
      @foreach($students as $student)
        <li>{{ $student }}</li>
      @endforeach
    </ul>
@endsection
