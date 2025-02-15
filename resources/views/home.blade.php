<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
</head>
    <body class="bg-secondary-subtle">
        
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand m-3" href="#">
            
            Tired always
            </a>
        </div>
    </nav>
        

    <div class="container mt-3 p-4 ">

        <h1 class="text-light" class ="mb-5"> Home </h1> 

        <div class="mt-4 mb-3">
            <a href="{{route('create')}}">    
            <button type="button" class="btn bg-success-subtle text-success"> 

            Add human 

            </button>
        </a>
    </div>
        

        <table class="table table-striped table-hover mt-3 text-center rounded-5">
  <thead class ="table-dark ">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Location</th>
      <th scope="col">Email</th>
      <th scope="col">Actions</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    
    

    @foreach ($list as $identity)

    <tr> 

    <th scope="row"> {{$identity['id']}} </th> 
    <td> {{$identity['name']}} </td>
    <td> {{$identity['age']}} </td> 
    <td> {{$identity['location']}} </td>
    <td> {{$identity['email']}} </td>
    <td> 
        <a href="{{route('edit',$identity->id) }}"> 
                <button type="button" class="btn bg-warning-subtle text-warning"> 
                    update
            </button> 
            </a>
         </td>
    <td> 
        <form action="{{ route('destroy', $identity->id) }}" method="POST">
        @csrf
                    @method('DELETE')
            <button type="submit" class="btn bg-danger-subtle text-danger"> 
                delete
           </button> 
        
        

        </form>
        </td>
    </tr>

    @endforeach
   
  </tbody>
</table>





    </div>
    
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

<footer>
    <div class="text-center text-light">
    Copyright (c) 2025 Sofhia Doronila. All rights reserved.
    </div>


</footer>
</html>