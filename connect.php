<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    $service_id = $_POST['service_id'];
    $master_id = $_POST['master_id'];

    // Перевіряємо чи клієнт вже існує
    $check_sql = "SELECT client_id FROM Client WHERE email='$email'";
    $result = $conn->query($check_sql);

    if ($result->num_rows > 0) {

        // Якщо клієнт вже є
        $row = $result->fetch_assoc();
        $customer_id = $row['client_id'];

    } else {

        // Якщо клієнта немає — створюємо нового
        $sql = "INSERT INTO Client 
        (first_name, last_name, phone_number, email)
        VALUES 
        ('$first_name', '$last_name', '$phone_number', '$email')";

        if ($conn->query($sql) === TRUE) {

            $customer_id = $conn->insert_id;

        } else {

            die("Помилка: " . $conn->error);

        }
    }

    // Створення запису
    $appointment_sql = "INSERT INTO Appointment 
(customer_id, master_id, service_id, appointment_date, appointment_time, status)
VALUES 
('$customer_id', '$master_id', '$service_id', '$appointment_date', '$appointment_time', 'new')";

    if ($conn->query($appointment_sql) === TRUE) {

        header("Location: index.php?success=1");
        exit();

    } else {

        echo "Помилка запису: " . $conn->error;

    }
}

$conn->close();

?>