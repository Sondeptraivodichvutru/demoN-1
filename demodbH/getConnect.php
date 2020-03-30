<?php

$host = "ec2-52-207-93-32.compute-1.amazonaws.com";
$username = "cfpqcmieuguxzc";
$password = "be1ff296c1e77f1c98793a8f224816674566f363be7ef2ba394d98aa8e9bb64a";
$database = "d425mt4bhmok93";
$port = "5432";
$conn = mysqli_connect($host, $username, $port, $password, $database);
mysqli_query($conn, $database);
if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo'hic';
} else {
    echo'đăng nhặp đc này';
}
?>