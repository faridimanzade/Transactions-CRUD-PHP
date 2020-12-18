<?php
	include("connection.php");
?>

<?php
     $deleteID=$_GET['myID'];
  
    $amount = $_POST['amount'];
    $category = $_POST['category'];
    $method =  $_POST['method'];
    $date = $_POST['date'];

     if(isset($_POST['delete'])){
        $deleteQuery = "UPDATE transactions SET transactionAmount='$amount', transactionDate='$date', idCategory='$category', idPayment='$method' WHERE transactions.idTransaction='$deleteID'";
        $resultDelete = $link->query($deleteQuery);
        header('Location: table.php');
     }
   
?>