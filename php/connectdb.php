<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "qlbs";

$con = mysqli_connect($host, $username, $passwd, $dbname);

if (mysqli_connect_error()) {
    echo 'Loi'. mysqli_connect_error();
}
?>