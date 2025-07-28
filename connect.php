<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
}
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "meridian";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{ 
  // Submit these to a database
  // Sql query to be executed 
  $sql = "INSERT INTO `subscriptions` (`S.No`, `email`) VALUES (NULL, '$email');";
  $result = mysqli_query($conn, $sql);

  if($result){
    echo 'Your form has been sucessfully submitted';
  }
  else{
      echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
  }
}
?>