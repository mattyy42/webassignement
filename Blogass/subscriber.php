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
$subscriber=$_POST['email'];
$sql = "INSERT INTO subscribers(subscriberemial)
VALUES ('$subscriber')";

if ($conn->query($sql) === TRUE) {
    print "Subscribed successfully";
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
<form method="post" action="index.html">
<input type="submit" name="submit" value="Goback"  class="readmore">
</form>>
</section>
</body>
</body>
</html>>
