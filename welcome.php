<?php 
     session_start();

     if ($_SESSION['id'] =="") {
        header("location: signin.php");
     } else {


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcom page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">welcome, <?php echo $_SESSION['fname']; ?></h1>
        <hr>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum, a quibusdam quidem aperiam itaque adipisci nobis quae reprehenderit incidunt dolor quis aspernatur dolorem voluptates doloribus reiciendis. Adipisci saepe earum repudiandae magnam fugiat dolore hic quam mollitia porro explicabo rem cumque iste esse molestias optio itaque error unde, quas maiores at tenetur quasi harum qui. Dolor cupiditate laboriosam quos ut facere vitae recusandae dolorum veniam fugit, autem voluptate, repellat unde omnis suscipit. Illo dolore placeat sed saepe voluptates! Tempore facere ea mollitia delectus reiciendis eum similique accusantium, earum minus at quod iusto aut quaerat voluptatum ducimus ut molestias impedit sequi eaque?
        </p>
        <hr>
        <a href="logout.php" class="btn btn-danger">logout</a>
   </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

<?php 

     }
?>