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

      <!-- CSRF protection -->
      @csrf
      
      <input type="text" name="title" placeholder="Project title here...">
      <br><br>
      <textarea name="description" placeholder="Description here..." cols="30" rows="10"></textarea>
      <br><br>
      <button type="submit">Create project</button>
   </form>
</body>
</html>