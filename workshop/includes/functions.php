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
    $query = "SELECT * FROM pre_reg WHERE tel = {$safe_people_tel}";
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


  //function find_all_delegates()
  {
    global $connection;
    $query = "SELECT name FROM delegate_info WHERE del_no = 1";
    $delegate_set = mysqli_query($connection, $query);
    confirm_query($delegate_set);
    return $delegate_set;
  }








/*  function password_encrypt($password) {
  	$hash_format = "$2y$10$";   // Tells PHP to use Blowfish with a "cost" of 10
	  $salt_length = 22; 					// Blowfish salts should be 22-characters or more
	  $salt = generate_salt($salt_length);
	  $format_and_salt = $hash_format . $salt;
	  $hash = crypt($password, $format_and_salt);
		return $hash;
	}

	function generate_salt($length) {
	  // Not 100% unique, not 100% random, but good enough for a salt
	  // MD5 returns 32 characters
	  $unique_random_string = md5(uniqid(mt_rand(), true));

		// Valid characters for a salt are [a-zA-Z0-9./]
	  $base64_string = base64_encode($unique_random_string);

		// But not '+' which is valid in base64 encoding
	  $modified_base64_string = str_replace('+', '.', $base64_string);

		// Truncate string to the correct length
	  $salt = substr($modified_base64_string, 0, $length);

		return $salt;
	}

	function password_check($password, $existing_hash) {
		// existing hash contains format and salt at start
	  $hash = crypt($password, $existing_hash);
	  if ($hash === $existing_hash) {
	    return true;
	  } else {
	    return false;
	  }
	}
*/

  function attempt_login($username, $password)
  {
      global $connection;
      $username = mysqli_real_escape_string($connection, $username);
      $password = mysqli_real_escape_string($connection, $password);
      $query = "SELECT id FROM sys_admin WHERE username = '$username' and hashed_password='$password' ";
      $admin_set = mysqli_query($connection, $query);
      confirm_query($admin_set);
      if($admin = mysqli_fetch_assoc($admin_set))
      {
        return true;
      }
      else
      {
        return false;
      }

  }


  function attempt_infodesk_login($username, $password)
  {

      global $connection;
      $username = mysqli_real_escape_string($connection, $username);
      $password = mysqli_real_escape_string($connection, $password);
      $query = "SELECT id FROM infodesk WHERE username = '$username' and hashed_password='$password' ";
      $admin_set = mysqli_query($connection, $query);
      confirm_query($admin_set);
      if($admin = mysqli_fetch_assoc($admin_set))
      {
        return true;
      }
      else
      {
        return false;
      }

  }




?>
