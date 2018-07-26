<?php
session_start();
if(empty($_SESSION['username']))
{
    header('Location: index.php');
}
require ('addbudget.php');
require_once('Includes/connection.php');
require_once('Includes/splitExpenseOp.php');
if(isset($_POST['submit']))
{
  $uname=$_SESSION['username'];
  $conn = new DatabaseConnection;
  $op=new splitOperation;
  $dbcon = $conn->connect();
  $uid=$op->getUser_id($uname,$dbcon);

  $category = $_POST['category'];
  $month = $_POST['month'];
  $amount = $_POST['amount'];
  
  $obj = new AddBudget;
  $obj->newbudget($category,$month,$uid,$amount);

}
?>



<html xmlns:padding="http://www.w3.org/1999/xhtml">
<head>
    <!-- REFERENCES:
    BootStrap : https://getbootstrap.com/docs/4.1
    Image: https://goo.gl/images/iK8YWf
    javascript: https://www.w3schools.com/jsref/prop_email_multiple.asp
    Header: https://stackoverflow.com/questions/18712338/make-header-and-footer-files-to-be-included-in-multiple-html-pages
  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-4.1.1-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./bootstrap-4.1.1-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./addexpense.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.4/popper.js"></script>
    <script src="bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
    <title> Split Expense Page </title>

    <?php $monthDetails = array("1"=>"January","2"=>"February","3"=>"March",
                      "4"=>"April","5"=>"May","6"=>"June","7"=>"July",
                        "8"=>"August","9"=>"September","10"=>"October",
                        "11"=>"November","12"=>"December");
    ?>
</head>
<body>

<!-- Nav Bar -->
<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
    <a class="navbar-brand" href="index.php">
        <!-- Brand Logo created using Photoshop -->
        <img src="images/logo.png" class="logo" alt="brand">
    </a>
    <div class="toggle">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseContents" aria-controls="collapseContents" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>


    <div class="collapse navbar-collapse navbar-toggleable-xs " id="collapseContents">

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
            <!--            <li class="nav-item active">-->
            <!--                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>-->
            <!--            </li>-->
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li> <li class="nav-item">
                <a class="nav-link" href="viewProfile.php">View Profile</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="newaddexpense.php">Add Expense</a>
                    <a class="dropdown-item" href="setbudget.php">Set Budget Limit</a>
                    <a class="dropdown-item" href="splitExpense.php">Split Expense</a>
                    <a class="dropdown-item" href="accountDetails.php">Account Details</a>
                    <!--                    <div class="dropdown-divider"></div>-->
                    <!--                    <a class="dropdown-item" href="#services">Others</a>-->
                </div>
            </li>
        </ul>
        <div class="nav-item navbar px-2">
            <button class="btn btn-outline-cus" data-toggle="modal" data-target="#login-modal">Login</button>
        </div>
        <div class="nav-item navbar px-2">
            <button class="btn btn-outline-cus" onclick="window.location.href='signup.php'">SignUp</button>
        </div>
    </div>
</nav>


<!--<div id="header"></div><br/>-->
<div class="container-fluid">
    <div class="card bg-dark text-white">
        <!--        <img class="card-img" style="-webkit-filter: blur(3px); filter: blur(3px);" src="./images/splitBg.jpg" alt="Card image cap">-->
        <div class="card-img-overlay">
            <div class="container-fluid" align="center" >
                <div class="card" style="max-width: 40%; color:#0E2658; opacity: 0.8; padding:10px">
                    <h4><b> Set Budget</b></h4>
                    <div class="card-body" style="max-width: 100%;"  padding:10px; align="left">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
                            <div class="form-group">
                                <label for="Category">Category</label>
                                <select class="custom-select" id="inputGroupSelect01" name="category">;
                                  <?php
                                    // require_once('addbudget.php');
                                    // $con = new AddBudget;
                                    // $dbcon = $con->connection();
                                    $conn = new DatabaseConnection;
                                    $op=new splitOperation;
                                    $dbcon = $conn->connect();
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
                                <label for="Amount">Amount</label>
                                <input type="number" class="form-control" id="amount" name="amount" placeholder="Amount" required>
                            </div>
                            <div class="form-group">
                                <label for="Month">Month</label>
                                
                                <select class="custom-select" id="inputGroupSelect01" name="month" onchange="this.form.submit()">
                                    <?php
                                        foreach($monthDetails as $x => $xValue){

                                        echo '<option value="'.$x.'">'.$xValue.'</option>';
                                  } ?>
                                </select>
                            </div>
                            <!-- Button (Double) -->
                            <div class="form-group">
                                <div class="col-md-8">
                                    <button id="submit" name="submit" class="btn btn-primary" value="1">Set Budget</button>
                                    <a id="cancel" name="cancel" class="btn btn-default">Cancel</a>
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


