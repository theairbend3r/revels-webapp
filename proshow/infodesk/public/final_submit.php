<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<link href="css/half-slider.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">


<!-- SUBMISSION AFTER SEARCH BY TEL -->
<?php
if(isset($_SESSION["num_of_ids"]))
{
  for($i = 0; $i < $_SESSION["num_of_ids"]; $i++)
  {
    if(isset($_POST["submit_".($i+1)]))
    {
      $reg_id = $_POST['reg_id_'.($i+1)];
      $name = $_POST['name_'.($i+1)];
      $regno = $_POST['regno_'.($i+1)];
      $tel = $_POST['tel_'.($i+1)];

      $query = "INSERT INTO ps_final (id, name, tel, regno) VALUES ('{$reg_id}', '{$name}', '{$tel}', '{$regno}')";
      $result = mysqli_query($connection, $query);

      $query_display = "SELECT final_reg_id FROM ps_final WHERE regno = '{$regno}'";
      $display = mysqli_query($connection, $query_display);
      $display_array = mysqli_fetch_assoc($display);

      if ($result)
      {
        //SUCCESS
        echo "<div class = 'display'>";
          echo "Form submitted Successfully.<br>";
          echo "ID: ". $display_array["final_reg_id"]."<br>";
          echo ' <a href = "reg.php" ><button class = "btn btn-primary btn-lg" type = "submit" name = "submit"> Cool</button></a>';
        echo "</div>";
        break;
        //redirect_to("reg.php?submit=1");
      }
      else
      {
        //FAILURE
        echo "<div class = 'display'>";
          echo "Form submission tel failed.<br>";
        echo "</div>";
        //redirect_to("reg.php");
      }
    }
  }
}
else
{
  echo "tel search failed lol";
}

?>


<?php
  //Close the database connection
  if (isset($connection))
  {
    mysqli_close($connection);
  }

?>
