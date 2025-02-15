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
            <a href="<?php echo e(route('create')); ?>">    
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
    
    

    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $identity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr> 

    <th scope="row"> <?php echo e($identity['id']); ?> </th> 
    <td> <?php echo e($identity['name']); ?> </td>
    <td> <?php echo e($identity['age']); ?> </td> 
    <td> <?php echo e($identity['location']); ?> </td>
    <td> <?php echo e($identity['email']); ?> </td>
    <td> 
        <a href="<?php echo e(route('edit',$identity->id)); ?>"> 
                <button type="button" class="btn bg-warning-subtle text-warning"> 
                    update
            </button> 
            </a>
         </td>
    <td> 
        <form action="<?php echo e(route('destroy', $identity->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn bg-danger-subtle text-danger"> 
                delete
           </button> 
        
        

        </form>
        </td>
    </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
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
</html><?php /**PATH /Users/sofhiadoronila/sql_trial/resources/views/home.blade.php ENDPATH**/ ?>