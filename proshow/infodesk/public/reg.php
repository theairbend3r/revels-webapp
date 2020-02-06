<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<?php // session check
  if(isset($_SESSION['infodesk']) && !empty($_SESSION['infodesk']))
  {
?>

  <?php
    //if($_GET['submit'] == '1')
    {
      //echo "<script>alert('FORM SUBMITTED');</script>";
    }
  ?>

  <?php include("../includes/layouts/header.php"); ?>

      <!-- Half Page Image Background Carousel Header -->
      <header id="myCarousel3" class="carousel slide">
          <!-- Wrapper for Slides -->
          <div class="carousel-inner">
              <div class="item active">
                  <!-- Set the first background image using inline CSS below. -->
                  <div class="fill" style="background-image:url('../public/images/rlogo6.jpg');"></div>
                  <div class="carousel-caption">
                  </div>
              </div>

          </div>

      </header>

      <!-- Page Content -->
      <div class="container">

          <div class="row">
              <div class="col-lg-12">


                <div class = "col-lg-12 head">
                  <div class = "col-lg-2 text-left">
                  </div>

                  <div class = "col-lg-8">
                    <h1 class = "text-center"> Final Registrations </h1>
                  </div>
                  <div class = "col-lg-2 text-right">
                    <a href = "logout_login_reg.php"><button class="btn btn-lg btn-danger">Logout</button></a><br><br>
                    <a href = "menu.php"><button class="btn btn-lg btn-primary">Back</button></a>
                  </div>
                </div>

                <div class = "col-lg-2">
                </div>

                <div class = "col-lg-8">
                  <h3> Search by Unique ID </h3><br>

                  <form action = "search_by_id_result.php" method = "post">
                    <div class = "form-group row text-right">
                      <label for = "search_by_id" class = "col-lg-2 col-form-label">Search </label>
                      <div class = "col-lg-4">
                        <input type = "text" name = "search_id" id = "search_id" class = "form-control input-lg" placeholder = "Enter Unique ID">
                      </div>
                    <div class = "col-lg-4 text-right">
                      <button class="btn btn-primary btn-lg" type = "submit" name = "search_by_id" value = "search_by_id">Search</button>
                    </div>
                  </div>
                  </form>

                  <hr>

                  <h3> Search by Contact Number </h3><br>
                  <form action ="search_by_tel_result.php" method = "post">
                      <div class = "form-group row text-right">
                        <label for = "search_by_tel" class = "col-lg-2 col-form-label">Search </label>
                        <div class = "col-lg-4">
                          <input type = "text" name = "search_tel" id = "search_tel" class = "form-control input-lg" placeholder = "Enter contact number">
                        </div>
                      <div class = "col-lg-4 text-right">
                        <button class="btn btn-primary btn-lg" type="submit" name = "search_by_tel" value = "search_by_tel">Search</button>
                      </div>
                    </div>
                  </form>

                  <div class = "col-lg-2">
                  </div>

                  </div><!--col-lg-8 -->
                </div><!--col-lg-12 -->
            </div><!-- row-->
<?php
  }

  else
  {
    redirect_to("index.php");
  }
?>

          <hr>

        <!-- Footer -->
        <?php include("../includes/layouts/footer.php"); ?>
