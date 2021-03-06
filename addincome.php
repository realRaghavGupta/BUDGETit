<?php
session_start();
if (empty($_SESSION['username'])) {
    header('Location: index.php');
}
//$sss = $_SESSION['username'];
//echo $sss;
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>BUDGETit</title>
    <?php include "includes/header.php" ?>


</head>
<body>

<!-- Nav Bar -->
<?php include "includes/navbar.php" ?>
<div class="container-fluid">
    <div class="card bg-dark text-white">
        <div class="card-img-overlay">
            <div class="container-fluid">
                <div class="card" style="max-width: 40%; color:#0E2658; opacity: 0.8; padding:10px" id="containercenter">
                    <h4><b> Add Income</b></h4>
                    <div class="card-body" style="max-width: 100%;">

                        <form data-toggle="validator" action="addincome.php" method="post">

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Category</label>
                                </div>
                                <!--                                <select class="custom-select" id="inputGroupSelect01">-->
                                <!--                                    <option selected>select a category</option>-->
                                <select class="custom-select" id="inputGroupSelect01" name="category">
                                    <?php
                                    require('./includes/database.php');
                                    $stmt = $conn->prepare("select * from source_table");
                                    $stmt->execute();
                                    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    echo '<option selected>select a category</option>';
                                    foreach ($rows as $row) {
                                        echo '<option value="' . $row['source_id'] . '">' . $row['name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Amount</label>
                                <div class="col-xs-9">
                                    <input type="number" class="form-control" name="amount" id="amount"
                                           placeholder="Enter Amount">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col">
                                        <button type="button" class="btn btn-primary"
                                                onclick="window.location.href='./index.php'"
                                                style="background-color:#0E2658;"> Cancel
                                        </button>
                                    </div>
                                    <div class="col">
                                        <input name="button" type="submit" id="signup" class="btn btn-primary"
                                               style="background-color:#0E2658;"
                                               onclick="return myFunction()" value="Add"/>
                                        <!--                                        <button type="submit" class="btn btn-primary" onclick="return myFunction()" style="background-color:#0E2658;"> Add </button>-->
                                    </div>
                                </div>
                            </div>
                        </form>

                     <!--code added by Raghav Gupta B00781125-->
                        <?php


                        if (isset($_POST['button'])) {
//                        echo '<script type="text/javascript"> alert("signup button clicked")</script>';

                            $sid = $_POST['category'];
                            $amount = $_POST['amount'];


                            $date = date("Y-m-d");

                            $incomeid = NULL;
                            $uname = $_SESSION['username'];
                            $useridd = NULL;
                            echo $uname;

                            require_once('./includes/connection.php');
                            require './includes/addExpenseOp.php';
                            $con = new DatabaseConnection();
                            $dbcon = $con->connect();

                            $db = new addExpenseOp();
                            $userid = $db->getUser_id($_SESSION['username'], $dbcon);


                            $query1 = $conn->prepare("INSERT INTO income_table (income_id,user_id,source_id,date,amount)
    VALUES (:incomeid,:userid,:sourceid,:date,:amount)");


                            $query1->bindParam(':incomeid', $incomeid);
                            $query1->bindParam(':userid', $userid);
                            $query1->bindParam(':sourceid', $sid);
                            $query1->bindParam(':date', $date);
                            $query1->bindParam(':amount', $amount);

                            $query1->execute();
                        }
                        ?>
                        <!-- -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>