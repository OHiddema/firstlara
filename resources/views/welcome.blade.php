@extends('layout')

@section('title')
   My weblog
@endsection

@section('content')

    <h1>Welcom to {{$title}}</h1>

    @foreach($items as $item)
        <li>{{$item}}</li>
    @endforeach

@endsection


