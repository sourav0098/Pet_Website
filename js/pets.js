// Toggling the sidebar menu
$(document).ready(function () {
  $("#sideBarCollapse").on("click", function () {
    $("#sidebar").toggleClass("active");
  });
});

let date = new Date();
let todaydate = date.getDate();
let month = date.getMonth() + 1;
let year = date.getFullYear();
let maxdate=`${year}-${month}-${todaydate}`
let dobEdit=document.getElementById('dobEdit')
dobEdit.setAttribute('max',maxdate)

var editModal = new bootstrap.Modal(document.getElementById("editModal"));
edits = document.getElementsByClassName("edit");
Array.from(edits).forEach((element) => {
  element.addEventListener("click", (e) => {
    tr = e.target.parentNode.parentNode;
    name = tr.getElementsByTagName("td")[0].innerText;
    dob = tr.getElementsByTagName("td")[1].innerText;
    gender = tr.getElementsByTagName("td")[2].innerText;
    animalType = tr.getElementsByTagName("td")[3].innerText;
    coatLength = tr.getElementsByTagName("td")[4].innerText;
    characteristic = tr.getElementsByTagName("td")[5].innerText;

    snoEdit.value = e.target.id;
    petnameEdit.value = name;
    dobEdit.value = dob;
    if (male.value == gender) {
      male.setAttribute("checked", true);
    } else {
      female.setAttribute("checked", true);
    }
    animalTypeEdit.value = animalType;
    coatEdit.value = coatLength;
    characteristicEdit.value = characteristic;
    // Toggle the Modal
    editModal.toggle();
  });
});

let validPetName=false

let updateBtn=document.getElementById('update-btn');
updateBtn.addEventListener('click',(e)=>{
  let petname=document.getElementById('petnameEdit')
  e.preventDefault();
  if (validateName(petname.value)) {
    validPetName = true;
    petname.classList.remove("is-invalid");
    petname.nextElementSibling.classList.add("d-none");
  } else {
    validPetName = false;
    petname.nextElementSibling.classList.remove("d-none");
    petname.classList.add("is-invalid");
  }

  if(validPetName==true){
    editModal.toggle()
  }
})
