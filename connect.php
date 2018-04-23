<?php
include 'header.php';
$host='sql305.epizy.com';
$user='epiz_21973883';
$pass='Password126';
$database='epiz_21973883_dbstbi';

$conn=mysqli_connect($host,$user,$pass);
mysqli_select_db($conn, $database);
include 'footer.php';
?>