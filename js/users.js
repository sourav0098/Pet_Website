// Toggling the sidebar menu
$(document).ready(function() {
    $("#sideBarCollapse").on("click", function() {
        $("#sidebar").toggleClass("active");
    });
});

var editModal = new bootstrap.Modal(document.getElementById('editModal'))

edits = document.getElementsByClassName('edit');
Array.from(edits).forEach((element) => {
    element.addEventListener('click', (e) => {
        tr = e.target.parentNode.parentNode;
        fname = tr.getElementsByTagName('td')[0].innerText;
        lname = tr.getElementsByTagName('td')[1].innerText;
        email = tr.getElementsByTagName('td')[2].innerText;
        phone = tr.getElementsByTagName('td')[3].innerText;
        address = tr.getElementsByTagName('td')[4].innerText;
        city = tr.getElementsByTagName('td')[5].innerText;
        province = tr.getElementsByTagName('td')[6].innerText;
        postalcode = tr.getElementsByTagName('td')[7].innerText;
        snoEdit.value = e.target.id;
        fnameEdit.value = fname;
        lnameEdit.value = lname;
        emailEdit.value = email;
        phoneEdit.value = phone;
        addressEdit.value = address;
        cityEdit.value = city;
        provinceEdit.value = province;
        postalcodeEdit.value = postalcode;
        // Toggle the Modal
        editModal.toggle()
    })
})