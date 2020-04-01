<?php

/* $host = "ec2-52-207-93-32.compute-1.amazonaws.com";
  $username = "cfpqcmieuguxzc";
  $password = "be1ff296c1e77f1c98793a8f224816674566f363be7ef2ba394d98aa8e9bb64a";
  $database = "d425mt4bhmok93";
  $port = "5432";
  $ssl="sslmode=require";
  $conn = mysqli_connect($host, $username, $port, $password, $database,$ssl);
  mysqli_query($conn, $database);
 */
$conn_string = "host=ec2-52-207-93-32.compute-1.amazonaws.com port=5432 dbname=d425mt4bhmok93 user=cfpqcmieuguxzc password=be1ff296c1e77f1c98793a8f224816674566f363be7ef2ba394d98aa8e9bb64a";
$conn = pg_connect($conn_string);

if (!$conn) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo'hic';
} else {
    echo'kết nối đc này';
}
?>