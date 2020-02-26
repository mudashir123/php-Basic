<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Read</title>
</head>

<body>
    <a class="button success" href="sample_design.html">ADD</a>
    <?php 
  $con = mysqli_connect("localhost","root","","dck");


  // Check connection
  if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
      date_default_timezone_set('Asia/Kolkata'); 

    $sql="select * from schemes";
    $res=mysqli_query($con,$sql);



    echo '<table border="1">';
    while ($row = mysqli_fetch_assoc($res)) {
        echo'<tr>';
        echo '<td>'.$row['scheme_name'].'</td>';
        
        echo  '  <td><a class="button primary" href="sample_edit_design.php?id='.$row['scheme_id'].'">Edit</a></td>';
        echo  '  <td><a class="button danger" href="sample_delete.php?id='.$row['scheme_id'].'">Delete</a></td>';
        echo'</tr>';
    }
    echo '</table>';

    
?>
</body>

</html>