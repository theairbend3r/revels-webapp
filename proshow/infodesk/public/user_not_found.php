<?php require_once("../includes/session.php"); ?>
<?php include("../includes/layouts/header.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<link href="css/half-slider.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">


<?php
  //session check is initialised.
  if(isset($_SESSION['infodesk']) && !empty($_SESSION['infodesk']))
  {
?>


    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
              <div class = "display">
                User not found.<br><br>
                <a href = "reg.php"><button class = "btn btn-primary btn-lg"> Back to registrations. </button></a>
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
