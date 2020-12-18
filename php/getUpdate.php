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

    <div class="nese">
        <form method="POST" id="zero">
            <label id="labelId">ENTER ID TO UPDATE:</label>
            <input class="inputId" type="number" name="myID">
            <button id="buttonId" name="delete_button">Submit ID</button>
        </form>
        <?php 
            if(isset($_POST['delete_button']))
            {
                $id=$_POST["myID"];
                $sql="SELECT * FROM transactions WHERE idTransaction=$id AND exist>'0'";
                $sql_result=$link->query($sql);
                if($sql_result->num_rows>0)
                {
                     header("Location: updateForm.php?myID=$id");                    
                }
                else
                {
                    echo "No such data";
                }
               
            }
        ?>
    </div>
</body>
</html>