<?php

$conn = mysqli_connect('localhost', 'root', '', 'project1DB');

if(!$conn){
    echo 'Error: ' . mysqli_connect_error();
}

?>
