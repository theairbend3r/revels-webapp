<?php require_once("../includes/session.php"); ?>
<?php include("../includes/layouts/header.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php
  //session check is initialised.
  if(isset($_SESSION['infodesk']) && !empty($_SESSION['infodesk']))
  {
?>

    <!-- Half Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
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

              <h1 class = "text-center"> MENU </h1>

              <div class = "col-lg-6">
                <div class = "text-center">
                  <h2> <a href = "reg.php"><button class = "btn btn-lg btn-primary"> Final Registration </button></a> </h2>
                </div>
              </div>

              <div class = "col-lg-6">
                <div class = "text-center">
                  <h2><a href= "reg_on_spot.php"><button class = "btn btn-lg btn-primary" >On Spot Registration</button></a></h2>
                </div>
              </div>


              <div class = "text-center">
                <a href="logout_login_reg.php"><button class = "btn btn-danger btn-lg">Logout</button> </a>
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
