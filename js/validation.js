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

    if (name.value == "") {
        nameErrList += "<li>Name must not be blank</li>"
        name.style.backgroundColor = "rgba(245, 0, 0, 0.4)"
    }
    else if(!name.value.match(/^[a-zA-Z ]+$/)) {
        nameErrList += "<li>You may only use english letters and spaces</li>"
        name.style.backgroundColor = "rgba(245, 0, 0, 0.4)"
    }
    if(name.value.length <= 1) {
        nameErrList += "<li>The name must be longer than one character</li>"
        name.style.backgroundColor = "rgba(245, 0, 0, 0.4)"
    }
    else if (name.value.length >= 30) {
        nameErrList += "<li>The name must be less than or equal to 30 characters</li>"
        name.style.backgroundColor = "rgba(245, 0, 0, 0.4)"
    }
    
    if(nameErrList == "") {
        name.style.backgroundColor = "rgba(0, 245, 0, 0.4)"
    }
    else nameErrList += "<br>"

    document.getElementById("nameError").innerHTML = nameErrList;
}

function emailValidation() {
    let emailErrList = "";
    let email = document.getElementById("email")
    let length = email.value.length;
    if(length > 40) emailErrList += "<li>Email must be 40 characters or less</li>"
    else if(length == 0) emailErrList += "<li>Email must not be blank</li>"
    email.classList = "form-control modifiedEmail"
    document.getElementById("emailError").innerHTML = emailErrList;

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

    console.log(reason.value)
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

    if(!type.value.match(/^[a-zA-Z ]+$/) && !type.value == "") {
        typeErrList += "<li>The type of animal should not be may only use english letters and spaces</li>"
        type.style.backgroundColor = "rgba(245, 0, 0, 0.4)"
    }
    if(type.value.length == 0) {
        typeErrList += "<li>The type of animal should not be blank</li>"
        type.style.backgroundColor = "rgba(245, 0, 0, 0.4)"
    }
    else if(type.value.length > 30) {
        typeErrList += "<li>The type of animal should not be over 30 characters long</li>"
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
    if(!petName.value.match(/^[a-zA-Z ]+$/) && petName.value != "") {
        petNameErrList += "<li>The pet name entered may only contain english letters and spaces</li>"
        petName.style.backgroundColor = "rgba(245, 0, 0, 0.4)"
    }

    if(petName.value.length > 30) {
        petNameErrList += "<li>The pet name should not be over 30 characters long</li>"
        petName.style.backgroundColor = "rgba(245, 0, 0, 0.4)"
    }

    if(petNameErrList == "") petName.style.backgroundColor = "rgba(0, 245, 0, 0.4)"
    if(petName.value == "") petName.style.backgroundColor = "white"

    document.getElementById("petNameError").innerHTML = petNameErrList;
}

function breedValidation() {
    let breedErrList = "";
    let breed = document.getElementById("breed")

    if(!breed.value.match(/^[a-zA-Z ]+$/) && breed.value != "") {
        breedErrList += "<li>The breed entered may only contain english letters and spaces</li>"
        breed.style.backgroundColor = "rgba(245, 0, 0, 0.4)"
    }

    if(breed.value.length > 30) {
        breedErrList += "<li>The breed entered may not be more than 30 characters long</li>"
        breed.style.backgroundColor = "rgba(245, 0, 0, 0.4)"
    }

    if(breedErrList == "" && breed.value != "") {
        breed.style.backgroundColor = "rgba(0, 245, 0, 0.4)"
    }

    
    
    if(breedErrList == "") breed.style.backgroundColor = "rgba(0, 245, 0, 0.4)"
    if(breed.value == "") breed.style.backgroundColor = "white"

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
    else if (message.value.length > 3000) {
        messageErrList += "<li>Your message must not be over 3000 characters</li>"
        message.style.backgroundColor = "rgba(245, 0, 0, 0.4)"

    }

    if(messageErrList == "") message.style.backgroundColor = "rgba(0, 245, 0, 0.4)"
    

    document.getElementById("messageError").innerHTML = messageErrList;
}