let validEmail = false;
const signUpBtn = document.getElementById("signUpBtn");

signUpBtn.addEventListener("click", (e) => {
  e.preventDefault();
  const floatingFirstName = document.getElementById("floatingFirstName");
  const floatingLastName = document.getElementById("floatingLastName");
  const floatingEmail = document.getElementById("floatingEmail");
  const floatingPassword = document.getElementById("floatingPassword");
  const floatingConfirmPassword = document.getElementById(
    "floatingConfirmPassword"
  );

  // First name
  if (validateName(floatingFirstName.value)) {
    floatingFirstName.classList.remove("is-invalid");
    document.getElementById("floatingFirstNameSpan").classList.add("d-none");
  } else {
    document.getElementById("floatingFirstNameSpan").classList.remove("d-none");
    floatingFirstName.classList.add("is-invalid");
  }
  // Last name
  if (validateName(floatingLastName.value)) {
    floatingLastName.classList.remove("is-invalid");
    document.getElementById("floatingLastNameSpan").classList.add("d-none");
  } else {
    document.getElementById("floatingLastNameSpan").classList.remove("d-none");
    floatingLastName.classList.add("is-invalid");
  }

  // Email
  if (validateEmail(floatingEmail.value)) {
    floatingEmail.classList.remove("is-invalid");
    document.getElementById("emailSpan").classList.add("d-none");
  } else {
    document.getElementById("emailSpan").classList.remove("d-none");
    floatingEmail.classList.add("is-invalid");
  }

  // Password
  if (validatePassword(floatingPassword.value)) {
    floatingPassword.classList.remove("is-invalid");
    document.getElementById("passwordSpan").classList.add("d-none");
  } else {
    document.getElementById("passwordSpan").classList.remove("d-none");
    floatingPassword.classList.add("is-invalid");
  }

  // Confirm Password
  if (
    validatePassword(floatingConfirmPassword.value) &&
    floatingConfirmPassword.value == floatingPassword.value
  ) {
    floatingConfirmPassword.classList.remove("is-invalid");
    document
      .getElementById("floatingConfirmPasswordSpan")
      .classList.add("d-none");
  } else {
    document
      .getElementById("floatingConfirmPasswordSpan")
      .classList.remove("d-none");
    floatingConfirmPassword.classList.add("is-invalid");
  }
});
