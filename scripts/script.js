//js for the preload function of the page
const preloader = document.querySelector("[data-preaload]"); //call "data-preload from preload class"

window.addEventListener("load", function () {
  preloader.classList.add("loaded"); // from the css preload
  document.body.classList.add("loaded");
});

// reservation Form

//validating form fields/elements with specific ID's
function validateForm(formid) {
  var isValid = true;
  // Going through each element selected
  $(formid + " input," + formid + " textarea," + formid + " select").each(
    function () {
      if ($(this).val() == "") isValid = false;
    }
  );
  return isValid;
}

//handling form submission with the name called myForm
$(function () {
  $('form[name="myForm"]').on("submit", function (e) {
    const frm = $(this).attr("id");

    //calling the validation function
    if (!validateForm("#" + frm)) {
      e.preventDefault();
      $("#warning").removeClass("hidden"); // (used in reservation)
      $("#warning p").text(`Field's can't be blank`); //sets the text to the error for Id with warning (used in Reservation and Login)
    }
  });
});
