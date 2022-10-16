// Toggling the sidebar menu
$(document).ready(function () {
  $("#sideBarCollapse").on("click", function () {
    $("#sidebar").toggleClass("active");
  });
});

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

function displayNone(element) {
  element.style.display = "none";
}

function displayInlineBlock(element) {
  element.style.display = "inline-block";
}

function displayBlock(element) {
  element.style.display = "block";
}

addEventListener("load", (e) => {
  displayNone(emailCancelBtn);
  displayNone(emailUpdateBtn);
  displayNone(passCancelBtn);
  displayNone(passUpdateBtn);
  displayNone(newPasswordContainer);
  displayNone(confirmPasswordContainer);
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
  e.preventDefault();
  displayInlineBlock(emailEditBtn);
  displayNone(emailCancelBtn);
  displayNone(emailUpdateBtn);
  document.getElementById("email").setAttribute("readonly", true);
});

emailUpdateBtn.addEventListener("click", (e) => {
  e.preventDefault();
  displayInlineBlock(emailEditBtn);
  displayNone(emailCancelBtn);
  displayNone(emailUpdateBtn);
  document.getElementById("email").setAttribute("readonly", true);
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
  e.preventDefault();
  displayInlineBlock(passEditBtn);
  displayNone(passCancelBtn);
  displayNone(passUpdateBtn);

  document.getElementById("old-password").value = "xxxxxxxxxxxxxxxx";

  document.getElementById("old-password").setAttribute("readonly", true);
  document.getElementById("new-password").setAttribute("readonly", true);
  document.getElementById("confirm-password").setAttribute("readonly", true);

  // Hide New Password and Confirm Password
  displayNone(newPasswordContainer);
  displayNone(confirmPasswordContainer);
});

passUpdateBtn.addEventListener("click", (e) => {
  e.preventDefault();
  displayInlineBlock(passEditBtn);
  displayNone(passCancelBtn);
  displayNone(passUpdateBtn);

  document.getElementById("old-password").value = "xxxxxxxxxxxxxxxx";

  document.getElementById("old-password").setAttribute("readonly", true);
  document.getElementById("new-password").setAttribute("readonly", true);
  document.getElementById("confirm-password").setAttribute("readonly", true);

  // Hide New Password and Confirm Password
  displayNone(newPasswordContainer);
  displayNone(confirmPasswordContainer);
});

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
