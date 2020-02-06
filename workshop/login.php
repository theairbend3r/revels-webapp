<?php session_start(); ?>
<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/validation_functions.php"); ?>

<!-- INFODESK LOGIN BELOW -->

<?php
  $username = "";
  if (isset($_POST['submit']))
  {
    // Process the form
    // validations
    $required_fields = array("username", "password", "username_sys", "password_sys");
    //validate_presences($required_fields);
    //if (empty($errors))
      // Attempt login

      extract($_POST);

      $found_infodesk = attempt_infodesk_login($username, $password);
      $confirm_message = "InfoDesk password match successfull.";

      $found_sysad = attempt_login($username_sys, $password_sys);
      $confirm_message = "SysAd password match successfull.";

      if($found_infodesk && $found_sysad)
      {
        $_SESSION['sysad'] = $username_sys;
        $_SESSION['infodesk'] = $username;
        $_SESSION['admin_id'] = "yo";
        redirect_to("main.php");
      }
      else
      {
        redirect_to("logout_login.php");
      }
  } // end of : if (isset($_POST['submit']))

  else{
    // This is probably a GET request
    redirect_to("index.php");

  }

?>
