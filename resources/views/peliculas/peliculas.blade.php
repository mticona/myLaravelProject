
@extends('layouts.default')

@section('content')

    @foreach ($peliculas as $key => $value)
      <li> {{ $value }} </li>
    @endforeach

@endsection
