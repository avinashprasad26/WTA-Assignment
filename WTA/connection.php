<?php
$conn = mysqli_connect('localhost','root','','wta');
if (!$conn) {
  die('Connection Failed : '.mysqli_connect_error);
}

if(isset($_POST['submit']))
{

  $firstname=$_POST['firstname'];
  $lastname = $_POST['lastname'];
  $dates = $_POST['dates'];
  $review = $_POST['review'];
  $query = "insert into reviewform values('$firstname','$lastname','$dates','$review')";
  if(mysqli_query($conn,$query))
  {
    echo "<script>alert('Review Submitted Successfully...');</script>";
    header('Location: index.php');
  }
  else{
    echo "Error: " .$sql."".mysqli_error($conn);
  }

}
mysqli_close($conn);
?>