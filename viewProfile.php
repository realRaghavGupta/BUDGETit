<html>
<head>
  <!-- REFERENCES:
  BootStrap : https://getbootstrap.com/docs/4.1
  Charts: https://developers.google.com/chart/interactive/docs/examples
SlideShow: https://www.w3schools.com/w3css/w3css_slideshow.asp
Header: https://stackoverflow.com/questions/18712338/make-header-and-footer-files-to-be-included-in-multiple-html-pages
-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./bootstrap-4.1.1-dist/css/bootstrap.min.css"/>
<link rel="stylesheet" href="./bootstrap-4.1.1-dist/css/bootstrap.min.css"/>
<link rel="stylesheet" href="./css/main.css"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.4/popper.js"></script>
   <script src="bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title> Account Details Page </title>
</head>
  <body>
  <div id="header"></div><br/>
  <div class="container-fluid" style="max-width:100%;">

  <div class="card" style="width: 50%;" align="center">
<img src="./images/splitBg.jpg" class="w3-circle" alt="Alps" style="max-width:40%; max-height:40%;">
  <div class="card-body">
    <h4 class="card-title" style="font-family: serif;"><b> Profile Details </b></h4>
    <table>
      <tr>
        <td>
          <p style="font-family: serif; font-size: 1em;" class="card-text"> First Name: XXXXXXXXX </p>
            </br>
        </td>
      </tr>
      <tr>
        <td>
          <p style="font-family: serif; font-size: 1em;" class="card-text"> Last Name: XXXXXXXXXXX</p>
          </br>
        </td>
      </tr>
    </br>
      <tr>
        <td>
          <p style="font-family: serif; font-size: 1em;" class="card-text">  Email ID: XXXXXXXX@XX.com </p>
        </br>
        </td>
      </tr>
    </br>
    </table>
    <button type="button" style="font-family: serif; font-size: 1.2em;" id="mybutton" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary">Change Password</button>

  </br>
</br>
    <a style="font-family: serif; font-size: 1.2em;" href="#"> Contact Us</a>
  </div>
</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group" align="left">
                             <label class="control-label col-xs-3" for="oldPassword">Old Password</label>
                             <div class="col-xs-9">
                                 <input type="password" class="form-control" name="oldPassword" id="oldPassword" placeholder="Enter Old Password">
                             </div>
                             <label class="control-label col-xs-3" for="newPassword">New Password</label>
                             <div class="col-xs-9">
                                 <input type="password" class="form-control" name="newPassword" id="newPassword" placeholder="Enter New Password">
                             </div>
                             <label class="control-label col-xs-3" for="confirmPassword">Confirm Password</label>
                             <div class="col-xs-9">
                                 <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirm new Password">
                             </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"> Change Password</button>
      </div>
    </div>
  </div>
</div>
</div>
<div class="modal fade" id="ContactusModal" tabindex="-1" role="dialog" aria-labelledby="ContactusModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ContactusModal"> Contact us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group" align="left">
                             <label class="control-label col-xs-3" for="oldPassword">Old Password</label>
                             <div class="col-xs-9">
                                 <input type="password" class="form-control" name="oldPassword" id="oldPassword" placeholder="Enter Old Password">
                             </div>
                             <label class="control-label col-xs-3" for="newPassword">New Password</label>
                             <div class="col-xs-9">
                                 <input type="password" class="form-control" name="newPassword" id="newPassword" placeholder="Enter New Password">
                             </div>
                             <label class="control-label col-xs-3" for="confirmPassword">Confirm Password</label>
                             <div class="col-xs-9">
                                 <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirm new Password">
                             </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"> Change Password</button>
      </div>
    </div>
  </div>
</div>
</div>
</body>
<script>
  $("#header").load("./header.html");
</script>
</html>
