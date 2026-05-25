<?php

$conn = new mysqli("localhost", "root", "", "salon");

if ($conn->connect_error) {
    die("Помилка підключення");
}

$customer_id = $_POST['customer_id'];
$appointment_id = $_POST['appointment_id'];
$rating = $_POST['rating'];
$comment = $_POST['comment'];

$sql = "INSERT INTO Review
(customer_id, appointment_id, rating, comment)

VALUES
('$customer_id', '$appointment_id', '$rating', '$comment')";

if($conn->query($sql) === TRUE){

    header("Location: reviews.php");

} else {

    echo "Помилка: " . $conn->error;
}

?>