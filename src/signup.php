<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$DOB = $_POST['DOB'];
$email = $_POST['email'];
$userName = $_POST['userName'];
$psw = $_POST['psw'];
$gender = $_POST['gender'];
$number = $_POST['number'];

// database connection
  $ conn = new mysqli('localhost','root', '', 'skaters' );
  if($conn-> connect_error){
      die('Connection Failed :' . $conn-> connect_error);
  }
  else
  {
      $stmt =$conn->prepare("insert into signup(fisrtName, lastName, DOB, email, userName, psw, gender, number)
      values(?,?,?,?,?,?,?,?)");
      $stmt->bind_param("sssssssi", $firstName, $lastName, $DOB, $email, $userName, $psw, $gender, $number);
      $stmt->execute();
      echo "Registration done successfully"
      $stmt->close();
      $conn->close();
  }
?>