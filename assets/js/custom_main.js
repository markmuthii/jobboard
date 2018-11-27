// REGISTRATION SCRIPT
// User
$("#userRegForm").submit((e) => {
  e.preventDefault();
  registerUser();
});

$("#companyRegForm").submit((e) => {
  e.preventDefault();
  registerCompany();
});

$("#loginForm").submit((e) => {
  e.preventDefault();
  logIn();
});

$("form#publishVacancyForm").submit((e) => {
  e.preventDefault();
  addVacancy();
});


$("form#userEditForm").submit((e) => {
  e.preventDefault();
  editProfile();
});

$("#jobApplicationForm").submit((e) => {
  console.log("Form submitted");
  
  e.preventDefault();
  apply();
});


function registerUser() {
  var firstname = $("#userfirstname").val(),
    lastname = $("#userlastname").val(),
    phonenumber = $("#userphonenumber").val(),
    email = $("#useremail").val(),
    username = $("#userusername").val(),
    role = $("#userrole").val(),
    password = $("#userpassword").val();

  var userData = {
    firstname: firstname,
    lastname: lastname,
    phonenumber: phonenumber,
    email: email,
    username: username,
    password: password,
    role: role,
    usersignup: true
  };

  $.ajax({
    type: "POST",
    url: homePath + "api/register.php",
    dataType: "json",
    data: userData,
    success: (res) => {
      console.log(res);
      if (res.Error == false) {
        showFeedback(res.Message);
        setTimeout(() => {
          window.location.replace(homePath + "login.php");
        }, 3000);
      } else {
        showFeedback(res.Message, "error");
      }
    },
    error: (err) => {
      console.log(err);
      showFeedback("Error signing you up. Please check your connection and try again", "error");
    },
    complete: () => {
      console.log("Signup complete")
    }
  });
}

function registerCompany() {
  var companyname = $("#companyname").val(),
    companyemail = $("#companyemail").val(),
    companyphonenumber = $("#companyphonenumber").val(),
    companydescription = $("#companydescription").val(),
    companyaddress = $("#companyaddress").val(),
    companypassword = $("#companypassword").val(),
    companywebsite = $("#companywebsite").val();

  var companyData = {
    companyname: companyname,
    companyemail: companyemail,
    companyphonenumber: companyphonenumber,
    companydescription: companydescription,
    companyaddress: companyaddress,
    companypassword: companypassword,
    companywebsite: companywebsite,
    companysignup: true
  };

  $.ajax({
    type: "POST",
    url: homePath + "api/register.php",
    dataType: "json",
    data: companyData,
    success: (res) => {
      console.log(res);
      if (res.Error == false) {
        showFeedback(res.Message);
        setTimeout(() => {
          window.location.replace(homePath + "login.php");
        }, 3000);
      } else {
        showFeedback(res.Message, "error");
      }
    },
    error: (err) => {
      console.log(err);
      showFeedback("Error registering the company. Please check your connection and try again", "error");
    },
    complete: () => {
      console.log("Company Registration complete")
    }
  });
}

function logIn() {
  var username = $("#emailusername").val(),
    password = $("#loginpassword").val();

  var userData = {
    username: username,
    password: password,
    login: true
  };

  $.ajax({
    type: "POST",
    url: homePath + "api/login.php",
    dataType: "json",
    data: userData,
    success: ((res) => {
      console.log(res);
      if (res.Error == false) {
        showFeedback(res.Message);
        setTimeout(() => {
          if (res.Type == "user") {
            window.location.replace(homePath);
          } else {
            window.location.replace(homePath + "publish.php");
          }
        }, 3000);

      } else {
        showFeedback(res.Message, "error");
      }
    }),
    error: ((err) => {
      console.log(err);
      showFeedback("Error logging you in. Please try again.", "error");
    }),
    complete: () => {
      console.log("Login complete")
    }
  });
}

function addVacancy() {
  var jobtitle = $("#jobtitle").val(),
    location = $("#location").val(),
    salarymin = $("#salarymin").val(),
    salarymax = $("#salarymax").val(),
    experience = $("#experience").val(),
    jobcategory = $("#jobcategory").val(),
    jobtype = $("#jobtype").val(),
    skills = $("#skills").val(),
    keywords = $("#keywords").val(),
    jobdescription = $("#jobdescription").val(),
    companyid = $("#companyid").val();

  keywords = keywords.split(",");

  keywords = JSON.stringify(keywords);

  var vacancyData = {
    jobtitle: jobtitle,
    location: location,
    salarymin: salarymin,
    salarymax: salarymax,
    experience: experience,
    jobcategory: jobcategory,
    jobtype: jobtype,
    skills: skills,
    keywords: keywords,
    jobdescription: jobdescription,
    companyid: companyid,
    jobpublish: true
  };

  $.ajax({
    type: "POST",
    url: homePath + "api/jobs.php",
    dataType: "json",
    data: vacancyData,
    success: (res) => {
      console.log(res);
      if (res.Error == false) {
        showFeedback(res.Message);
        setTimeout(() => {
          document.querySelector("#publishVacancyForm").reset();
        }, 4000);
      } else {
        showFeedback(res.Message, "error");
      }
    },
    error: (err) => {
      console.log(err);
      showFeedback("Error publishing the vacancy. Please check your connection and try again", "error");
    },
    complete: () => {
      console.log("Publish vacancy complete")
    }
  });
}

function apply() {
  var vacancy_id = $("#v_id").val(),
    user_id = $("#u_id").val();
    
  var applicationData = {
    vacancy_id: vacancy_id,
    user_id: user_id,
    jobapply: true
  };

  $.ajax({
    type: "POST",
    url: homePath + "api/jobs.php",
    dataType: "json",
    data: applicationData,
    success: (res) => {
      console.log(res);
      if (res.Error == false) {
        showFeedback(res.Message);
        setTimeout(() => {
          $("#jobApplicationButton").val("APPLIED").prop("disabled", true);
        }, 500);
        document.querySelector("#jobApplicationForm").reset();
      } else {
        showFeedback(res.Message, "error");
      }
    },
    error: (err) => {
      console.log(err);
      showFeedback("Error applying for the job. Please check your connection and try again", "error");
    },
    complete: () => {
      console.log("Job application complete")
    }
  });
}

function showEditForm() {
  // alert("Btn clicked!");
  $('#userInformationWrapper').hide(1000);
  $('#profileEditFormWrapper').show(1000);
}

function editProfile() {
  // alert("Editing!");
  var firstname = $("#editfirstname").val(),
    lastname = $("#editlastname").val(),
    phonenumber = $("#editphonenumber").val(),
    email = $("#editemail").val(),
    address = $("#address").val(),
    qualifications = $("#qualifications").val(),
    experience = $("#experience").val(),
    zip = $("#zipcode").val(),
    userid = $("#edituserid").val(),
    role = $("#editrole").val();

  var userData = {
    firstname: firstname,
    lastname: lastname,
    phonenumber: phonenumber,
    email: email,
    address: address,
    zip: zip,
    qualifications: qualifications,
    experience: experience,
    role: role,
    userid: userid,
    useredit: true
  };

  $.ajax({
    type: "POST",
    url: homePath + "api/users.php",
    dataType: "json",
    data: userData,
    success: (res) => {
      console.log(res);
      if (res.Error == false) {
        showFeedback(res.Message);
        setTimeout(() => {
          window.location.reload();
        }, 3000);
      } else {
        showFeedback(res.Message, "error");
      }
    },
    error: (err) => {
      console.log(err);
      showFeedback("Error editing your information. Please check your connection and try again", "error");
    },
    complete: () => {
      console.log("Edit complete")
    }
  });
}


function showFeedback(feedback, type = "success") {
  var title = type == "error" ? "Error Processing Request" : "Request Processed Successfully";
  if ($(".modal").is(":visible")) {
    $(".modal").modal("hide");
  }
  setTimeout(() => {
    bootbox.alert({
      title: title,
      message: feedback,
      backdrop: true
    });
  }, 500);
}

function refresh() {
  window.location.reload();
}