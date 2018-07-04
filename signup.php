<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <title> Signup Page </title>
</head>
<body>
<?php include "head.php";?>
<div id="header"></div><br/>
<div class="container-fluid">
<!--    <div class="card bg-dark text-white">-->
<!--        <img class="card-img" style="-webkit-filter: blur(3px); filter: blur(3px);" src="./images/splitBg.jpg" alt="Card image cap">-->
<!--        <div class="card-img-overlay">-->
            <div class="container-fluid" align="center" >
                <div class="card" style="max-width: 40%; color:#0E2658; opacity: 0.8; padding:10px">
                    <h4><b> Signup</b></h4>
                    <div class="card-body" style="max-width: 100%;"   align="left">
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




                </div>
            </div>
<!--        </div>-->
<!--    </div>-->
</div>
    <?php include "footer.php";?>
</body>
</html>
