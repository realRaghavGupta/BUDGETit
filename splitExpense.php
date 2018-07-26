<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" xmlns:padding="http://www.w3.org/1999/xhtml">
<head>
    <title>BUDGETit</title>
    <?php include "includes/header.php" ?>


</head>
<body>

<!-- Nav Bar -->
<?php include "includes/navbar.php" ?>
<?php

require  './Includes/splitExpenseOp.php';
$dbop = new splitOperation();
if (isset($_POST['Add'])) {

	$addSplit = $dbop->insertSplitDetails($_POST['category'],$_POST['amount'],$_POST['inputEmail'],$_SESSION['username']);
	if($addSplit)
	{
				echo "<br>";
				echo 'Expense added successfully';
	}
}
?>

<!--<div id="header"></div><br/>-->
<div class="container-fluid">
    <div class="card bg-dark text-white">
        <!--        <img class="card-img" style="-webkit-filter: blur(3px); filter: blur(3px);" src="./images/splitBg.jpg" alt="Card image cap">-->
        <div class="card-img-overlay">
            <div class="container-fluid" align="center" >
                <div class="card" style="max-width: 40%; color:#0E2658; opacity: 0.8; padding:10px">
                    <h4><b> Split Expense</b></h4>
                    <div class="card-body" style="max-width: 100%;"  padding:10px; align="left">
                        <form data-toggle="validator" role="form" action="splitExpense.php" method="post">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Category</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="category">;
                                  <?php
                                    require_once('./Includes/connection.php');
                                    $con = new DatabaseConnection();
                                    $dbcon = $con->connect();
                                    $stmt = $dbcon->prepare("select * from category_table");
                                    $stmt->execute();
                                    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                      echo '<option selected>select a category</option>';
                                    foreach($rows as $row){

                                        echo '<option value="'.$row['category_id'].'">'.$row['name'].'</option>';
                                  } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3" for="Amount">Amount</label>
                                <div class="col-xs-9">
                                    <input type="number" class="form-control" name="amount" id="amount" placeholder="Enter Amount">
                                </div>
                                <label class="control-label col-xs-3" for="inputEmail">Email IDs</label>
                                <div class="col-xs-9">
                                    <input type="email" class="form-control"  name="inputEmail" id="inputEmail" placeholder="Email IDs">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col">
                                        <button type="button" class="btn btn-primary" onclick="window.location.href='./index.html'" style="background-color:#0E2658;"> Cancel </button>
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary" name="Add" onclick="return myFunction()" style="background-color:#0E2658;"> Add </button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function myFunction() {
        document.getElementById("inputEmail").multiple = true;
        var email =  document.getElementById("inputEmail").value;
        var amount = document.getElementById("amount").value;
        if(email.length == 0)
        {
            alert('Please enter Email ID');
            return false;
        }
        if(amount.length == 0)
        {
            alert('Amount Can not be empty');
            return false;
        }
        return true;
        document.getElementById("demo").innerHTML = "The email field now accept multiple values.";
    }
</script>
<script>
    $("#header").load("./header.html");
</script>
</body>
</html>
