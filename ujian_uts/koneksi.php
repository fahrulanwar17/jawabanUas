<?php
$host = 'localhost';
$user = 'root';
$password = 'chapzz33';
$db_name = 'ujian_uts';


$conn = mysqli_connect($host, $user, $password, $db_name); if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL:" . mysqli_connect_error();
}
?>
