<?php
	include("connection.php");
?>

<?php
     $deleteID=$_GET['myID'];
     if(isset($_POST['delete'])){
        $deleteQuery = "UPDATE transactions SET exist='0' WHERE transactions.idTransaction='$deleteID'";
        $resultDelete = $link->query($deleteQuery);
        header('Location: table.php');
     }
   
?>