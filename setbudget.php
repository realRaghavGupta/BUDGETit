<!DOCTYPE html>
<html lang="en">
<head>

    <title>BUDGETit - Set Budget</title>
    <?php include "head.php" ;?>
</head>
<body>
<?php include "navbar.php";?>
<div class="container">
    <h3>Set Budget</h3>
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
<?php include "footer.php";?>
</body>
</html>