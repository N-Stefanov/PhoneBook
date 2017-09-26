function ValidateForm() {
    let firstName,
        lastName,
        mNumber,
        hNumber;
    var regex = new RegExp('^\\d+$');
    firstName = document.getElementById('firstName').value;
    lastName = document.getElementById('lastName').value
    mNumber = document.getElementById('mNumber').value
    hNumber = document.getElementById('hNumber').value
    if (firstName.length < 3) {
        document.getElementById("div1").className = "show";
        document.getElementById('firstName').style.borderColor = "#ff3333";
        return false;
    } else {
        document.getElementById("div1").className = "hidden";
        document.getElementById('firstName').style.borderColor = "#4dff77";
    }
    if (lastName.length < 3) {
        document.getElementById("div2").className = "show";
        document.getElementById('lastName').style.borderColor = "#ff3333";
        return false;
    } else {
        document.getElementById("div2").className = "hidden";
        document.getElementById('lastName').style.borderColor = "#4dff77";
    }

    if (!regex.test(mNumber)) {
        document.getElementById("div3").className = "show";
        document.getElementById('mNumber').style.borderColor = "#ff3333";
        return false;
    } else {
        document.getElementById("div3").className = "hidden";
        document.getElementById('mNumber').style.borderColor = "#4dff77";
    }

    if (!regex.test(hNumber)) {
        document.getElementById("div4").className = "show";
        document.getElementById('hNumber').style.borderColor = "#ff3333";
        return false;
    } else {
        document.getElementById("div4").className = "hidden";
        document.getElementById('hNumber').style.borderColor = "#4dff77";
    }
}

var remove = function() {
    this.parentNode.remove();
};

var lis = document.querySelectorAll('div');
var button = document.querySelectorAll('button');

for (var i = 0, len = lis.length; i < len; i++) {
    button[i].addEventListener('click', remove, false);
}