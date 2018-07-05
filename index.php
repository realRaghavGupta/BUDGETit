<?php
include "Includes/Header.php";
?>

    <!--reference: https://getbootstrap.com/docs/4.0/layout/overview/-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="Image/bud.jpg" alt="First slide" width="200"
                     height="400">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Image/splitimg.jpg" alt="Second slide" width="200"
                     height="400">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Image/tracking.jpg" alt="Third slide" width="200"
                     height="400">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="bg">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body border add-expense">
                        <h5 class="card-title">Setting up our Budget</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-outline-success color">Add Budget</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body border add-expense">
                        <h5 class="card-title">Tracking our Expense</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href=detailspage.php class="btn btn-outline-success color">Account Details</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body border add-expense">
                        <h5 class="card-title">Spliting Bills</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href=addexpensepage.php class="btn btn-outline-success color">Add Expense</a>
                    </div>
                </div>
            </div>

        </div>



        <button type="button" class="btn btn-outline-success color foot" >
            About Us
        </button>

    </div>
    </body>


    </html>