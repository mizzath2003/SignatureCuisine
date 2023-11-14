const regForm = document.getElementById("Registerform");
regForm.addEventListener("submit", function (event) {
  //only prevent if the submition is not valid
  if (checkInputs() != true) {
    event.preventDefault();
  }
});

function checkInputs() {
  // trim to remove the whitespaces
  const usernameValue = document.getElementById("username").value.trim();
  const emailValue = document.getElementById("email").value.trim();
  const passwordValue = document.getElementById("password").value.trim();
  const password2Value = document.getElementById("password2").value.trim();

  // Check username
  let isUsernameValid;
  if (usernameValue != "") {
    $("#userNameError").text("");
    isUsernameValid = true;
  } else {
    $("#userNameError").text("Username cannot be blank");
    isUsernameValid = false;
  }

  // Check email
  let isEmailValid;
  if (emailValue != "") {
    $("#emailError").text("");
    isEmailValid = true;
  } else {
    $("#emailError").text("Email cannot be blank");
    isEmailValid = false;
  }

  // Check password
  let isPasswordValid;
  if (passwordValue != "") {
    $("#passwordError").text("");
    isPasswordValid = true;
  } else {
    $("#passwordError").text("Password cannot be blank");
    isPasswordValid = false;
  }

  // Match passwords
  let isPassword2Valid;
  if (password2Value != "") {
    if (passwordValue == password2Value) {
      $("#password2Error").text("");
      isPassword2Valid = true;
    } else {
      $("#password2Error").text("Passwords do not match");
      isPassword2Valid = false;
    }
  } else {
    $("#password2Error").text("Confirm password cannot be blank");
    isPassword2Valid = false;
  }

  // Return the overall validity
  return isUsernameValid && isEmailValid && isPasswordValid && isPassword2Valid;
}
