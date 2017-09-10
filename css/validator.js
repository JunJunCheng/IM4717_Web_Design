function chkName(event) {
    var myName = event.currentTarget;

    var pos = myName.value.search(/[^A-Za-z\s]/);

    if (pos != -1) {
        alert("The name you entered is not in the correct form. \n");
        myName.focus();
        myName.select();
        return false;
    }
}

function chkEmail(event) {
    var myEmail = event.currentTarget;

    var pos = myEmail.value.search(/^[\w.-]+@([\w-]+\.){1,3}[A-Za-z]{2,3}$/);

    if (pos != 0) {
        alert("The email you entered (" + myEmail.value +
            ") is not in the correct form.");
        myEmail.focus();
        myEmail.select();
        return false;
    }
}

function chkContact(event) {
    var myContact = event.currentTarget;

    var pos = myContact.value.search(/^\d{8,}$/);

    if (pos != 0) {
        alert("The contact number you entered is not in the correct form. \n");
        myName.focus();
        myName.select();
        return false;
    }
}


var nameNode = document.getElementById("Name");
var emailNode = document.getElementById("Email");
var dateNode = document.getElementById("Date");
var expNode = document.getElementById("Exp");
var contactNode = document.getElementById("Contact");
nameNode.addEventListener("change", chkName, false);
emailNode.addEventListener("change", chkEmail, false);
dateNode.addEventListener("change", chkDate,false);
expNode.addEventListener("change", chkExp, false);
contactNode.addEventListener("change", chkContact, false);
