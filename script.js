var nameError = document.getElementById("name-error")
var emailError = document.getElementById("email-error")
var phoneError = document.getElementById("phone-error")

function validateName() {
  var name = document.getElementById("contact-name").value

  if (name.length == 0) {
    nameError.innerHTML = "Name is required."
    return false
  }
  nameError.innerHTML = ""
  return true
}

function validateEmaile() {
  var email = document.getElementById("contact-email").value
  if (email.length == 0) {
    emailError.innerHTML = "Email is required."
    return false
  }
  if (email.match(/^[a-z0-9]+@[a-z0-9]+\.(com)$/)) {
    emailError.innerHTML = "Email is invalid."
    return false
  }
  emailError.innerHTML = ""
  return true
}

function validatePhone() {
  var phone = document.getElementById("contact-phone").value
  if (phone.length == 0) {
    nameError.innerHTML = "Phone number is required."
    return false
  }
  if (phone.length !== 10) {
    phoneError.innerHTML = "Phone number should be 10 digit number."
    return false
  }

  phoneError.innerHTML = ""
  return true
}
