<?php 
    include("connection.php");
?>


<?php

if(isset($_POST['add'])){
    $amount = $_POST['amount'];
    $category = $_POST['category'];
    $method =  $_POST['method'];
    $date = $_POST['date'];

$stmt = $link->prepare("INSERT INTO transactions (transactionAmount, transactionDate, idCategory, idPayment,exist) 
                        VALUES (?,?,?,?,'1')");
$stmt->bind_param("ssss", $amount, $date, $category,$method);
$stmt->execute();
header('Location: table.php');
}


?>