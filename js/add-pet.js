let image='';
let storedFiles=[];
$(document).ready(function () {
  $("#image-input").on("change", handleFileSelect);
  image = $("#image");
});

function handleFileSelect(e) {
  let files = e.target.files;
  let filesArr = Array.prototype.slice.call(files);
  filesArr.forEach(function (f) {
    if (!f.type.match("image.*")) {
      return;
    }
    storedFiles.push(f);

    let reader = new FileReader();
    reader.onload = function (e) {
      var html =
        '<img src="' +
        e.target.result +
        "\" alt='Profile Image'>";
      image.html(html);
    };
    reader.readAsDataURL(f);
  });
}

let validPetName=false;
const addPetBtn=document.getElementById('add-pet');
addPetBtn.addEventListener('click',(e)=>{
  e.preventDefault();
  let petName=document.getElementById('pet-name');

  if(validateName(petName.value)){
    validPetName=true
    petName.classList.remove("is-invalid");
    petName.nextElementSibling.classList.add("d-none");
  }else{
    validPetName=false
    petName.classList.add("is-invalid");
    petName.nextElementSibling.classList.remove("d-none");
  }
})

let date = new Date();
let todaydate = date.getDate();
let month = date.getMonth() + 1;
let year = date.getFullYear();
let maxdate=`${year}-${month}-${todaydate}`
let dob=document.getElementById('dob')
dob.setAttribute('max',maxdate)