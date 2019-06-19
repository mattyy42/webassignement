<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";
$conn = new mysqli($servername, $username, $password);
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name=$_POST['conttext'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$sql = "INSERT INTO contactus(contactname,contactphone, contactmessage)
VALUES ('$name','$phone','$message')";

if ($conn->query($sql) === TRUE) {
    print "I will get in touch with you";
    echo " Press go back";
} else {
    echo "Error: 
          " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
    <head>        
<link rel="stylesheet" type="text/css" href="style/style.css">
    </head>
<body class="background">
<section class="colun">
<form method="post" action="contact.html">
<input type="submit" name="submit" value="Goback"  class="readmore">
</form>>
</section>
</body>
</body>
</html>>
