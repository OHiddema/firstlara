@extends('layout2')

@section('content')
   <h1>Edit project</h1>


   <form method="POST" action="/projects/{{$project->id}}">
      @method('PATCH')
      @csrf

      <input type="text" name="title" value="{{$project->title}}">
      <br><br>
      <textarea name="description" cols="30" rows="10">{{$project->description}}</textarea>
      <br><br>
      <button type="submit">Update project</button>
   </form>

   <br>
   <form method="POST" action="/projects/{{$project->id}}">
      @method('DELETE')
      @csrf

      <button type="submit">Delete project</button>
   </form>
@endsection