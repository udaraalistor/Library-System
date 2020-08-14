<?php
$method = $_SERVER["REQUEST_METHOD"];
$connection = mysqli_connect("127.0.0.1", "root", "ijse", "libary", "3306");

$nic = $_REQUEST["nic"];
$name = $_REQUEST["name"];
$address = $_REQUEST["address"];
$contact = $_REQUEST["contact"];

if (isset($_REQUEST["option"])) {
    $responsive = $connection->query("insert into register values('$nic','$name','$address','$contact')");
    echo "$responsive";
} else {
}
?>
