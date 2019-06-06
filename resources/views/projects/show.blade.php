@extends('layout2')

@section('content')
   <h1>{{$project->title}}</h1>
   Description: {{$project->description}}
   <br><br>
   <a href="/projects/{{$project->id}}/edit">Edit project</a>
@endsection