<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO Review (customer_id, appointment_id, rating, comment, name)
VALUES (1, NULL, '$rating', '$comment', '$name')";

    $conn->query($sql);
}

$result = $conn->query("SELECT * FROM Review ORDER BY review_id DESC");

?>

<!DOCTYPE html>
<html lang="uk">

<head>

<meta charset="UTF-8">
<title>Відгуки</title>

<style>

body{
    font-family: Arial;
    background: #f8f4f8;
    padding: 50px;
}

.container{
    max-width: 900px;
    margin: auto;
}

form{
    background: white;
    padding: 30px;
    border-radius: 20px;
    margin-bottom: 40px;
}

input, textarea, select{

    width: 100%;
    padding: 15px;
    margin-bottom: 15px;

    border: 1px solid #ddd;
    border-radius: 10px;

    box-sizing: border-box;
}

button{

    background: #7d4c7d;
    color: white;

    padding: 15px 25px;

    border: none;
    border-radius: 10px;

    cursor: pointer;
}

.review{

    background: white;

    padding: 25px;

    border-radius: 20px;

    margin-bottom: 20px;
}

.review h3{

    color: #f4b400;
}

.back-btn{

    display:inline-block;
    background:#d8b4e2;

    color:white;
    text-decoration:none;

    padding:14px 24px;

    border-radius:10px;

    margin-top:10px;
}

.back-btn:hover{

    background:#b57acb;
}

</style>

</head>

<body>

<div class="container">

<h1>Відгуки Клієнтів</h1>

<form method="POST">

<input type="text"
name="name"
placeholder="Ваше ім'я"
required>

<select name="rating" required>

<option value="">Оберіть рейтинг</option>

<option value="5">⭐️⭐️⭐️⭐️⭐️</option>
<option value="4">⭐️⭐️⭐️⭐️</option>
<option value="3">⭐️⭐️⭐️</option>
<option value="2">⭐️⭐️</option>
<option value="1">⭐️</option>

</select>

<textarea
name="comment"
placeholder="Ваш відгук"
required></textarea>

<button type="submit">
Надіслати відгук
</button>

<br><br>

<a href="index.php#reviews" class="back-btn">
Повернутися на сайт
</a>

</form>

<?php

while($row = $result->fetch_assoc()) {

echo "

<div class='review'>

<h3>" . str_repeat('⭐️', $row['rating']) . "</h3>

<p>" . $row['comment'] . "</p>

<b>— " . $row['name'] . "</b>

</div>

";

}

?>

</div>

</body>

</html>