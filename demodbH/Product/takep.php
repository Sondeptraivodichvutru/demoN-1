<?php

include("../getConnect.php");

$sql = "SELECT * FROM tblproduct";
$result = pg_query($conn, $sql);
