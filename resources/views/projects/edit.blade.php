@extends('layout2')

@section('content')
   <h1>Edit project</h1>


   <form>
      <input type="text" name="title" value="{{$project->title}}">
      <br><br>
      <textarea name="description" cols="30" rows="10">{{$project->description}}</textarea>
      <br><br>
      <button type="submit">Update project</button>
   </form>
@endsection