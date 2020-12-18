<?php 
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../css/addForm.css">
    <title>New Transaction</title>
</head>

<body>

    <form method="POST" action="addDatabase.php">

        <p id="heading">Transaction Form</p>

        <input class="text" type="number" name="amount" placeholder="Transaction Amount" min="0" required="required">
        <select name='category' required>
                <?php
                    $queryC = "SELECT * FROM `categories` ORDER BY `idCategory` ASC";
                    $resultC = $link->query($queryC);

                    while ($var = $resultC->fetch_assoc()) {
                        extract($var);
                        echo "<option value='$idCategory'>$category</option>";
                    }    
                ?>
        </select><br>
        <select name='method' required>
            <?php
                $queryP = "SELECT * FROM `payments` ORDER BY `idPayment` ASC";
                $resultP = $link->query($queryP);

                while ($num = $resultP->fetch_assoc()) {
                    extract($num);
                    echo "<option value='$idPayment'>$paymentMethod</option>";
                }    
            ?>
        </select>
        <input type="date" class="text" name="date" required="required">
        <button class="login" name="add">Add</button>
        <p class="sign">Want to see transactions? <a href="table.php"> Click</a></p>

    </form>

</body>

</html>