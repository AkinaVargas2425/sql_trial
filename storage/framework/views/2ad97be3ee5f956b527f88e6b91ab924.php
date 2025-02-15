<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
    <body>

        
        <div class="container my-2 p-4">
        

        <h1> Create </h1>

            

        <form action="<?php echo e(route('store')); ?>" method="POST">

<?php echo csrf_field(); ?>

    <div class="row">

        <div class="col">
            <input type="text" class="form-control" placeholder="name" name="name" aria-label="Full name">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="age" name="age" aria-label="age">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="location" name="location" aria-label="location">
        </div>

        <div class="col">
            <input type="email" class="form-control" placeholder="email" name="email" aria-label="email">
        </div>

        

    </div>

    <div class="row">
    

    <button type="submit" class="btn btn-dark mt-3 w-50"> Create </button>

</form>

        

</form>

        
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html><?php /**PATH /Users/sofhiadoronila/sql_trial/resources/views/create.blade.php ENDPATH**/ ?>