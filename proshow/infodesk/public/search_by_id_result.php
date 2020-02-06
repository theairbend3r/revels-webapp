<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php include("../includes/layouts/header.php"); ?>

<?php
  if(isset($_SESSION['infodesk']) && !empty($_SESSION['infodesk']))
  {
?>

  <?php
    // check for form subission
    //print_r($_POST);
    if(isset($_POST['search_by_id']))
    {
      //if successfull, store the detail from array into variables
      $people_id = $_POST['search_id'];
      $peeps_array = find_people_by_id($people_id);
      if($peeps_array)
      {
        //print_r($peeps_array);
        $pre_id = $peeps_array['pre_id'];
        $name = $peeps_array['name'];
        $tel = $peeps_array['tel'];
        $regno = $peeps_array['regno'];
        $money = 250;
      }
      else
      {
        redirect_to("user_not_found.php");
      }

    }
    else
    {
      //probably a GET request
      redirect_to("reg.php");
    }

  ?>

      <!-- Half Page Image Background Carousel Header -->
      <header id="myCarousel2" class="carousel slide">
          <!-- Wrapper for Slides -->
          <div class="carousel-inner">
              <div class="item active">
                  <!-- Set the first background image using inline CSS below. -->
                  <div class="fill" style="background-image:url('../public/images/rlogo.jpg');"></div>
                  <div class="carousel-caption">
                  </div>
              </div>

          </div>

      </header>

      <!-- Page Content -->
      <div class="container">

          <div class="row">
              <div class="col-lg-12">
                <h2 class = "text-center"> Regisration Page</h2><br><br>


              <form action = "final_submit_id.php" method = "post">
                <div class = "col-sm-10">

                  <div class = "form-group row">
                      <label for = "reg_id" class = "col-sm-2 col-form-label">ID</label>
                      <div class = "col-sm-6">
                        <input readonly type = "text" name = "reg_id" id = "reg_id" class = "form-control input-lg" value = "<?php echo uniqid('AvaJ'); ?>">
                      </div>
                  </div>

                  <div class = "form-group row">
                      <label for = "name" class = "col-sm-2 col-form-label">Name</label>
                      <div class = "col-sm-6">
                        <input readonly type = "text" name = "name" id = "name" class = "form-control input-lg" value = "<?php echo $name; ?>">
                      </div>
                  </div>

                  <div class = "form-group row">
                      <label for = "tel" class = "col-sm-2 col-form-label">Contact Num</label>
                      <div class = "col-sm-6">
                        <input readonly type = "text" name = "tel" id = "tel" class = "form-control input-lg"  value = "<?php echo $tel; ?>">
                      </div>
                  </div>


                <div class = "form-group row">
                    <label for = "tel" class = "col-sm-2 col-form-label">Registration Number</label>
                    <div class = "col-sm-6">
                      <input readonly type = "regno" name = "regno" id = "regno" class = "form-control input-lg"  value = "<?php echo $regno; ?>">
                    </div>
                </div>
              </div>

                <div class = "col-sm-2"><br><br><br>
                  <input readonly type = "text" name = "money" id = "money" class = "form-control input-lg" value = "Rs.<?php echo $money; ?>/-" >
                </div>

                <input type = "hidden" name = "pre_id" id = "pre_id" value = "<?php echo $people_id; ?>" >


                <div class="offset-sm-6 col-sm-6"><br><br>
                  <button class = "btn btn-primary btn-lg" type = "submit" name = "submit_reg" value = "submit_reg">Cash me ousside, howboudah</button>
                </div>

              </form>


              </div>
          </div>

          <hr>

<?php
  }

  else
  {
    redirect_to("index.php");
  }
?>

        <!-- Footer -->

        <?php include("../includes/layouts/footer.php"); ?>
