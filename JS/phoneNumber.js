const phoneNumber = document.getElementById("Phone");
const hint = document.getElementById("hint");

const pattern = /^01[0-25]\d{8}$/gs;


function validatePhoneNumber() {
  if (!pattern.test(phoneNumber.value)) {
    phoneNumber.style.backgroundColor = "#dc35462c";
  } else {
    phoneNumber.style.removeProperty("background-color");
  }
}
phoneNumber.addEventListener("input", validatePhoneNumber);

// hint.style.display = "none"
// function showHint() {
//   hint.style.removeProperty("display")
// }
// function hideHint() {
//   hint.style.display = "none"
// }


// phoneNumber.addEventListener("focus", showHint);
// phoneNumber.addEventListener("blur", hideHint);
$(".leftBtn").on("click",function(){
  $(".bodyContainer").addClass('animated slideInRight');
  setTimeout( function(){
      $(".bodyContainer").removeClass('animated slideInRight');
    }  , 1000 );

})
