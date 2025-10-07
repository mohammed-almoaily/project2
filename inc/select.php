<?php
$conn = mysqli_connect('localhost', 'root', '', 'project1DB');

$sql = 'SELECT * FROM users ORDER BY RAND() LIMIT 1';
$result = mysqli_query($conn, $sql);
$winner_user = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>