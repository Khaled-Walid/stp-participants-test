const phoneNumber = document.getElementById("Phone");
const hint = document.getElementById("hint");

const pattern = /^01[0-25]\d{8}$/gs;

hint.style.display = "none"

function validatePhoneNumber() {
  if (!pattern.test(phoneNumber.value)) {
    phoneNumber.style.backgroundColor = "#dc35462c";
  } else { 
    phoneNumber.style.removeProperty("background-color");
  }
}

function showHint() {
  hint.style.removeProperty("display")
}
function hideHint() {
  hint.style.display = "none"
}

phoneNumber.addEventListener("input", validatePhoneNumber);

phoneNumber.addEventListener("focus", showHint);
phoneNumber.addEventListener("blur", hideHint);
