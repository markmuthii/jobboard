<?php 

if (isset($_POST["usersignup"])) {

	require_once "../config/db.php";

	$firstname = $db->real_escape_string($_POST["firstname"]);
	$lastname = $db->real_escape_string($_POST["lastname"]);
	$email = $db->real_escape_string($_POST["email"]);
	$phonenumber = $db->real_escape_string($_POST["phonenumber"]);
	$username = $db->real_escape_string($_POST["username"]);
	$password = $db->real_escape_string($_POST["password"]);
	$role = $db->real_escape_string($_POST["role"]);

	$check_email = $db->query("SELECT * FROM users WHERE email = '$email'");

	if ($check_email->num_rows > 0) {

		$res = array(
			"Error" => true,
			"Message" => "Please use a different email." 
		);

		echo json_encode($res);

		exit();

	}else{

		$check_username = $db->query("SELECT * FROM users WHERE username = '$username'");

		if ($check_username->num_rows > 0) {

			$res = array(
				"Error" => true,
				"Message" => "Please use a different username." 
			);

			echo json_encode($res);
			
			exit();

		}else{

			$hashPass = password_hash($password, PASSWORD_DEFAULT);

			$signup_query = "INSERT INTO users (
                        first_name, last_name, email, phonenumber, username, password, role) 
                      VALUES (
                        '$firstname', '$lastname', '$email', '$phonenumber', '$username', '$hashPass', '$role')"; 

			$signup = $db->query($signup_query);

			if ($signup) {

				$res = array(
					"Error" => false,
					"Message" => "Signup successful." 
				);

				echo json_encode($res);
				
				exit();
			}else{
				$res = array(
					"Error" => true,
					"Message" => "Error signing you up. Please try again." 
				);

				echo json_encode($res);
				
				exit();
			}
		}
	}
}


if (isset($_POST["companysignup"])) {

	require_once "../config/db.php";

	$name = $db->real_escape_string($_POST["companyname"]);
	$email = $db->real_escape_string($_POST["companyemail"]);
	$password = $db->real_escape_string($_POST["companypassword"]);
	$description = $db->real_escape_string($_POST["companydescription"]);
	$website = $db->real_escape_string($_POST["companywebsite"]);
	$phonenumber = $db->real_escape_string($_POST["companyphonenumber"]);
	$address = $db->real_escape_string($_POST["companyaddress"]);
	// $logo = $_FILES["logo"];

	$check_email = $db->query("SELECT * FROM companies WHERE email = '$email'");

	if ($check_email->num_rows > 0) {

		$res = array(
			"Error" => true,
			"Message" => "Please use a different email." 
		);

		echo json_encode($res);

		exit();

	}else{

    $hashPass = password_hash($password, PASSWORD_DEFAULT);

    $signup_query = "INSERT INTO companies (
                      name, description, logo, email, password, address, phonenumber, website) 
                    VALUES ('$name', '$description', 'Dummy', '$email', '$hashPass', '$address', '$phonenumber', '$website')"; 

    $company_is_registered = $db->query($signup_query);

    if ($company_is_registered) {

      $res = array(
        "Error" => false,
        "Message" => "Company registration successful." 
      );

      echo json_encode($res);
      
      exit();
    }else{
      $res = array(
        "Error" => true,
        "Message" => "Error registering the company. Please try again." 
      );

      echo json_encode($res);
      
      exit();
    }
	}
}


?>