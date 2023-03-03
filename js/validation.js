/*
  Your Name* = name
  Mobile Number* = number
  Email Address* = email
  Reason for contact (Lost Animal/Found Animal)* = reason
  Type of Animal* = typeOfAnimal
  Pet Name = petName
  Breed = breed
  Picture = image
  Message* = message
*/

function nameValidation() { 
    let nameErrList = "";
    let name = document.getElementById("name")

    if(!name.value.match(/^[a-zA-Z ]+$/)) {
        nameErrList += "<li>You may only use english letters and spaces</li>"
        name.style.backgroundColor = "rgba(245, 0, 0, 0.4)"
    }
    if(name.value.length == 1) {
        nameErrList += "<li>The name must be longer than one character</li>"
        name.style.backgroundColor = "rgba(245, 0, 0, 0.4)"
    }
    
    if(nameErrList == "") {
        name.style.backgroundColor = "rgba(0, 245, 0, 0.4)"
    }
    else nameErrList += "<br>"

    document.getElementById("nameError").innerHTML = nameErrList;
}

function emailValidation() {
    let email = document.getElementById("email")
    email.classList = "modifiedEmail"
}

function numberValidation() {
    let numberErrList = "";
    let number = document.getElementById("number");

    if(!number.value.match(/^08[35679]+/)) {
        numberErrList += "<li>Must start with 083, 085, 086, 087 or 089</li>"
        number.style.backgroundColor = "rgba(245, 0, 0, 0.4)"
    }
    if(!number.value.match(/^[0-9]*$/)) {
        numberErrList += "<li>Must contain numbers only</li>"
        number.style.backgroundColor = "rgba(245, 0, 0, 0.4)"
    }
    if(number.value.match(/^[ -]+$/)) {
        numberErrList += "<li>You do not need to separate out the numbers with spaces or -</li>"
        number.style.backgroundColor = "rgba(245, 0, 0, 0.4)"
    }
    if(!number.value.match(/^\d{10}$/)) {
        numberErrList += "<li>Must be 10 digits long</li>"
        number.style.backgroundColor = "rgba(245, 0, 0, 0.4)"
    }

    if(numberErrList == "") {
        number.style.backgroundColor = "rgba(0, 245, 0, 0.4)"
    }
    else numberErrList += "<br>"

    document.getElementById("numberError").innerHTML = numberErrList;
}

function reasonValidation() {
    let reason = document.getElementById("reason")
    let errMessage = "";

    if(reason.value == "" ) {
        errMessage += "<li>You must choose a valid reason for contact</li>"
        reason.style.backgroundColor = "rgba(245, 0, 0, 0.4)"
    }
    if(errMessage == "") {
        reason.style.backgroundColor = "rgba(0, 245, 0, 0.4)"
    }
    else errMessage += "<br>"

    document.getElementById("reasonError").innerHTML = errMessage;

}

function typeValidation() {
    let typeErrList = "";
    let type = document.getElementById("typeOfAnimal")

    if(!type.value.match(/^[a-zA-Z ]+$/)) {
        typeErrList += "<li>You may only use english letters and spaces</li>"
        type.style.backgroundColor = "rgba(245, 0, 0, 0.4)"
    }

    if(typeErrList == "") {
        type.style.backgroundColor = "rgba(0, 245, 0, 0.4)"
    }
    else typeErrList += "<br>"

    document.getElementById("typeError").innerHTML = typeErrList;

}

function petNameValidation() {
    let petNameErrList = "";
    let petName = document.getElementById("petName")

    if(!petName.value.match(/^[a-zA-Z ]+$/)) {
        petNameErrList += "<li>You may only use english letters and spaces</li>"
        petName.style.backgroundColor = "rgba(245, 0, 0, 0.4)"
    }

    if(petNameErrList == "") {
        petName.style.backgroundColor = "rgba(0, 245, 0, 0.4)"
    }
    else petNameErrList += "<br>"

    document.getElementById("petNameError").innerHTML = petNameErrList;
}

function breedValidation() {
    let breedErrList = "";
    let breed = document.getElementById("breed")

    if(!breed.value.match(/^[a-zA-Z ]+$/)) {
        breedErrList += "<li>You may only use english letters and spaces</li>"
        breed.style.backgroundColor = "rgba(245, 0, 0, 0.4)"
    }

    if(breedErrList == "") {
        breed.style.backgroundColor = "rgba(0, 245, 0, 0.4)"
    }
    else breedErrList += "<br>"

    document.getElementById("breedError").innerHTML = breedErrList;
}

function pictureValidation() {
    
}

function messageValidation() {
    let messageErrList = "";
    let message = document.getElementById("message")

    if(message.value == "") {
        messageErrList += "<li>Your message must not be empty</li>"
        message.style.backgroundColor = "rgba(245, 0, 0, 0.4)"
    }

    if(messageErrList == "") {
        message.style.backgroundColor = "rgba(0, 245, 0, 0.4)"
    }
    else messageErrList += "<br>"

    document.getElementById("messageError").innerHTML = messageErrList;
}