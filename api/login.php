<?php 

if (isset($_POST["login"])) {

	session_start();

	require_once "../config/db.php";

	$username = $db->real_escape_string($_POST["username"]);
	$password = $db->real_escape_string($_POST["password"]);

  // if username for users
	$user = $db->query("SELECT * FROM users WHERE username = '$username'");

	if ($user->num_rows > 0) {

		$user = $user->fetch_array();

		if (password_verify($password, $user["password"])) {

			$_SESSION["firstname"] = $user["first_name"];
			$_SESSION["lastname"] = $user["last_name"];
			$_SESSION["user_id"] = $user["id"];
			$_SESSION["username"] = $user["username"];
			$_SESSION["email"] = $user["email"];
			$_SESSION["phonenumber"] = $user["phonenumber"];
			$_SESSION["role"] = $user["role"];
      $_SESSION["type"] = "user";
			
			$res = array(
				"Error" => false,
        "Message" => "Login successful.",
        "Type" => "user",
				"Role" => $_SESSION["role"] 
			);

			echo json_encode($res);

			exit();
		}else{

			$res = array(
				"Error" => true,
				"Message" => "Invalid credentials."
			);

			echo json_encode($res);

			exit();
		}
		
	}else{
    // if email for companies
	  $company = $db->query("SELECT * FROM companies WHERE email = '$username'");

    if ($company->num_rows > 0) {

      $company = $company->fetch_array();
  
      if (password_verify($password, $company["password"])) {
  
        $_SESSION["companyname"] = $company["name"];
        $_SESSION["companyid"] = $company["id"];
        $_SESSION["email"] = $company["email"];
        $_SESSION["description"] = $company["description"];
        $_SESSION["logo"] = $company["logo"];
        $_SESSION["address"] = $company["address"];
        $_SESSION["phonenumber"] = $company["phonenumber"];
        $_SESSION["website"] = $company["website"];
        $_SESSION["type"] = "company";
        
        $res = array(
          "Error" => false,
          "Message" => "Login successful.",
          "Type" => "company" 
        );
  
        echo json_encode($res);
  
        exit();
      }else{
  
        $res = array(
          "Error" => true,
          "Message" => "Invalid credentials."
        );
  
        echo json_encode($res);
  
        exit();
      }
		
	} else {
    $res = array(
      "Error" => true,
      "Message" => "Invalid credentials."
    );

    echo json_encode($res);

    exit();
  }

}

}else{
	header("Location: ../");
	exit();
}

?>