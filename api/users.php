<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	require_once "../config/db.php";
} else {
	require_once "config/db.php";
}

if (isset($_POST["useredit"])) {

	$firstname = $db->real_escape_string($_POST["firstname"]);
	$lastname = $db->real_escape_string($_POST["lastname"]);
	$email = $db->real_escape_string($_POST["email"]);
	$phonenumber = $db->real_escape_string($_POST["phonenumber"]);
	$userid = $db->real_escape_string($_POST["userid"]);
	$address = $db->real_escape_string($_POST["address"]);
	$zip = $db->real_escape_string($_POST["zip"]);
	$qualifications = $db->real_escape_string($_POST["qualifications"]);
  $experience = $db->real_escape_string($_POST["experience"]);
  
  $current_user_details = $db->query("SELECT * FROM users WHERE id = '$userid'");

  $current_user_details = $current_user_details->fetch_array();

  $check_email = $db->query("SELECT * FROM users WHERE email = '$email'");
  
  // $user = $check_email->fetch_array();

	if ($check_email->num_rows > 0 && $current_user_details["email"] != $email) {
    
      $res = array(
        "Error" => true,
        "Message" => "Please use a different email." 
      );
  
      echo json_encode($res);
  
      exit();

	} else {

    $update_query = "UPDATE users SET first_name = '$firstname', last_name = '$lastname', email = '$email', phonenumber = '$phonenumber', address = '$address', zip = '$zip', qualifications = '$qualifications', experience = '$experience' WHERE id = '$userid'";
    
    $update = $db->query($update_query);

    if ($update) {

      $_SESSION["firstname"] = $firstname;
      $_SESSION["lastname"] = $lastname;
      $_SESSION["email"] = $email;
      $_SESSION["phonenumber"] = $phonenumber;
      $_SESSION["address"] = $address;
      $_SESSION["zip"] = $zip;
      $_SESSION["qualifications"] = $qualifications;
      $_SESSION["experience"] = $experience;

      $res = array(
        "Error" => false,
        "Message" => "Update successful." 
      );

      echo json_encode($res);
      
      exit();
    } else {
      $res = array(
        "Error" => true,
        "Message" => "Error updating your information. Please try again." 
      );

      echo json_encode($res);
      
      exit();
    }
		
	}
}

function get_user_information($uid){
  global $db;

  $user = $db->query("SELECT
                      u.* 
                    FROM users u
                    WHERE u.id = '$uid'");

  return $user->fetch_assoc();
}

// select distinct a.applicant_id as aid, a.vacancy_id as vid, u.first_name as fname, 
// u.last_name as lname, v.title as vacancy from applications a inner join vacancies v on v.id = a.vacancy_id 
// inner join users u on u.id = a.applicant_id where v.company_id = 14;

function get_applicants_by_company_id($cid) {
  global $db;

  $applicants = $db->query("SELECT DISTINCT 
                              a.applicant_id as aid,
                              a.vacancy_id as vid,
                              u.first_name as fname,
                              u.last_name as lname,
                              v.title as vacancy
                            FROM applications a
                            INNER JOIN vacancies v 
                              ON v.id = a.vacancy_id
                            INNER JOIN users u
                              ON u.id = a.applicant_id
                            WHERE v.company_id = '$cid'");

  return $applicants;
}

?>