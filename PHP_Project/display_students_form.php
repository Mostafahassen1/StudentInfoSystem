<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>DisplayStudent</title>
</head>
<body>
  
<div class="container  mt-5">
         <table class="table">
           <thead>
              <tr>
                 <th scope="col">#</th>
                 <th scope="col">First Name</th>
                 <th scope="col">Last Name</th>
                 <th scope="col">Email</th>
                 <th scope="col">birthday</th>
               </tr>
            </thead>

     <tbody>
        <?php
        
        include "conn.php" ;
        

    $result = mysqli_query( $link , "SELECT * FROM info_student ");
        
        while ($row = mysqli_fetch_array($result)) {

            ?>
        <tr>
            <td> <?php echo $row['id'] ; ?> </td>
            <td> <?php echo $row['firstName'] ; ?> </td>
            <td> <?php echo $row['lastName'] ; ?> </td>
            <td> <?php echo $row['email'] ; ?> </td>
            <td> <?php echo $row['birthday'] ; ?> </td>
        </tr>    
       <?php
         } 
       ?>

     </tbody>   
        </table> 
    </div>

  
</body>
</html>