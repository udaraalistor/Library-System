<?php
$method = $_SERVER["REQUEST_METHOD"];
$connection = mysqli_connect("127.0.0.1", "root", "ijse", "libary", "3306");

$bid = $_REQUEST["bookid"];
$mid = $_REQUEST["memberid"];
$borrowdate = date("Y-m-d");
$returndate = date("Y-m-d" , strtotime($borrowdate . '+ 366 days'));

if (isset($_REQUEST["option"])) {
    $responsive = $connection->query("insert into borrow_details(bid,nic,borrow_date,return_date) values('$bid','$mid','$borrowdate','$returndate')");
    echo "$responsive";
} else {
}

?>