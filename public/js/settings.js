// Toggling the sidebar menu
$(document).ready(function () {
  $("#sideBarCollapse").on("click", function () {
    $("#sidebar").toggleClass("active");
  });
});

// Show/Hide Password Value
function togglePassword(eyeIcon, passwordInput) {
  // toggle the type attribute
  const type =
    passwordInput.getAttribute("type") === "password" ? "text" : "password";
  passwordInput.setAttribute("type", type);

  // toggle the eye slash icon
  if (eyeIcon.classList.contains("fa-eye")) {
    eyeIcon.classList.remove("fa-eye");
    eyeIcon.classList.add("fa-eye-slash");
  } else {
    eyeIcon.classList.remove("fa-eye-slash");
    eyeIcon.classList.add("fa-eye");
  }
}

function displayNone(element) {
  element.style.display = "none";
}

function displayInlineBlock(element) {
  element.style.display = "inline-block";
}

function displayBlock(element) {
  element.style.display = "block";
}


const emailEditBtn = document.getElementById("emailEditBtn");
const emailCancelBtn = document.getElementById("emailCancelBtn");
const emailUpdateBtn = document.getElementById("emailUpdateBtn");

const passEditBtn = document.getElementById("passEditBtn");
const passCancelBtn = document.getElementById("passCancelBtn");
const passUpdateBtn = document.getElementById("passUpdateBtn");

const newPasswordContainer = document.getElementById("new-password-container");
const confirmPasswordContainer = document.getElementById(
  "confirm-password-container"
);

// On load hide cancel, upload button and new password, confirm password option
addEventListener("load", (e) => {
  displayNone(emailCancelBtn);
  displayNone(emailUpdateBtn);
  displayNone(passCancelBtn);
  displayNone(passUpdateBtn);
  displayNone(newPasswordContainer);
  displayNone(confirmPasswordContainer);
});

// Show and Hide Password on clicking eye icon
const toggleNewEye = document.getElementById("toggleNewEye");
const toggleConfirmEye = document.getElementById("toggleConfirmEye");

const newPass = document.getElementById("new-password");
const confirmPass = document.getElementById("confirm-password");

toggleNewEye.addEventListener("click", (e) => {
  togglePassword(toggleNewEye, newPass);
});

toggleConfirmEye.addEventListener("click", (e) => {
  togglePassword(toggleConfirmEye, confirmPass);
});

// Email input events
emailEditBtn.addEventListener("click", (e) => {
  e.preventDefault();
  displayNone(emailEditBtn);
  displayInlineBlock(emailCancelBtn);
  displayInlineBlock(emailUpdateBtn);
  document.getElementById("email").removeAttribute("readonly");
  email.focus();
});

emailCancelBtn.addEventListener("click", (e) => {
  e.preventDefault()
  location.reload();
});

// Email validation
let validEmail=false;
emailUpdateBtn.addEventListener("click", (e) => {
  e.preventDefault();
  let email=document.getElementById('email')
  if(validateEmail(email.value)){
    validEmail=true;
    email.classList.remove("is-invalid");
    email.nextElementSibling.classList.add("d-none");
  }else{
    validEmail=false;
    email.nextElementSibling.classList.remove("d-none");
    email.classList.add("is-invalid");
  }
  if(validEmail==true){
    displayInlineBlock(emailEditBtn);
    displayNone(emailCancelBtn);
    displayNone(emailUpdateBtn);
    document.getElementById("email").setAttribute("readonly", true);
  }
});

// Password Input Events
passEditBtn.addEventListener("click", (e) => {
  e.preventDefault();
  displayNone(passEditBtn);
  displayInlineBlock(passCancelBtn);
  displayInlineBlock(passUpdateBtn);

  document.getElementById("old-password").removeAttribute("readonly");
  document.getElementById("new-password").removeAttribute("readonly");
  document.getElementById("confirm-password").removeAttribute("readonly");
  document.getElementById("old-password").focus();
  document.getElementById("old-password").value = "";

  // Display New Password and Confirm Password
  displayBlock(newPasswordContainer);
  displayBlock(confirmPasswordContainer);
});

passCancelBtn.addEventListener("click", (e) => {
  e.preventDefault()
  location.reload();
});

// Password Validation
let validPassword=false;
let validConfirmPassword=false;

passUpdateBtn.addEventListener("click", (e) => {
  e.preventDefault();
  let password=document.getElementById("new-password")
  let confirmPassword=document.getElementById("confirm-password")

  if(validatePassword(password.value)){
    validPassword=true;
    password.nextElementSibling.nextElementSibling.classList.add("d-none");
    password.style.borderColor="#ced4da";
  }else{
    validPassword=false;
    password.nextElementSibling.nextElementSibling.classList.remove("d-none");
    password.style.borderColor="red";
  }

  if(password.value===confirmPassword.value){
    validConfirmPassword=true
    confirmPassword.nextElementSibling.nextElementSibling.classList.add("d-none");
    confirmPassword.style.borderColor="#ced4da";
  }else{
    validConfirmPassword=false
    confirmPassword.nextElementSibling.nextElementSibling.classList.remove("d-none");
    confirmPassword.style.borderColor="red";
  }

  if(validPassword==true && validConfirmPassword==true){
    displayInlineBlock(passEditBtn);
    displayNone(passCancelBtn);
    displayNone(passUpdateBtn);
    password.value="";
    confirmPassword.value="";
    document.getElementById("old-password").value = "xxxxxxxxxxxxxxxx";
  
    document.getElementById("old-password").setAttribute("readonly", true);
    document.getElementById("new-password").setAttribute("readonly", true);
    document.getElementById("confirm-password").setAttribute("readonly", true);
    // Hide New Password and Confirm Password
    displayNone(newPasswordContainer);
    displayNone(confirmPasswordContainer);
  }
});