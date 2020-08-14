<?php
$method = $_SERVER["REQUEST_METHOD"];
$connection = mysqli_connect("127.0.0.1", "root", "ijse", "libary", "3306");


$name = $_REQUEST["bookname"];
$categoryid = $_REQUEST["categoryid"];
$qty = $_REQUEST["qty"];
$author = $_REQUEST["author"];
$publisher = $_REQUEST["publisher"];

if (isset($_REQUEST["option"])) {
    $responsive = $connection->query("insert into book(name,qty,cateogryid,aid,pid) values('$name','$qty','$categoryid','$author','$publisher')");
    echo "$responsive";
} else {
}





?>