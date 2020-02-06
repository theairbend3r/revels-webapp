<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<!-- INFODESK LOGIN BELOW -->

<?php
  $username = "";
  if (isset($_POST['submit']))
  {
    // Process the form
    // validations
    $required_fields = array("username", "password");
    //validate_presences($required_fields);
    //if (empty($errors))
      // Attempt login

      extract($_POST);

      $found_infodesk = attempt_infodesk_login($username, $password);
      $confirm_message = "InfoDesk password match successfull.";

      if($found_infodesk)
      {
        $_SESSION['infodesk'] = $username;
        redirect_to("menu.php");
      }
  } // end of : if (isset($_POST['submit']))

  else{
    // This is probably a GET request
    //but it is the first page the server loads, so chill.

  }

?>


<?php include("../includes/layouts/header.php"); ?>


    <!-- Half Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('../public/images/rlogo6.jpg');"></div>
            </div>
        </div>

    </header>

    <!-- Page Content -->
    <div class="container" style="">

        <div class="row">
            <div class="col-lg-12">
              <?php echo message(); ?>
              <?php echo form_errors($errors); ?>

              <h1 class = "text-center">Login Reg</h1><br>


            <div class = "col-lg-2">
            </div>
            <div class = "col-lg-10">
              <h3>InfoDesk Login </h3><br>

                  <form action="index.php" method="post">
                    <div class = "form-group row">
                      <label for = "username" class = "col-sm-2 col-form-label">Username </label>
                      <div class = "col-sm-6">
                        <input type = "text" name = "username" id = "username" class = "form-control input-lg" placeholder = "Enter username" required = "required" value = "<?php echo htmlentities($username); ?>">
                      </div>
                    </div>

                    <div class = "form-group row">
                      <label for = "password" class = "col-sm-2 col-form-label">Password </label>
                      <div class = "col-sm-6">
                        <input type = "password" name = "password" id = "password" class = "form-control input-lg" placeholder = "Enter password" required = "required">
                      </div>
                    </div>

                    <div>
                      <button class = "btn btn-primary btn-lg" type = "submit" name = "submit" value = "login reg">Submit</button>
                    </div><br>

                  </form>
            </div><!--class = "col-sm-10" -->

            <div class = "col-lg-2">
            </div>
          </div><!-- class = "col-lg-12"-->
        </div><!--class = row -->
        <hr>



        <!-- Footer -->

      <?php include("../includes/layouts/footer.php"); ?>
