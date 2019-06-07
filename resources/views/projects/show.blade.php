@extends('layout2')

@section('content')
   <h1>{{$project->title}}</h1>
   Description: {{$project->description}}
   <br><br>
   <a href="/projects/{{$project->id}}/edit">Edit project</a>

   <!-- display tasks related to this project -->
   <br><br>
   <div>
      @foreach($project->tasks as $task)
         <li>{{$task->description}}</li>
      @endforeach
   </div>
@endsection