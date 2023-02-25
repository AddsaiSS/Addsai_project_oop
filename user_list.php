
<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=register_oop", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OOP</title>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <br>
    <div class="container">
     <div>  <h3>ຕະຕາລາງຂໍ້ມູນຜູ້ໃຊ້ງານ ໃນແບບ Code OOP</h3> <div align="right"><a href="welcome.php" class="btn btn-primary" >Go to Home page</a></div></div> <br>
    <table id="myTable" class="table table-striped">
      <thead>
           <th>ID</th>
           <th>Fullname</th>
           <th>Username</th>
           <th>Useremail</th>
      </thead>
      <tbody>
      
         <?php 
             
         $stmt = $conn->query("SELECT * FROM tblusers");
         $stmt->execute();

         $users = $stmt->fetchAll();
         foreach ($users as $user) {
     ?>

        <tr>
            <td><?php echo $user['id'] ?></td>
             <td><?php echo $user['fullname'] ?></td>
             <td><?php echo $user ['username']?></td>
             <td><?php echo $user ['useremail']?></td>
        </tr>

     <?php
         }
         
         ?> 
          </tbody>  
     </table>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
   } );
</script>
    </body>
    </html>