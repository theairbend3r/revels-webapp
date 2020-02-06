<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<link href="css/half-slider.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">



<?php
  //session check is initialised.
  if(isset($_SESSION['infodesk']) && !empty($_SESSION['infodesk']))
  {
?>

    <?php
      if (isset($_POST['on_spot']))
        {
          //Process the form.
          //Escape user input(strings) for security.
          $db_name = mysqli_real_escape_string($connection, $_POST['name']);
          $db_regno = mysqli_real_escape_string($connection, $_POST['regno']);
          $db_college = mysqli_real_escape_string($connection, $_POST['college']);
          $db_email = mysqli_real_escape_string($connection, $_POST['email']);
          $db_tel = mysqli_real_escape_string($connection, $_POST['tel']);

          //Perfrom database query.
          //$query = "INSERT INTO delegate_info (" ;
          //$query.= "name, regno, college, email, tel, gender";
          //$query .= ") VALUES (";
          //$query .= " '{$db_name}', '{$db_regno}', '{$db_college}', '{$db_email}', {$db_tel}, {$db_gender}";
          //$query .= ")";
          //$query = "INSERT INTO delegate_info (name, regno, college, email, tel, gender) VALUES ('".$db_name."', '".$db_regno."', '".$db_college."', '".$db_email."', '".$db_tel."', '".$db_gender."')";

          $query = "INSERT INTO pre_reg (name, regno, college, email, tel, is_selected) VALUES ('$db_name', '$db_regno', '$db_college', '$db_email', '$db_tel', 0)";
          $result = mysqli_query($connection, $query);


          //display the final_reg_id to the user.
          $query = "SELECT pre_id FROM pre_reg where tel = ".$_POST['tel'].";";
          $row = mysqli_fetch_array(mysqli_query($connection, $query));

          if ($result)
          {
            //SUCCESS

            echo "<div class = 'display'>";
              echo "Form submitted Successfully.<br>";
              echo "ID: ".$row['pre_id'];
              echo "<br>";
              echo '<a href = "reg_on_spot.php"><button class = "btn btn-primary btn-lg"> Back to registrations. </button></a>';
            echo "</div>";

            //redirect_to("delegate_cards.php?submit=1");
          }
          else
          {
            //FAILURE
            echo "Database query failed. Form not submitted.";
            //redirect_to("delegate_cards.php");
          }
      }
      else
      {
        //This is for a GET request. ie.If someone entered this url
        //and pressed enter without actually submitting any data.
        //redirect_to("index.php");
      }


    ?>



<?php
    //session check is completed. session check is initialised at the top.
    }

    else
    {
      redirect_to("index.php");
    }
  ?>

<?php
  if (isset($connection))
  {
    mysqli_close($connection);
  }
?>
