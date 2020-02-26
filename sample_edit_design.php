<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample</title>
</head>

<body>

    <?php 
     $con = mysqli_connect("localhost","root","","dck");
     // Check connection
     if (mysqli_connect_errno())
       {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
       }
       date_default_timezone_set('Asia/Kolkata'); 
      
    $id=$_REQUEST['id'];
    $sql="select * from schemes where scheme_id=$id";
    $res=mysqli_query($con,$sql);

    $name='';
    while ($row = mysqli_fetch_assoc($res)) 
    {
          $name=$row['scheme_name'];
    }

 ?>

    <form action="sample_update.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>">
        <input type="text" name="scheme_name" id="scheme_name" placeholder="Enter Scheme " value="<?php echo $name?>">
        <input type="submit" value="submit" class="button success"></br>
        <a class="button secondary" href="sample_read.php">BACK</a>
    </form>
</body>

</html>