<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <!-- Brand Logo created using Photoshop -->
        <img src="includes/assets/images/logo.png" class="logo" alt="brand">
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
            <button class="btn btn-outline-success" data-toggle="modal" data-target="#login-modal">Login or Register</button>
        </div>
    </div>
</nav>