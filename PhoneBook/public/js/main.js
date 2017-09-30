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
    } else {
        document.getElementById("div1").className = "hidden";
        document.getElementById('firstName').style.borderColor = "#4dff77";
    }
    if (lastName.length < 3) {
        document.getElementById("div2").className = "show";
        document.getElementById('lastName').style.borderColor = "#ff3333";
    } else {
        document.getElementById("div2").className = "hidden";
        document.getElementById('lastName').style.borderColor = "#4dff77";
    }

    if (!regex.test(mNumber)) {
        document.getElementById("div3").className = "show";
        document.getElementById('mNumber').style.borderColor = "#ff3333";
        if (mNumber.length < 10 || mNumber.length > 10) {
            document.getElementById("div4").className = "show";
            document.getElementById('mNumber').style.borderColor = "#ff3333";
        }

    } else {
        document.getElementById("div3").className = "hidden";
        document.getElementById('mNumber').style.borderColor = "#4dff77";
    }

    if (!regex.test(hNumber)) {
        document.getElementById("div5").className = "show";
        document.getElementById('hNumber').style.borderColor = "#ff3333";
        if (hNumber.length < 10 || hNumber.length > 10) {
            document.getElementById("div6").className = "show";
            document.getElementById('hNumber').style.borderColor = "#ff3333";
        }
    } else {
        document.getElementById("div5").className = "hidden";
        document.getElementById('hNumber').style.borderColor = "#4dff77";
    }
    var isHasClass = document.getElementsByClassName('show');
    if (isHasClass.length > 0) {
        document.getElementById("btn").disabled = true;
    } else {
        document.getElementById("btn").disabled = false;
    }
}

function deleteRow(row) {
    var i = row.parentNode.parentNode.rowIndex;
    document.getElementById("myTable").deleteRow(i);
}