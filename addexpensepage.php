<?php
include "Includes/Header.php";
?>

    <!--reference: https://getbootstrap.com/docs/4.0/layout/overview/-->


    <div class="jumbotron big-banner" style="height: 1050px; padding-top: 150px">

        <div class="card text-center">
            <div class="card-header bgcolor">
                Add Expense
            </div>
            <div class="card-body add-expense">

                <div class="container-fluid h-100">
                    <div class="row justify-content-center align-items-center h-100">

                        <form class="col-12" action="index.php">


                            <div class="col-sm-4">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text">Categeory:</span>
                                    <select id="categ" name="categeory" class="form-control"
                                            onchange="validate_dropdown1">
                                        <option value="0" selected>Custom Select Menu</option>
                                        <option value="Food and Drink">Food and Drink</option>
                                        <option value="Home">Home</option>
                                        <option value="utilities">utilities</option>
                                        <option value="Entertainment">Entertainment</option>
                                        <option value="Transportation">Transportation</option>
                                        <option value="Life">Life</option>
                                        <option value="Uncategorized">Uncategorized</option>
                                    </select>
                                    <div class="input-group mb-3 input-group-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Amount:</span>
                                        </div>
                                        <input type="number" class="form-control" placeholder="Amount" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check mb-2 mr-sm-2">
                                <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                <label class="form-check-label" for="inlineFormCheck">
                                    Split Bill
                                </label>
                            </div>

                            <button type="submit" class="btn btn-outline-success">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script>
        function validate_dropdown1() {
            var dropdown = document.getElementById('categ');


            if (dropdown.selectedIndex == 0) {
                dropdown.innerHTML = "Custom Select Menu";
                dropdown.focus();

                return false;
            }
            else {
                return true;
            }
        }


    </script>

    </body>


    </html>
<?php
/**
 * Created by PhpStorm.
 * User: Sowmya Umesh
 * Date: 6/23/2018
 * Time: 4:50 PM
 */