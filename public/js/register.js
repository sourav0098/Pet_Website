let validEmail = false;
const signUpBtn = document.getElementById("signUpBtn");

signUpBtn.addEventListener("click", (e) => {
    //e.preventDefault();
    console.log("Register pressed");
    const floatingFirstName = document.getElementById("fname");
    const floatingLastName = document.getElementById("lname");
    const floatingEmail = document.getElementById("email");
    const floatingPassword = document.getElementById("password");
    const floatingConfirmPassword = document.getElementById(
        "password_confirmation"
    );

    // First name
    if (validateName(floatingFirstName.value)) {
        floatingFirstName.classList.remove("is-invalid");
        document
            .getElementById("floatingFirstNameSpan")
            .classList.add("d-none");
    } else {
        document
            .getElementById("floatingFirstNameSpan")
            .classList.remove("d-none");
        floatingFirstName.classList.add("is-invalid");
    }
    // Last name
    if (validateName(floatingLastName.value)) {
        floatingLastName.classList.remove("is-invalid");
        document.getElementById("floatingLastNameSpan").classList.add("d-none");
    } else {
        document
            .getElementById("floatingLastNameSpan")
            .classList.remove("d-none");
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
        e.preventDefault();
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
        e.preventDefault();
        document
            .getElementById("floatingConfirmPasswordSpan")
            .classList.remove("d-none");
        floatingConfirmPassword.classList.add("is-invalid");
    }
});
