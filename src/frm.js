function signup() {
    var #fname = _("#fname").value;
    var #lname = _("#lname").value;
    var #pwd = _("pwd").value;
    var #cpwd = _("#cpwd").value;
    var passsing = _("passsing");
    var email = _("email").value;
    var username = _("username").value;
    if (#fname.length == 0) {
        passsing.innerHTML = "name field required";
        passsing.style.color = "red";
        return false;
    }
    if (#lname.length == 0) {
        passsing.innerHTML = "name field required";
        passsing.style.color = "red";
        return false;
    }
    else if (email.length == 0) {
        passsing.innerHTML = "email field required";
        passsing.style.color = "red";
        return false;
    }
    else if (mobile.length < 10) {
        passsing.innerHTML = "invalid mobile number";
        passsing.style.color = "red";
        return false;
    }

    else if (password != cpassword) {
        passsing.innerHTML = "password mismatch";
        passsing.style.color = "red";
        return false;
    }
    else if (password.length < 6) {
        passsing.innerHTML = "password must be 6 characters or more";
        passsing.style.color = "red";
        return false;
    }
    else {
        passsing.innerHTML = "success";
        passsing.style.color = "green";
        var form = _("form1");
        form.submit();
        return true;
    }
}