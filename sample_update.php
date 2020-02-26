<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
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

    
$scheme_name=$_POST['scheme_name'];
$id=$_POST['id'];

$sql = "UPDATE `schemes` SET `scheme_name`='".$scheme_name."' WHERE scheme_id=".$id;
if ($con->query($sql) === TRUE)
{
    // $response["code"] = 1;
    // $response["message"] = "successfully Deleted";
    echo "data Updated successfully";
    echo '   <a class="button secondary" href="sample_read.php">BACK</a>';
} else {
    // $response["code"] = 2;
    // $response["message"] = mysqli_error($con);
    echo  "error insite update query ". mysqli_error($con);
}   
//echo json_encode($response);
mysqli_close($con);


?>
</body>

</html>