// sections from the DOM
const sectionOne = document.getElementById("sectionOne");
const sectionTwo = document.getElementById("sectionTwo");
const sectionThree = document.getElementById("sectionThree");
const sectionFour = document.getElementById("sectionFour");
const bodyContainer = document.querySelector(".bodyContainer");
const wishes = document.getElementById("wishes");

// progress bar from the DOM
const progressBar = document.querySelector(".progress-done");

// buttons from the DOM
const nextButton1 = document.getElementById("next1");
const nextButton2 = document.getElementById("next2");
const nextButton3 = document.getElementById("next3");
const previousButton1 = document.getElementById("prev1");
const previousButton2 = document.getElementById("prev2");
const previousButton3 = document.getElementById("prev3");
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
hideSection(sectionFour);
hideSection(wishes);

// adds slide animation after loading
animation("Right");

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

  animation(direction);
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
buttonAddEventListener(nextButton1, sectionOne, sectionTwo, "Right", 3);
buttonAddEventListener(nextButton2, sectionTwo, sectionThree, "Right", 7);
buttonAddEventListener(nextButton3, sectionThree, sectionFour, "Right", 11);
buttonAddEventListener(previousButton1, sectionTwo, sectionOne, "Left");
buttonAddEventListener(previousButton2, sectionThree, sectionTwo, "Left");
buttonAddEventListener(previousButton3, sectionFour, sectionThree, "Left");

// function checks if all questions are answered and shows an alert if not
function validateForm(questionsNumber) {
  for (i = 1; i <= questionsNumber; i++) {
    let myForm = document.forms["myForm"][`question${i}`].value;
    if (myForm == "") {
      alert(`Question ${i} must be answered`);
      return false;
    }
  }
  return true;
}

// bringing the user's preference from browser cookies
// let prefCookie = document.cookie.split("; ");
// let prefObject = prefCookie.reduce((total, currentValue) => {
//   let x = currentValue.split("=");
//   total[x[0]] = x[1];
//   return total;
// }, {});
// let pref = prefObject["techpref"];

// counting questions based on the user's preference
let totalQuestions;

  if (
    pref1 === "Mobile development using flutter " ||
    pref1 === "Internet of things IOT "
  ) {
    totalQuestions = 16;
  } else if (pref1 === "Machine learning ") {
    totalQuestions = 19;
  } else {
    totalQuestions = 14;
  }
  
  if (totalQuestions === 14) {
    showSection(wishes);
  }


// function updates the progress for every answer change
function updateProgressBar() {
  let answeredQuestions = document.querySelectorAll(
    `[name*="question"]:checked`
  ).length;
  progressBar.style.width = `${(answeredQuestions / totalQuestions) * 100}%`;
}

// adds event listeners to all questions
allQuestions = document.querySelectorAll(`[name*="question"]`);
allQuestions.forEach((element) => {
  element.addEventListener("change", updateProgressBar);
});

// To add a class when the radio button is checked
// and remove the class for all other answers
$("input").on("change", function () {
  const Question = $(this).attr("name");
  $(`input[name = "${Question}"]`).closest("div").removeClass("checked");
  $(this).closest("div").addClass("checked");
});

// adds event listener to all answer containers
allQuestions.forEach((element) => {
  element.parentNode.parentNode.addEventListener("click", () => {
    element.click();
  });
});
