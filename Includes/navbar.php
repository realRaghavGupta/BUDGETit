<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <!-- Brand Logo created using Photoshop -->
        <img src="includes/assets/images/logo.png" class="logo" alt="brand">
    </a>
    <div class="toggle">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseContents"
                aria-controls="collapseContents" aria-expanded="false" aria-label="Toggle navigation">
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
            <?php
        if (isset($_SESSION['username'])) {
            echo '
        
            <li class="nav-item">
                <a class="nav-link" href="accountDetails.php">Account Details</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="newaddexpense.php">Add Expense</a>
                    <a class="dropdown-item" href="addincome.php">Add Income</a>
                    <a class="dropdown-item" href="setbudget.php">Set Budget Limit</a>
                    <a class="dropdown-item" href="splitExpense.php">Split Expense</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="viewProfile.php">Others</a>
                </div>
            </li>';
            }
            ?>
        </ul>
        <?php
        if (isset($_SESSION['username'])) {
            echo '
 <form action=logout.php>
 <input type="button" class="btn btn-outline-success" >
            <button class="btn btn-outline-success" >Logout</button>
        </form></div>';


        } else {
            echo ' <div class="nav-item navbar px-2">
            <button class="btn btn-outline-success" data-toggle="modal" data-target="#login-modal">Login or Register</button>
        </div>';
        }
        ?>

    </div>
</nav>