<?php require_once("../includes/session.php"); ?>
<?php include("../includes/layouts/header.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<?php
  //session check is initialised.
  if(isset($_SESSION['infodesk']) && !empty($_SESSION['infodesk']))
  {
?>


  <header id="myCarousel2" class="carousel slide">
      <!-- Wrapper for Slides -->
      <div class="carousel-inner">
          <div class="item active">
              <!-- Set the first background image using inline CSS below. -->
              <div class="fill" style="background-image:url('../public/images/rlogo4.jpg');"></div>
          </div>

      </div>

  </header>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">

              <br>
              <div class = "col-lg-12">

                <div class = "col-lg-2 text-left">
                  <!-- <a href = "menu.php"><button class="btn btn-lg btn-primary">Back</button></a> -->
                </div>

                <div class = "col-lg-8">
                  <h1 class = "text-center"> On-Spot Registrations </h1><br>
                </div>
                <div class = "col-lg-2 text-right">
                  <a href = "logout_login_reg.php"><button class="btn btn-lg btn-danger">Logout</button></a>
                </div>
              </div>

              <div class = "col-lg-2">
              </div>

              <div class = "col-lg-10">

                <form action = "on_spot_process.php" method = "post">
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class = "col-sm-6">
                      <input type="text" name = "name" class="form-control input-lg" id="name" placeholder="Name" required = "required">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="regno" class="col-sm-2 col-form-label">Reg No.</label>
                    <div class = "col-sm-6">
                      <input type="text" name = "regno" class="form-control input-lg" id="regno" placeholder="Regd. No." required = "required">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Contact No." class="col-sm-2 col-form-label">Contact No.</label>
                    <div class = "col-sm-6">
                      <input type="tel" name = "tel" class="form-control input-lg" id="tel" placeholder="Contact No." required = "required">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class = "col-sm-6">
                      <input type="email" name = "email" class="form-control input-lg" id="email" placeholder="Email" required = "required">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="college" class="col-sm-2 col-form-label">College</label>
                    <div class = "col-sm-6">
                      <input type="text" name = "college" class="form-control input-lg" id="college" placeholder="College" required = "required">
                    </div>
                  </div>


                    <div class="form-group row">
                      <button class="btn btn-primary btn-lg" type="submit" name = "on_spot" value = "on_spot">Register</button>
                      <a href = "menu.php"><button class="btn btn-lg btn-primary text-right">Back</button></a>
                    </div>

                </form>

            </div>


            </div>
        </div>

<?php
  //session check is completed. session check is initialised at the top.
  }

  else
  {
    redirect_to("index.php");
  }
?>

<hr>
<?php include("../includes/layouts/footer.php"); ?>
