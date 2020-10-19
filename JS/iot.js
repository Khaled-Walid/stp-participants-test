// sections from the DOM
const sectionOne = document.getElementById("sectionOne");
const bodyContainer = document.querySelector(".bodyContainer");


// progress bar from the DOM
const progressBar = document.querySelector(".progress-done");

// buttons from the DOM
const submitButton = document.getElementById("submit");

// adds slide animation after loading
animation("Right");

// function checks if all questions are answered and shows an alert if not
function validateForm(questionsNumber) {
  for (i = 1; i <= questionsNumber; i++) {
    let myForm = document.forms["myForm"][`iot${i}`].value;
    if (myForm.trim() == "") {
      alert(`Question ${i} must be answered`);
      return false;
    }
  }
  return true;
}

// setting progress bar
progressBar.style.width = `${(14 / 16) * 100}%`;

// counting questions based on the user's preference
// totalQuestions = 16

// function updates the progress for every answer change
function updateProgressBar() {
  let textAreaNonEmpty = [
    ...document.querySelectorAll("textarea").values(),
  ].filter((element) => element.value.trim()).length;
  progressBar.style.width = `${
    ((textAreaNonEmpty + 14) / 16) * 100
  }%`;
}
let restQuestions = document.querySelectorAll(`textarea`);
restQuestions.forEach((element) => {
  element.addEventListener("input", updateProgressBar);
});

// function adds slide animation
function animation(direction) {
  let x;
  let y;
  if (direction === "Right") {x = "slide-in"; y="slider"}
  else if(direction === "Left") {x = `slide-out`; y="slider2"}
  const bodyContainer = document.querySelector(".bodyContainer")
  bodyContainer.removeAttribute("class")
  setTimeout(function () {
    bodyContainer.classList.add("bodyContainer", `${y}`, `${x}`);
  }, 10);
  setTimeout(function(){
    bodyContainer.classList.add("width-fix");
  },10)
}