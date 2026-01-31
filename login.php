<?php
include 'db.php';
$user = $_POST['username'];
$pass = $_POST['password'];

$q = "SELECT * FROM admin WHERE username='$user' AND password='$pass'";
$res = mysqli_query($conn, $q);

if (mysqli_num_rows($res) > 0) {
  header("Location: dashboard.php");
} else {
  echo "Invalid Login";
}
?>
