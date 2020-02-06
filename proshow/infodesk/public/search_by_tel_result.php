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
  if(isset($_POST['search_by_tel']))
  {
    //if successfull, store the detail from array into variables
    //print_r($_POST);
    $people_tel = $_POST['search_tel'];
    $peeps_array = mysqli_fetch_assoc(find_people_by_tel($people_tel));
    if($peeps_array)
    {
      //print_r($peeps_array);
      //die();
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
              <h2 class = "text-center"> Registration Page</h2><br><br>

              <form action = "final_submit.php" method = "post">
                <table class = "table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Registration Number</th>
                      <th>Contact No.</th>
                      <th>Select One</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $people_set = find_people_by_tel($people_tel);$i = 0 ?>
                    <?php while($people = mysqli_fetch_assoc($people_set)) { ?>
                  <tr>
                      <td><?php echo uniqid('AvaJ'); ?></td>
                      <td><?php echo $people['name']; ?> </td>
                      <td><?php echo $people['regno']; ?> </td>
                      <td><?php echo $people['tel']; ?> </td>
                      <input type = "hidden" name =  <?php echo "reg_id_".($i+1)?> value = "<?php echo uniqid('AvaJ'); ?>">
                      <input type = "hidden" name = <?php echo "name_".($i+1)?> value = "<?php echo $people['name']; ?>" >
                      <input type = "hidden" name =  <?php echo "regno_".($i+1)?> value = "<?php echo $people['regno']; ?>">
                      <input type = "hidden" name = <?php echo "tel_".($i+1)?> value = "<?php echo $people['tel']; ?>" >
                      <td> <button class = "btn btn-primary btn-xs" type = "submit" name = " <?php echo 'submit_'.($i+1)?>"> Submit</button></td>
                    </tr>
                    <?php $i++;} $_SESSION["num_of_ids"] = $i;?>
                  </tbody>
                </table>

              </form>

            </div><!-- end of class = "row"-->
          </div><!-- end of class= "col-lg-12" -->


            <hr>


          <?php
            }

            else
            {
              redirect_to("index.php");
            }
          ?>

<?php include("../includes/layouts/footer.php"); ?>
