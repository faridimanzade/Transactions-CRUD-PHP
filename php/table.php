<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../css/table.css">

    <script type="text/javascript" src="../js/icons.js"></script>


 <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.jqueryui.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.jqueryui.min.js"></script> -->

    <title>Transactions Table</title>
</head>

<body>
    
    <?php 
        $query="SELECT transactions.idTransaction, transactions.transactionAmount, transactions.transactionDate, categories.category, payments.paymentMethod, accounting.accountingType FROM transactions, payments, categories, accounting WHERE transactions.idCategory=categories.idCategory AND transactions.idPayment=payments.idPayment AND categories.idAccounting=accounting.idAccounting AND transactions.exist='1' ORDER BY transactions.idTransaction DESC";
        $result = $link->query($query);
    ?>

<div>
  <table >
  <h1>Current Transactions</h1>
  <a href="../home.html"><button  class="btn btn-outline-light mb-1"><i class="fas fa-arrow-left"></i> Home</button></a>

    <?php 
      echo "<thead>";
        echo "<tr class='bg-light text-info'  >";
          echo "<th>#ID</th>";
          echo "<th>Amount</th>";
          echo "<th>Date</th>";
          echo "<th>Category</th>";
          echo "<th>Payment Method</th>";
          echo "<th>Accounting Type</th>";
        echo "</tr>";
      echo "</thead";

      echo "<tbody>";
      
        while ($var = $result->fetch_assoc()) {
          extract($var);
            echo "<tr>";
              echo "<td>".$idTransaction."</td>";
              echo "<td>".$transactionAmount."</td>";
              echo "<td>".$transactionDate."</td>";
              echo "<td>".$category."</td>";
              echo "<td>".$paymentMethod."</td>";
              echo "<td>".$accountingType."</td>";
            echo "</tr>";
        
        }
      echo "</tbody";    
    ?>
  </table>
</div>

<script type="text/javascript" src="../js/bootstrap.min.js"></script>

<!-- 
<script>
  $(document).ready(function(){
      $('#myTable').DataTable();  
  });
</script> -->

</body>
</html>