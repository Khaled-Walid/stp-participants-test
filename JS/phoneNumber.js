const phoneNumber = document.getElementById("Phone");
// const hint = document.getElementById("hint");

const pattern = /^01[0-25]\d{8}$/gs;

hint.style.display = "none"

function validatePhoneNumber() {
  // hint.style.removeProperty("display")
  if (!pattern.test(phoneNumber.value)) {
    phoneNumber.style.backgroundColor = "#dc35462c";
  } else { 
    phoneNumber.style.removeProperty("background-color");
  }
}

phoneNumber.addEventListener("input", validatePhoneNumber);
