function loginvalidation(email , password){
    var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var pass=  /^\w{8,150}$/;
    if(email.value.match(mail) && password.value.match(pass)){
        return true;
    }
    else{
        if(!email.value.match(mail))
            alert("The E-mail address should be like \"exampel@gmail.com\".");
        if(!password.value.match(pass))
            alert("The password should be at lest 8 digits and at most 15 digits.");
        return false;
    }
}

function signupvalidation(email , password , repassword , phone){
    var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var pass = /^\w{8,150}$/;
    var tel  = /^([0-9]{11})$/
    var pass1 = password.value;
    var pass2 = repassword.value;
    if(email.value.match(mail) && password.value.match(pass) && phone.value.match(tel) && pass1 == pass2){
        return true;
    }
    else{
        if(!email.value.match(mail))
            alert("The E-mail address should be like \"exampel@gmail.com\".");
        if(!password.value.match(pass))
            alert("The password should be at lest 8 digits and at most 15 digits.");
        if(pass1 != pass2)
            alert("The passwords should be matched.");
        if(!phone.value.match(tel))
            alert("The phone number should be 11 numbers only and no litter allowed.");    
        return false;
    }
}
