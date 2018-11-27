<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	require_once "../config/db.php";
} else {
	require_once "config/db.php";
}

if (isset($_POST["jobpublish"])) {
	$jobtitle = $db->real_escape_string($_POST["jobtitle"]);
	$location = $db->real_escape_string($_POST["location"]);
	$salarymin = $db->real_escape_string($_POST["salarymin"]);
	$salarymax = $db->real_escape_string($_POST["salarymax"]);
	$experience = $db->real_escape_string($_POST["experience"]);
	$jobcategory = $db->real_escape_string($_POST["jobcategory"]);
	$jobtype = $db->real_escape_string($_POST["jobtype"]);
	$skills = $db->real_escape_string($_POST["skills"]);
	$keywords = $db->real_escape_string($_POST["keywords"]);
	$jobdescription = $db->real_escape_string($_POST["jobdescription"]);
  $companyid = $db->real_escape_string($_POST["companyid"]);
  $salary = array(
    "min" => $salarymin,
    "max" => $salarymax
  );

  $salary = json_encode($salary);

  $vacancy_query = "INSERT INTO vacancies (
                    title, description, company_id, status, location, experience, type, keywords, salary) 
                  VALUES (
                    '$jobtitle', '$jobdescription', '$companyid', '0', '$location', '$experience', '$jobtype', '$keywords', '$salary')"; 

  $isAdded = $db->query($vacancy_query);

  if ($isAdded) {

    $res = array(
      "Error" => false,
      "Message" => "Vacancy added successfully." 
    );

    echo json_encode($res);
    
    exit();
  }else{
    $res = array(
      "Error" => true,
      "Message" => "Error adding vacancy. Please try again." 
    );

    echo json_encode($res);
    
    exit();
  }
}

if (isset($_POST["jobapply"])) {

  $vacancy_id = $db->real_escape_string($_POST["vacancy_id"]);
  $user_id = $db->real_escape_string($_POST["user_id"]);

  // TO-DO: Check if the person applying for this position has applied before to the same position
  $apply = "INSERT INTO applications (applicant_id, vacancy_id) VALUES ('$user_id','$vacancy_id')";
  $apply = $db->query($apply);

  if ($apply) {
    $res = array(
      "Error" => false,
      "Message" => "Application submitted successfully."
    );

    echo json_encode($res);

    exit();
  }else{
    $res = array(
      "Error" => true,
      "Message" => "Error applying for the vacancy. Please try again." 
    );

    echo json_encode($res);
    
    exit();
  }
}

function get_all_jobs() {
  global $db;

  $jobs = $db->query("SELECT 
                        v.*,
                        c.name AS company
                      FROM vacancies v 
                      INNER JOIN companies c 
                      ON v.company_id = c.id 
                      ORDER BY id DESC");

  return $jobs;
}

function get_job_by_id($id) {
  global $db;

  $job = $db->query("SELECT 
                      v.*,
                      c.name AS company,
                      c.website AS website
                    FROM vacancies v 
                    INNER JOIN companies c
                    ON v.company_id = c.id
                    WHERE v.id = '$id'");
        
  return $job->fetch_assoc();
}

// Get the vacancies that a user has applied for
function get_jobs_applied_by($u_id) {
  global $db;
  // select distinct v.* from vacancies v INNER JOIN applications a on v.id = a.vacancy_id where a.applicant_id = 3;
  $jobs = $db->query("SELECT
                      DISTINCT v.*,
                      c.name AS company
                      FROM vacancies v
                      INNER JOIN applications a 
                        ON v.id = a.vacancy_id 
                      INNER JOIN companies c
                        ON v.company_id = c.id
                      WHERE a.applicant_id = '$u_id'");

  return $jobs;
}