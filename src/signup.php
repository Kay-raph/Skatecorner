<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "sktsignup";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// if (mysqli_query($conn, $sql)) {
//     echo "New Account created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// mysqli_close($conn);
if (isset($_POST['#pwd'])) {
$username=$_POST['username'];
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$password=md5($_POST['#cpwd']);
register($loca,$name,$email,$mobile,$password,$connection);
}
?>