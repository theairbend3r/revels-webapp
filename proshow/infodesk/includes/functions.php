<?php

  function redirect_to($new_location)
  {
    header("location: ". $new_location);
    exit;
  }


  function confirm_query($result_set)
  {
    if (!$result_set)
    {
      die("Database query failed.");
    }
  }

  function form_errors($errors=array())
  {
    $output = "";
    if (!empty($errors))
    {
      $output .= "<div class=\"error\">";
      $output .= "Please fix the following errors:";
      $output .= "<ul>";
      foreach ($errors as $key => $error)
      {
        $output .= "<li>";
        $output .= htmlentities($error);
        $output .= "</li>";
      }
      $output .= "</ul>";
      $output .= "</div>";
    }
    return $output;
  }


  function find_all_infodesk()
  {
    global $connection;
    $query = "SELECT * FROM ps_login";
    $infodesk_set = mysqli_query($connection, $query);
    confirm_query($infodesk_set);
    return $infodesk_set;
  }

  function find_infodesk_by_id($infodesk_id)
  {
    global $connection;
    $safe_infodesk_id  = mysqli_real_escape_string($connection, $infodesk_id);
    $query = "SELECT * FROM ps_login WHERE id = {$safe_infodesk_id} LIMIT 1";
    $infodesk_set = mysqli_query($connection, $query);
    confirm_query($infodesk_set);
    if($infodesk = mysqli_fetch_assoc($infodesk_set))
    {
      return $infodesk;
    }
    else
    {
      return null;
    }
  }

  function find_people_by_id($people_id)
  {
    global $connection;
    $safe_people_id  = mysqli_real_escape_string($connection, $people_id);
    $query = "SELECT * FROM pre_reg WHERE pre_id = {$safe_people_id}";
    $people_set = mysqli_query($connection, $query);
    confirm_query($people_set);
    if($people = mysqli_fetch_assoc($people_set))
    {
      return $people;
    }
    else
    {
      return null;
    }
  }

  function find_people_by_tel($people_tel)
  {
    global $connection;
    $safe_people_tel  = mysqli_real_escape_string($connection, $people_tel);
    $query = "SELECT pre_id, name, regno, tel FROM pre_reg WHERE tel = {$safe_people_tel}";
    $people_set = mysqli_query($connection, $query);
    confirm_query($people_set);
    return $people_set;
  }




  function find_infodesk_by_username($username)
  {
      global $connection;
      $safe_username = mysqli_real_escape_string($connection, $username);
      $query = "SELECT * FROM ps_login WHERE username = '{$safe_username}' LIMIT 1";
      $infodesk_set = mysqli_query($connection, $query);
      confirm_query($infodesk_set);
      if($infodesk = mysqli_fetch_assoc($infodesk_set))
      {
        return $infodesk;
      }
      else
      {
        return null;
      }
    }





function attempt_infodesk_login($username, $password)
{
    global $connection;
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    $query = "SELECT id FROM ps_login WHERE username = '$username' and hashed_password='$password' ";
    $infodesk_set = mysqli_query($connection, $query);
    confirm_query($infodesk_set);
    if($infodesk = mysqli_fetch_assoc($infodesk_set))
    {
      return true;
    }
    else
    {
      return false;
    }

}


?>
