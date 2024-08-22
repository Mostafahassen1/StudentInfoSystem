<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Update_Student</title>
</head>
<body>
<div class="container mt-5">

<form  method ="POST" action="update.php">

         <label for="firstName" >ID </label>
         <input type="int" class="form-control"  name="id">

        <label for="firstName" >first name</label>
        <input type="text" class="form-control"  name="firstName">
    
  
        <label for="lastName" >last name</label>
        <input type="text" class="form-control"  name="lastName">
    
    
        <label for="email" >email</label>
        <input type="email" class="form-control" name="email">
   
   
    
        <label for="birthday" >birthday</label>
        <input type="date" class="form-control"  name="birthday">
  

    <div class="Button mt-2  ">
    <button type="submit" class="btn btn-primary btn-lg" >SUBMIT</button>
    </div> 

</form>
</div>

</body>
</html>