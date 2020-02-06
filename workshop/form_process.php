<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/layouts/header.php"); ?>
<?php include("includes/session.php"); ?>
<?php //confirm_logged_in(); ?>


<?php
  if (isset($_POST['submit']))
    {

      //Process the form.
      //Escape user input(strings) for security.
      $db_name = mysqli_real_escape_string($connection, $_POST['name']);
      $db_regno = mysqli_real_escape_string($connection, $_POST['regno']);
      $db_tel = mysqli_real_escape_string($connection, $_POST['tel']);
      $db_email = mysqli_real_escape_string($connection, $_POST['email']);
      $db_college = mysqli_real_escape_string($connection, $_POST['college']);


      $query = "INSERT INTO delegate_info (name, regno, tel, email, college) VALUES ('$db_name', '$db_regno', '$db_tel', '$db_email', '$db_college')";
      $result = mysqli_query($connection, $query);


      $query = "SELECT del_no FROM delegate_info where tel = ".$_POST['tel'].";";
      $row = mysqli_fetch_array(mysqli_query($connection, $query));

      if ($result)
      {
        //SUCCESS
        echo "<div id = 'display_pre_id'>";
          echo "Form submitted Successfully.<br>";
          echo "ID: ".$row['del_no'];
        //redirect_to("pre_reg.php?submit=1");

          echo '<form action = "delegate_reg.php" method = "get">';
            echo '<ul class="actions">';
              echo '<br><li><input type="submit" name  ="submit" value="Done" class="special" /></li>';
            echo '</ul>';
          echo '</form>';
        echo "</div>";
      }
      else
      {
        //FAILURE
        echo "Database query failed. Form not submitted.";
        //redirect_to("main.php");
      }
  }
  else
  {
    //This is for a GET request. ie.If someone entered this url
    //and pressed enter without actually submitting any data.
    redirect_to("main.php");
  }


?>


<?php
  if (isset($connection))
  {
    mysqli_close($connection);
  }
?>
