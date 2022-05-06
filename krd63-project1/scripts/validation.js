$("#feedback").on("submit", function() {
  var formValid = true;


  if( $("#username").prop("validity").valid ) {
    // hide feedback message
    $("#username-feedback").addClass("hidden");
  } else {
    // show feedback message
    $("#username-feedback").removeClass("hidden");
    $("#submit-feedback").removeClass("hidden");
    formValid = false;
  }

  if( $("#useremail").prop("validity").valid ) {
    // hide feedback message
    $("#useremail-feedback").addClass("hidden");
  } else {
    // show feedback message
    $("#useremail-feedback").removeClass("hidden");
    $("#submit-feedback").removeClass("hidden");

    formValid = false;
  }

  if ( $("#friday").is(":checked") || $("#saturday").is(":checked") || $("#sunday").is(":checked") ) {
    // hide feedback message
    $("#radio-feedback").addClass("hidden");
  } else {
    // show feedback message
    $("#radio-feedback").removeClass("hidden");
    $("#submit-feedback").removeClass("hidden");

    formValid = false;
  }



  // TODO: place all "check component validity snippets" here

  return formValid;
});
