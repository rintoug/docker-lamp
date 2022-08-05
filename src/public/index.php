<?php
$servername = "db";
$username = "root";
$password = "toor";

try {
  $conn = new PDO("mysql:host=$servername;dbname=demo_docker", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}



// Email sending test function
   
$to_email = 'mail.rinto@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: noreply@company.com';
mail($to_email,$subject,$message,$headers);

echo "<br>". "mail sent";
?>

