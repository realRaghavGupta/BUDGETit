<!DOCTYPE html>
<html lang="en">
<head>
    <title>BUDGETit</title>
    <?php include "includes/header.php" ?>


</head>
<body>

<!-- Nav Bar -->
<?php include "includes/navbar.php" ?>

<!--<div id="header"></div><br/>-->
<div class="container-fluid">
    <div class="card bg-dark text-white">
        <!--        <img class="card-img" style="-webkit-filter: blur(3px); filter: blur(3px);" src="./images/splitBg.jpg" alt="Card image cap">-->
        <div class="card-img-overlay">
            <div class="container-fluid" align="center" >
                <div class="card" style="max-width: 40%; color:#0E2658; opacity: 0.8; padding:10px">
                    <h4><b> Set Budget</b></h4>
                    <div class="card-body" style="max-width: 100%;"   align="left">
                        <form>
                            <div class="form-group">
                                <label for="Category">Category</label>

                                <select class="custom-select" id="category" required>

                                    <option value="entertainment">Entertainment</option>
                                    <option value="foodanddrink">Food and drink</option>
                                    <option value="home">Home</option>
                                    <option value="life">Life</option>
                                    <option value="transportation">Transportation</option>
                                    <option value="uncategorized">Uncategorized</option>
                                    <option value="utilities">Utilities</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Amount">Amount</label>
                                <input type="number" class="form-control" id="amount" placeholder="Amount" required>
                            </div>
                            <div class="form-group">
                                <label for="Month">Month</label>
                                <input type="month" class="form-control" id="month" placeholder="Month" required>
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


