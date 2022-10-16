// Toggling the sidebar menu
$(document).ready(function () {
  $("#sideBarCollapse").on("click", function () {
    $("#sidebar").toggleClass("active");
  });
});

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
