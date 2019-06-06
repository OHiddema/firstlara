<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   <h1>Create a new project</h1>
   <form method="POST" action="/projects">
      @csrf
      
      <input type="text" name="title" placeholder="Project title here..." required value="{{old('title')}}">
      <br><br>
      <textarea name="description" placeholder="Description here..." cols="30" rows="10" required>{{old('description')}}</textarea>
      <br><br>
      <button type="submit">Create project</button>

      <br><br>
      @if ($errors->any())
         <div style="border: 1px solid black; background-color: red">
            <ul>
               @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
               @endforeach
            </ul>
         </div>
      @endif
   </form>

   <br>
</body>
</html>