<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete </title>
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

    

$id=$_GET['id'];

$sql = "DELETE FROM  `schemes`  WHERE scheme_id=".$id;

if ($con->query($sql) === TRUE)
{
    // $response["code"] = 1;
    // $response["message"] = "successfully Deleted";
    echo "data deleted successfully";
    echo '   <a class="button secondary" href="sample_read.php">BACK</a>';
} else {
    // $response["code"] = 2;
    // $response["message"] = mysqli_error($con);
    echo  "error insite delete query ". mysqli_error($con);
}       
//echo json_encode($response);
mysqli_close($con);


?>
</body>

</html>