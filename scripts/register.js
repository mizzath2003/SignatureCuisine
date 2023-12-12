//used jquery

const regForm = document.getElementById("Registerform");
regForm.addEventListener("submit", function (event) {
  //only prevent if the submition is not valid
  if (checkInputs() != true) {
    event.preventDefault();
  }
});

function checkInputs() {
  // Your validation logic here
  // This function will be called when the form is submitted.

  // trim to remove the whitespaces
  const fnameValue = document.getElementById("fname").value.trim();
  const lnameValue = document.getElementById("lname").value.trim();
  const usernameValue = document.getElementById("username").value.trim();
  const phoneValue = document.getElementById("phone").value.trim();
  const emailValue = document.getElementById("email").value.trim();
  const passwordValue = document.getElementById("password").value.trim();
  const password2Value = document.getElementById("password2").value.trim();

  //One line if condition - (condition)? true : false
  const isfnameValue =
    fnameValue !== ""
      ? ($("#fnameError").text(""), true)
      : ($("#fnameError").text("First name cannot be blank"), false);
  const islnameValue =
    lnameValue !== ""
      ? ($("#lnameError").text(""), true)
      : ($("#lnameError").text("Last name cannot be blank"), false);
  const isUsernameValid =
    usernameValue !== ""
      ? ($("#userNameError").text(""), true)
      : ($("#userNameError").text("Username cannot be blank"), false);
  const isPhoneValid =
    phoneValue !== ""
      ? ($("#phoneError").text(""), true)
      : ($("#phoneError").text("Phone cannot be blank"), false);
  const isEmailValid =
    emailValue !== ""
      ? ($("#emailError").text(""), true)
      : ($("#emailError").text("Email cannot be blank"), false);
  const isPasswordValid =
    passwordValue !== ""
      ? ($("#passwordError").text(""), true)
      : ($("#passwordError").text("Password cannot be blank"), false);

  //match passwords
  const isPassword2Valid =
    password2Value != ""
      ? passwordValue == password2Value
        ? ($("#password2Error").text(""), true)
        : ($("#password2Error").text("Passwords do not match"), false)
      : ($("#password2Error").text("Confirm password cannot be blank"), false);

  //Check if username already exists in database
  $.post("dbh/userExists.php", { username: usernameValue }, function (result) {
    if (result != "success")
      $("#userNameError").text("Username already exists"), false;
  });

  return (
    isPhoneValid &&
    isfnameValue &&
    islnameValue &&
    isUsernameValid &&
    isEmailValid &&
    isPasswordValid &&
    isPassword2Valid
  );
}

//(condition)?true:false;
//if (condition) true;
