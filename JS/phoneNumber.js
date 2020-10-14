const phoneNumber = document.getElementById("Phone");

const pattern = /^01[0-25]\d{8}$/gs;

function validatePhoneNumber() {
  if (!pattern.test(phoneNumber.value)) {
    phoneNumber.style.backgroundColor = "#dc35462c";
  } else { 
    phoneNumber.style.removeProperty("background-color");
  }
}

phoneNumber.addEventListener("input", validatePhoneNumber);
