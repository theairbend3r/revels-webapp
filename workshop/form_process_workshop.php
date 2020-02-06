<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/session.php"); ?>
<?php include("includes/layouts/header.php"); ?>
<?php //confirm_logged_in(); ?>


<?php

  if (isset($_POST['submit']))
    {
      //Process the form.
      //Escape user input(strings) for security.
      $db_del_no = mysqli_real_escape_string($connection, $_POST['id']);
      $db_id = mysqli_real_escape_string($connection, $_POST['workshops']);

      $query_search = "SELECT * FROM delegate_info WHERE del_no = $db_del_no";
      $result_search = mysqli_query($connection, $query_search);

      if(mysqli_fetch_assoc($result_search))
      {
        $query = "INSERT INTO workshop_reg (del_no, id) VALUES ('$db_del_no', '$db_id')";
        $result = mysqli_query($connection, $query);

        $query1 = "SELECT wp_id FROM workshop_reg where del_no = ".$_POST['id'].";";
        $row = mysqli_fetch_array(mysqli_query($connection, $query1));

        if ($result)
        {
          //SUCCESS
          echo "<div id = 'display_pre_id'>";
            echo "Form submitted Successfully.<br>";
            //echo "ID: ".$row[0];

            echo '<form action = "workshop_reg.php" method = "get">';
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
        echo "<div id = 'display_pre_id'>";
        echo "ID does not exist.";

        echo '<form action = "workshop_reg.php" method = "get">';
          echo '<ul class="actions">';
            echo '<br><li><input type="submit" name  ="submit" value="Go Back" class="special" /></li>';
          echo '</ul>';
        echo '</form>';
        echo "</div>";
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
