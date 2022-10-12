$(document).ready(function () {
  $("#sideBarCollapse").on("click", function () {
    $("#sidebar").toggleClass("active");
  });
});

function enableEdit(inputElements) {
  for (let i = 0; i < inputElements.length; i++) {
    inputElements[i].setAttribute("readonly", true);
  }
  // Disable Dropdown
  document.getElementById("province").setAttribute("disabled", true);
  //Disable Image Upload
  document.getElementById("upload-img").style.display = "none";
}

function disableEdit(inputElements) {
  for (let i = 0; i < inputElements.length; i++) {
    inputElements[i].removeAttribute("readonly");
  }
  // Enable Dropdown
  document.getElementById("province").removeAttribute("disabled");
  // Enable Upload Image
  document.getElementById("upload-img").style.display = "block";
}

const editBtn = document.getElementById("editBtn");
const cancelBtn = document.getElementById("cancelBtn");
const saveBtn = document.getElementById("saveBtn");

addEventListener("load", (e) => {
  cancelBtn.style.display = "none";
  saveBtn.style.display = "none";
  document.getElementById("upload-img").style.display = "none";
});

editBtn.addEventListener("click", (e) => {
  e.preventDefault();
  cancelBtn.style.display = "inline-block";
  saveBtn.style.display = "inline-block";
  editBtn.style.display = "none";

  // Removing readonly property from input fields
  let inputElements = document.getElementsByTagName("input");
  disableEdit(inputElements);

  // Focus on email input element
  inputElements[2].focus();
});
cancelBtn.addEventListener("click", (e) => {
  e.preventDefault();
  editBtn.style.display = "inline-block";
  cancelBtn.style.display = "none";
  saveBtn.style.display = "none";

  // Removing readonly property from input fields
  let inputElements = document.getElementsByTagName("input");
  enableEdit(inputElements);
});
saveBtn.addEventListener("click", (e) => {
  e.preventDefault();
  editBtn.style.display = "inline-block";
  cancelBtn.style.display = "none";
  saveBtn.style.display = "none";

  // Removing readonly property from input fields
  let inputElements = document.getElementsByTagName("input");
  enableEdit(inputElements);
});