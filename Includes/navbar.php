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