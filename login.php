<?php
session_start();

$conn= mysqli_connect('localhost','root','','gharlijiye') or die("not connect database");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $e_mail=$_POST['email'];
  $c_pass=$_POST['cpass'];

  $sql = "SELECT * FROM reg WHERE email = '$e_mail'and cpass='$c_pass'";

  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    if ($row['cpass'] == $c_pass && $row['email']==$e_mail) {
      
      header("Location: http://localhost/gharlijiye-main/cong1.php");
    } else {
      echo "envLIS";
    }
  } else {
    echo "Invalid username";
  }
}

mysqli_close($conn);
?>