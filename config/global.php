<?php  

if (!empty($_SERVER["SCRIPT_FILENAME"]) && "global.php" == basename($_SERVER["SCRIPT_FILENAME"])) {
	header("Location: ../");
	exit();
}

define("DB_SERVER", "localhost");

define("DB_USER", "markm");

define("DB_PASS", "1234");

define("DB_NAME", "jobboard");

define("HOME_URL", "http://localhost/jobboard/");

?>