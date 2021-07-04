<?php
$hostname="localhost";
$db_user="root";
$db_pass="";
$db_name="count";
echo("Work");
$connection=mysqli_connect($hostname, $db_user, $db_pass, $db_name);
if (mysqli_connect_errno()) {
    die("Error");
}
?>