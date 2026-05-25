<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "connect.php";

$sql = "SELECT * FROM Review";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="uk">

<head>

<meta charset="UTF-8">
<title>Відгуки</title>

<style>

body{
    font-family:Arial;
    background:#faf7fb;
    padding:40px;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
}

th{
    background:#b57acb;
    color:white;
    padding:15px;
}

td{
    padding:12px;
    border-bottom:1px solid #eee;
}

.delete-btn{
    background:red;
    color:white;
    padding:8px 16px;
    border-radius:6px;
    text-decoration:none;
    display:inline-block;
    font-size:14px;
}

.back-btn{

    display:inline-block;
    background:#7d4c7d;
    color:white;

    padding:12px 20px;

    border-radius:10px;

    text-decoration:none;

    margin-bottom:20px;
}

.back-btn:hover{

    background:#5e345e;
}

</style>

</head>

<body>

<h1>Керування Відгуками</h1>

<table>

<tr>

<th>Ім’я</th>
<th>Рейтинг</th>
<th>Відгук</th>
<th>Дія</th>

</tr>

<?php

while($row = mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['rating']; ?> ⭐</td>

<td><?php echo $row['comment']; ?></td>

<td>

<a class="delete-btn"

href="delete_review.php?id=<?php echo $row['review_id']; ?>">

Видалити

</a>

</td>

</tr>

<?php } ?>

</table>

<a href="admin.php" class="back-btn">
Повернутися в адмін панель
</a>

</body>

</html>