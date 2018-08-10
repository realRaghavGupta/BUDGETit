<?php
session_start();
if (empty($_SESSION['username'])) {
    header('Location: index.php');
}
//if(empty($_SESSION['username']))
//{
//    header('Location: index.php');
//}
require('includes/addbudget.php');
require_once('includes/connection.php');
require_once('includes/splitExpenseOp.php');
if (isset($_POST['submit'])) {
    $uname = $_SESSION['username'];
    $conn = new DatabaseConnection();
    $op = new splitOperation();
    $dbcon = $conn->connect();
    $uid = $op->getUser_id($uname, $dbcon);

    $category = $_POST['category'];
    $month = $_POST['month'];
    $amount = $_POST['amount'];
    echo $uid;
    $obj = new AddBudget;
    $obj->newbudget($category, $month, $uid, $amount);

}
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- REFERENCES:
    BootStrap : https://getbootstrap.com/docs/4.1
    Image: https://goo.gl/images/iK8YWf
    javascript: https://www.w3schools.com/jsref/prop_email_multiple.asp
    Header: https://stackoverflow.com/questions/18712338/make-header-and-footer-files-to-be-included-in-multiple-html-pages
  -->
    <title>BUDGETit</title>
    <?php include "includes/header.php" ?>

    <?php $monthDetails = array("1" => "January", "2" => "February", "3" => "March",
        "4" => "April", "5" => "May", "6" => "June", "7" => "July",
        "8" => "August", "9" => "September", "10" => "October",
        "11" => "November", "12" => "December");
    ?>
</head>
<body>

<!-- Nav Bar -->

<?php include "includes/navbar.php" ?>

<!--<div id="header"></div><br/>-->
<div class="container-fluid">
    <div class="card bg-dark text-white">
        <!--        <img class="card-img" style="-webkit-filter: blur(3px); filter: blur(3px);" src="./images/splitBg.jpg" alt="Card image cap">-->
        <div class="card-img-overlay">
            <div class="container-fluid">
                <div class="card" style="max-width: 40%; color:#0E2658; opacity: 0.8; padding:10px" id="containercenter">
                    <h4><b> Set Budget</b></h4>
                    <div class="card-body" style="max-width: 100%;">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="custom-select" name="category">
                                    <?php

                                    $conn = new DatabaseConnection();
                                    $op = new splitOperation();
                                    $dbcon = $conn->connect();
                                    $stmt = $dbcon->prepare("select * from category_table");
                                    $stmt->execute();
                                    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    echo '<option selected>select a category</option>';
                                    foreach ($rows as $row) {

                                        echo '<option value="' . $row['category_id'] . '">' . $row['name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="number" class="form-control" id="amount" name="amount" placeholder="Amount"
                                       required>
                            </div>
                            <div class="form-group">
                                <label>Month</label>

                                <select class="custom-select" id="inputGroupSelect01" name="month"
                                        onchange="this.form.submit()">
                                    <?php
                                    foreach ($monthDetails as $x => $xValue) {

                                        echo '<option value="' . $x . '">' . $xValue . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <!-- Button (Double) -->
                            <div class="form-group">
                                <div class="col-md-8">
                                    <button id="submit" name="submit" button : class="btn btn-primary" style="background-color:#0E2658;" value="1">Set Budget
                                    </button>
                                    <a id="cancel" button : class="btn btn-primary" style="background-color:#0E2658; color: white;">Cancel</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function myFunction() {
        document.getElementById("inputEmail").multiple = true;
        var email = document.getElementById("inputEmail").value;
        var amount = document.getElementById("amount").value;
        if (email.length == 0) {
            alert('Please enter Email ID');
            return false;
        }
        if (amount.length == 0) {
            alert('Amount Can not be empty');
            return false;
        }
        return true;
        document.getElementById("demo").innerHTML = "The email field now accept multiple values.";
    }
</script>
</body>
</html>


