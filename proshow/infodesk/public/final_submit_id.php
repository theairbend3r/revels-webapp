<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<link href="css/half-slider.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">



<?php
//session_check initialised.
  if(isset($_SESSION['infodesk']) && !empty($_SESSION['infodesk']))
  {
?>

    <?php
    // SUBMISSION AFTER SEARCH BY ID
    if(isset($_POST["submit_reg"]))
    {
      //if successfull, store the detail from array into variables
      $pre_id = $_POST['pre_id'];
      $reg_id = $_POST['reg_id'];
      $name = $_POST['name'];
      $regno = $_POST['regno'];
      $tel = $_POST['tel'];

      //insert into ps_final table
      $query = "INSERT INTO ps_final (id, name, regno, tel) VALUES ('{$reg_id}', '{$name}', '{$regno}', '{$tel}')";
      $result = mysqli_query($connection, $query);

      // update the is_set column in table pre_reg from 0 to 1.
      if ($result)
      {
        $query_is_selected = "UPDATE pre_reg SET is_selected = 1 WHERE pre_id = $pre_id";
        $result_is_selected = mysqli_query($connection, $query_is_selected);
      }

      //display the final_reg_id to the user.
      $query_display = "SELECT final_reg_id FROM ps_final WHERE regno = '{$regno}'"; // add another where condition to check tel number aswell?
      $display = mysqli_query($connection, $query_display);
      $display_array = mysqli_fetch_assoc($display);
      //var_dump($display_array);
      if ($result)
      {
        //SUCCESS
        echo "<div class = 'display'>";
          echo "Form submitted Successfully.<br>";
          echo "ID: ". $display_array["final_reg_id"]."<br>";
          echo ' <a href = "reg.php" ><button class = "btn btn-primary btn-lg" type = "submit" name = "submit"> Cool</button></a>';
        echo "</div>";

        //redirect_to("reg.php?submit=1");
      }
      else
      {
        //FAILURE
        echo "<div class = 'display'>";
          echo "Database query failed. Form not submitted.";
        echo "</div>";
        //redirect_to("reg.php");
      }
    }
    else
    {
      //probably a GET request
      //redirect_to("reg.php");
      echo "<div class = 'display'>";
        echo "search by id failed damn";
      echo "</div>";

    }

    ?>


<?php
  // for session. session check is initialised above.
  }

  else
  {
    redirect_to("index.php");
  }
?>



<?php
  //Close the database connection
  if (isset($connection))
  {
    mysqli_close($connection);
  }

?>
