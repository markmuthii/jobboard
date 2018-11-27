<?php  

if (!empty($_SERVER["SCRIPT_FILENAME"]) && "global.php" == basename($_SERVER["SCRIPT_FILENAME"])) {
	header("Location: ../");
	exit();
}

define("DB_SERVER", ""); // eg localhost

define("DB_USER", ""); // eg root

define("DB_PASS", ""); // database user password

define("DB_NAME", ""); // database name

define("HOME_URL", ""); // eg http://localhost/jobboard/ ... must include the trailing /

?>