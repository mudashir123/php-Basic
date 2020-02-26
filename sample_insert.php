<?php
$con = mysqli_connect("localhost","root","","dck");


// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  date_default_timezone_set('Asia/Kolkata'); 

    
$scheme_name=$_POST['scheme_name'];


$sql = "INSERT INTO schemes( `scheme_name`) VALUES ('".$scheme_name."')";

if ($con->query($sql) === TRUE)
{
    // $response["code"] = 1;
    // $response["message"] = "successfully Deleted";
    echo "data Added successfully";
    echo '   <a class="button secondary" href="sample_read.php">BACK</a>';
} else {
    // $response["code"] = 2;
    // $response["message"] = mysqli_error($con);
    echo  "error insite insert query ". mysqli_error($con);
}    
//echo json_encode($response);
mysqli_close($con);


?>