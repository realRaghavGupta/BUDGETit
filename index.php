<!DOCTYPE html>
<html lang="en">
<head>
    <title>BUDGETit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/style1.css">
    <!--   Bootstrap css file throws error on Validation -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/formValidate.js"></script>

</head>
<body>

<!-- Nav Bar -->
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="#">
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
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#services">Add Expense</a>
                    <a class="dropdown-item" href="#services">Set Budget Limit</a>
                    <a class="dropdown-item" href="#services">Split Expense</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#services">Others</a>
                </div>
            </li>
        </ul>
        <div class="nav-item navbar px-2">
            <button class="btn btn-outline-success" data-toggle="modal" data-target="#login-modal">Login</button>
        </div>
    </div>
</nav>


<!-- Modal -->

<div id="login-modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <div class="panel-heading col-lg-12">
                    <div class="row">
                        <div class="col-lg-11">
                            <a href="#" class="active" id="login_tab">Login</a>
                        </div>
<!--                        <div class="col-lg-5">-->
<!--                            <a href="#" id="register_tab">Register</a>-->
<!--                        </div>-->
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="login_form" action="accountdetails.html" method="post"  style="display: block;">
                            <div class="form-group">
                                <input type="email" name="username" id="username"  class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="login-password"  class="form-control" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="login-submit" id="login_submit"  class="form-control btn btn-login" value="Log In">
                            </div>
                            <a href="" tabindex="5" class="forgot-password">Forgot Password?</a>
                        </form>

<!--                        <form id="register_form" action="index.html" method="post" style="display: none;">-->
<!--                            <div class="form-group">-->
<!--                                <input type="text" name="firstname" id="firstname"  class="form-control" placeholder="First Name" pattern="([A-Za-z]){2,}" title="Use alphabets only" required>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <input type="text" name="lastname" id="lastname"  class="form-control" placeholder="Last Name" pattern="([A-Za-z]){2,}" title="Use alphabets only" required>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <input type="email" name="email" id="email"  class="form-control" placeholder="Email Address" required>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <input type="password" name="password" id="password"  class="form-control" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <input type="password" name="confirm-password" id="confirm-password"  class="form-control" placeholder="Confirm Password" required>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <input type="submit" name="register-submit" id="register_submit" class="form-control btn btn-register" value="Register Now" onclick="return check()">-->
<!--                            </div>-->
<!--                        </form>-->
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>


<!-- Carousel -->

<div id="carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="images/carousel1.jpg" alt="slide1">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/carousel2.jpg" alt="slide2">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/carousel3.jpg" alt="slide3">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#carousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>


<!-- Application content-About Us -->
<div class="aboutus" id="about">
    <div class="row">
        <div class=" col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h4><b>About Us</b></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla at libero at finibus. Mauris dui felis, sagittis in dapibus eget, porta quis elit. Donec sodales placerat porta. Vivamus laoreet magna eget facilisis condimentum. Donec porttitor elit nibh, et mollis nunc egestas at. Vestibulum tristique vehicula ligula vel mollis. Quisque ante lectus, tincidunt maximus scelerisque in, molestie nec eros. Vestibulum finibus, lacus at gravida condimentum, tellus mauris imperdiet orci.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla at libero at finibus. Mauris dui felis, sagittis in dapibus eget, porta quis elit. Donec sodales placerat porta. Vivamus laoreet magna eget facilisis condimentum. Donec porttitor elit nibh, et mollis nunc egestas at. Vestibulum tristique vehicula ligula vel mollis.</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="card-deck">
                <div style="width:100%;height:100%;padding-bottom:65%;position:relative; border-radius: 5px;">
                    <iframe src="https://giphy.com/embed/3oKIPEqDGUULpEU0aQ" width="300" height="250" style="position:absolute"  class="giphy-embed" allowFullScreen></iframe></div><p><a href="https://giphy.com/gifs/cartoon-character-2d-3oKIPEqDGUULpEU0aQ"></a></p>
            </div>
        </div>
    </div>
</div>


<!-- Application content-Services -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="services">
    <h4><b>Our Services</b></h4>
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="images/service1.jpg" alt="Add Expense">
            <div class="card-body">
                <h5 class="card-title">ADD EXPENSES</h5>
                <p class="card-text">The Add Expense feature in our application helps the user to record their expenses and manage them categorically by assigning a category to each new expense that is added.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">BUDGETit-Your Budget Buddy!</small>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="images/service2.jpg" alt="Set Budget Limit">
            <div class="card-body">
                <h5 class="card-title">SET BUDGET LIMIT</h5>
                <p class="card-text">This functionality allows users to set a budget limit on their account for every month. This would help the user to check their expenditure with the limit they had set for the month and control their expenses.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">BUDGETit-Your Budget Buddy!</small>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="images/service3.jpg" alt="Split Expense">
            <div class="card-body">
                <h5 class="card-title">SPLIT EXPENSE</h5>
                <p class="card-text">The Split Expense functionality provides the users with a smart method to split your expenses with your friends and manage costs efficiently.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">BUDGETit-Your Budget Buddy!</small>
            </div>
        </div>
    </div>

</div>


<!-- Footer -->
<footer class="footer bg-success pt-4 mt-4">

    <div class="container-fluid text-center text-md-left">

        <div class="row text-white">
            <div class="col-md-6 mt-md-0 mt-3">
                <h5 class="text-uppercase"><b>Budget It</b></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla at libero at finibus. Mauris dui felis, sagittis in dapibus eget, porta quis elit.</p>
            </div>
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="col-md-6 mb-md-0 mb-3">
                <h5 class="text-uppercase"><b>Services</b></h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!" class="text-dark">Add Expense</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Set Budget</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Split Expense</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href=""> MaryAnn</a>
    </div>

</footer>



<!-- Use downloaded version of Bootstrap -->
<script src="js/bootstrap.min.js"></script>


<!-- Modal validation using jquery -->
<script>
    $(function() {

        $('#login_tab').click(function(e) {
            $("#login_form").delay(100).fadeIn(100);
            $("#register_form").fadeOut(100);
            $('#register_tab').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });
        $('#register_tab').click(function(e) {
            $("#register_form").delay(100).fadeIn(100);
            $("#login_form").fadeOut(100);
            $('#login_tab').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });

    });

</script>
<script>
    $("#register_form").submit(function(){
        if($("#password").val()!=$("#confirm-password").val())
        {
            alert("password and confirm password should be same");
            return false;
        }
    })
</script>


</body>
</html>