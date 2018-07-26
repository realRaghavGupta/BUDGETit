<!DOCTYPE html>
<html lang="en" xmlns:padding="http://www.w3.org/1999/xhtml">
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
            <div class="container-fluid" align="center" >
                <div class="card" style="max-width: 40%; color:#0E2658; opacity: 0.8; padding:10px">
                    <h4><b> Add Income</b></h4>
                    <div class="card-body" style="max-width: 100%;"  padding:10px; align="left">
                        <?php

                        // define variables and set to empty values
                        $nameErr = $emailErr = $genderErr = $websiteErr = "";
                        $name = $email = $gender = $comment = $website = "";

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if (empty($_POST["name"])) {
                                $nameErr = "Name is required";
                            } else {
                                $name = test_input($_POST["name"]);
                                // check if name only contains letters and whitespace
                                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                                    $nameErr = "Only letters and white space allowed";
                                }
                            }

                            if (empty($_POST["email"])) {
                                $emailErr = "Email is required";
                            } else {
                                $email = test_input($_POST["email"]);
                                // check if e-mail address is well-formed
                                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    $emailErr = "Invalid email format";
                                }
                            }

                            if (empty($_POST["website"])) {
                                $website = "";
                            } else {
                                $website = test_input($_POST["website"]);
                                // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
                                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                                    $websiteErr = "Invalid URL";
                                }
                            }

                            if (empty($_POST["comment"])) {
                                $comment = "";
                            } else {
                                $comment = test_input($_POST["comment"]);
                            }

                            if (empty($_POST["gender"])) {
                                $genderErr = "Gender is required";
                            } else {
                                $gender = test_input($_POST["gender"]);
                            }
                        }

                        function test_input($data) {
                            $data = trim($data);
                            $data = stripslashes($data);
                            $data = htmlspecialchars($data);
                            return $data;
                        }





                        ?>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            Name: <input type="text" name="name" value="<?php echo $name;?>">
                            <span class="error">* <?php echo $nameErr;?></span>
                            <br><br>
                            E-mail: <input type="text" name="email" value="<?php echo $email;?>">
                            <span class="error">* <?php echo $emailErr;?></span>
                            <br><br>
                            Website: <input type="text" name="website" value="<?php echo $website;?>">
                            <span class="error"><?php echo $websiteErr;?></span>
                            <br><br>
                            Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
                            <br><br>
                            Gender:
                            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
                            <span class="error">* <?php echo $genderErr;?></span>
                            <br><br>
                            <input type="submit" name="submit" value="Submit">
                        </form>




                        <form data-toggle="validator" role="form" >

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Category</label>
                                </div>
<!--                                <select class="custom-select" id="inputGroupSelect01">-->
<!--                                    <option selected>select a category</option>-->
                                    <select class="custom-select" id="inputGroupSelect01" name="category">;
                                        <?php
                                        require_once('./includes/database.php');
                                        $stmt = $conn->prepare("select * from source_table");
                                        $stmt->execute();
                                        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                        echo '<option selected>select a category</option>';
                                        foreach($rows as $row){
                                        echo '<option value="'.$row['source_id'].'">'.$row['name'].'</option>';
                                        } ?>
                                    </select>



<!--                                </select>-->
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3" for="Amount">Amount</label>
                                <div class="col-xs-9">
                                    <input type="number" class="form-control" name="amount" id="amount" placeholder="Enter Amount">
                                </div>



                                <!--                                <label class="control-label col-xs-3" for="inputEmail">Email IDs</label>-->
                                <!--                                <div class="col-xs-9">-->
                                <!--                                    <input type="email" class="form-control"  name="inputEmail" id="inputEmail" placeholder="Email IDs">-->
                                <!--                                </div>-->
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col">
                                        <button type="button" class="btn btn-primary" onclick="window.location.href='./index.html'" style="background-color:#0E2658;"> Cancel </button>
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary" onclick="return myFunction()" style="background-color:#0E2658;"> Add </button>
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

</body>
</html>