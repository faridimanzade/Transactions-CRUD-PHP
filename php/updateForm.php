<?php 
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/updateForm.css">
    <title>Update Transaction</title>

</head>

<body>

    <?php 

        $deleteID  = $_GET['myID'];

        $queryD = "SELECT * FROM transactions, categories, payments WHERE transactions.idCategory=categories.idCategory AND transactions.idPayment=payments.idPayment AND idTransaction='$deleteID'";
        $resultD = $link->query($queryD);

        while ($myVar = $resultD->fetch_assoc()) {
            extract($myVar);
        }

        $myCategory = $category;
        $myMethod = $paymentMethod; 
    
    ?>

    <form class="form" method="POST" action="updateDatabase.php?myID=<?php echo "$deleteID"?>">

        <p id="heading">Update Transaction</p>

        <?php 
            echo "<input class='text' type='number' name='amount' placeholder='Transaction Amount' min='0' required  value='$transactionAmount'>";
        ?>


        <select name='category' required="required">
                <?php
                    $queryC = "SELECT * FROM `categories` ORDER BY `idCategory` ASC";
                    $resultC = $link->query($queryC);

                    while ($var = $resultC->fetch_assoc()) {
                        extract($var);
                        if ($category == $myCategory) {
                           echo "<option selected value='$idCategory'>$category</option>";
                        }
                        else{
                           echo "<option value='$idCategory'>$category</option>";
                        }
                    }    
                ?>
        </select><br>
        <select name='method' required="required" >
            <?php
                $queryP = "SELECT * FROM `payments` ORDER BY `idPayment` ASC";
                $resultP = $link->query($queryP);

                while ($num = $resultP->fetch_assoc()) {
                    extract($num);
                    if ($paymentMethod == $myMethod) {
                       echo "<option selected value='$idPayment'>$paymentMethod</option>";

                    }
                    else{
                        echo "<option value='$idPayment'>$paymentMethod</option>";
                    }
                }    
            ?>
        </select>


        <?php 
            echo "<input type='date' class='text' name='date' required='required' value='$transactionDate'>";
        ?>

        
        <button class="login" name="delete">Update</button>

        <p class="sign">Want to see transactions? <a href="table.php"> Click</a></p>
    </form>


</body>
</html>