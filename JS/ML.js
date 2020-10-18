// sections from the DOM
const sectionOne = document.getElementById("sectionOne");
const bodyContainer = document.querySelector(".bodyContainer");


// progress bar from the DOM
const progressBar = document.querySelector(".progress-done");

// buttons from the DOM
const nextButton1 = document.getElementById("next1");
const nextButton2 = document.getElementById("next2");
const previousButton1 = document.getElementById("prev1");
const previousButton2 = document.getElementById("prev2");
const submitButton = document.getElementById("submit");


// function hides sections
function hideSection(section) {
  section.style.display = "none";
}

// function shows sections
function showSection(section) {
  section.style.removeProperty("display");
}

// hiding all sections except section1 at start
hideSection(sectionTwo);
hideSection(sectionThree);

// adds slide animation after loading
animation("Right");

// function decides which section to hide/show when a button is clicked && scrolls up
// function decides which section to hide/show when a button is clicked && scrolls up && animates right/left
function buttonWorking(
  sectionToHide,
  sectionToShow,
  direction,
  questionsNumber
) {
  let x = true;
  if (direction === "Right") {
    x = validateForm(questionsNumber);
  }
  if (!x) {
    x = true;
    return;
  }
  hideSection(sectionToHide);
  showSection(sectionToShow);

  animation(direction)
  
  window.scrollTo(0, 0);
}

// function adds slide animation
function animation(direction) {
  const bodyContainer = document.querySelector(".bodyContainer");
  bodyContainer.classList.add("animated", `slideIn${direction}`);
  setTimeout(function () {
    bodyContainer.classList.remove("animated", `slideIn${direction}`);
  }, 1000);
}

// function adds eventlisteners to buttons
function buttonAddEventListener(
  button,
  sectionToHide,
  sectionToShow,
  direction,
  questionsNumber
) {
  button.addEventListener(
    "click",
    buttonWorking.bind(
      this,
      sectionToHide,
      sectionToShow,
      direction,
      questionsNumber
    )
  );
}

// adding event listener & sections to buttons
buttonAddEventListener(nextButton1, sectionOne, sectionTwo, "Right", 2);
buttonAddEventListener(nextButton2, sectionTwo, sectionThree, "Right", 4);
buttonAddEventListener(previousButton1, sectionTwo, sectionOne, "Left");
buttonAddEventListener(previousButton2, sectionThree, sectionTwo, "Left");

// function checks if all questions are answered and shows an alert if not
function validateForm(questionsNumber) {
  for (i = 1; i <= questionsNumber; i++) {
    let myForm = document.forms["myForm"][`ML${i}`].value;
    if (myForm.trim() == "") {
      alert(`Question ${i} must be answered`);
      return false;
    }
  }
  return true;
}

// setting progress bar
progressBar.style.width = `${(14 / 19) * 100}%`;

// counting questions based on the user's preference
// totalQuestions = 19

// function updates the progress for every answer change
function updateProgressBar() {
  let textAreaNonEmpty = [
    ...document.querySelectorAll("textarea").values(),
  ].filter((element) => element.value.trim()).length;
  
  let answeredQuestions = document.querySelectorAll(
    `[name*="ML"]:checked`
  ).length;
  progressBar.style.width = `${
    ((textAreaNonEmpty + answeredQuestions + 14) / 19) * 100
  }%`;
}

// adds event listeners to all questions
let radioQuestion = document.querySelectorAll(`[name*="ML"]`);
radioQuestion.forEach((element) => {
  element.addEventListener("change", updateProgressBar);
});

let restQuestions = document.querySelectorAll(`textarea`);
restQuestions.forEach((element) => {
  element.addEventListener("input", updateProgressBar);
});

// To add a class when the radio button is checked
// and remove the class for all other answers
$("input").on("change", function () {
  const Question = $(this).attr("name");
  $(`input[name = "${Question}"]`).closest("div").removeClass("checked");
  $(this).closest("div").addClass("checked");
});

//adds event listener to all answer containers
allQuestions = document.querySelectorAll(`[name="ML4"]`);
allQuestions.forEach((element) => {
  element.parentNode.parentNode.addEventListener("click", () => {
    element.click();
  });
});

window.onload = updateProgressBar;
