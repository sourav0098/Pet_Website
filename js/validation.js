function validateName(name){
    let regex = /^[a-zA-Z ]{2,40}$/;
    let input=name;
    if (regex.test(input)) {
        return true;
    }else{
        return false
    }
}

function validateEmail(email){
    let regex = /^([-_\.a-zA-Z0-9]+)@([-_\.a-zA-Z0-9]+)\.([a-zA-Z0-9]){2,9}$/;
    let input=email;
    if (regex.test(input)) {
        return true;
    }else{
        return false
    }
}

function validatePhone(phone){
    let regex = /^[0-9]{10}$/;
    let input=phone;
    if (regex.test(input)) {
        return true;
    }else{
        return false
    }
}

function validatePostalCode(postalcode){
    let regex = /^[ABCEGHJ-NPRSTVXY]\d[ABCEGHJ-NPRSTV-Z]\d[ABCEGHJ-NPRSTV-Z]\d$/;
    let input=postalcode;
    if (regex.test(input)) {
        return true;
    }else{
        return false
    }
}