
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BUDGETit - SignUp</title>

</head>

<body>
<?php include "head.php";?>
<div class="container">
    <h3>SIGNUP HERE</h3>
    <form>
        <div class="form-group">
            <label for="FirstName">First Name</label>
            <input type="text" class="form-control" id="firstname" placeholder="First Name" required/>
        </div>
        <div class="form-group">
            <label for="LastName">Last Name</label>
            <input type="text" class="form-control" id="lastname" placeholder="Last Name" required pattern="^[a-zA-Z]*|[a-zA-Z]*[ |-][a-zA-Z]*"/>
        </div>
        <div class="form-group">
            <label for="Email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" required/>
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" required/>
        </div>
        <div class="form-group">
            <label for="ConfirmPassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" required/>
        </div>
        <button type="submit" class="btn btn-primary">SIGNUP</button>
         <button type="button" class="btn btn-primary" onClick="location.href = 'index.php';">BACK TO HOME</button>
    </form>
<?php include "footer.php";?>
</div>

</body>
</html>