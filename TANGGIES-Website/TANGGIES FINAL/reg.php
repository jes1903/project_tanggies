<?php



require "connect.php";


$register = $conn->prepare("INSERT INTO reservation(name,phone,email,date,time,people)VALUES (?,?,?,?,?,?)");

$register->bindParam(1,$_POST["name"]);
$register->bindParam(2,$_POST["phone"]);
$register->bindParam(3,$_POST["email"]);
$register->bindParam(4,$_POST["date"]);
$register->bindParam(5,$_POST["time"]);
$register->bindParam(6,$_POST["people"]);
$register->execute();

echo "Booking Accepted Sucessfully"

?>