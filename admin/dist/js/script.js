import { fetchContents } from "./utilities.js";

let contentWrapper = document.querySelector(".content-wrapper");

document.querySelector("#home").addEventListener("click", function (e) {
  fetchContents("indexPage.php", "");
});

document.querySelector("#viewExam").addEventListener("click", function (e) {
  fetchContents("exam/viewExam.php", "");
});

document.addEventListener("click", function (e) {
  const { id } = e.target;
  if (id == "chooseAnswerText" || id == "chooseAnswerPhoto") {
    const answer = document.querySelectorAll(".choice-text");
    const answerImage = document.querySelectorAll(".choice-img");

    e.target.value = "1";
    id == "chooseAnswerText"
      ? (document.querySelector("#chooseAnswerPhoto").value = "0")
      : (document.querySelector(" #chooseAnswerText").value = "0");
    answerImage.forEach((item) => {
      item.style.display = id == "chooseAnswerText" ? "none" : "block";
    });

    answer.forEach((item) => {
      item.style.display = id == "chooseAnswerText" ? "block" : "none";
    });
  }

  switch (id) {
    case "addQuestion":
      fetchContents("exam/addExam.php", "");
      break;
    case "viewQuestion":
      fetchContents("exam/viewExam.php", "");
      break;
    case "generateCode":
      fetchContents("exam/generateCode.php", "");
      break;
    case "addQuestionBtn":
      addQuestion(e);
      break;
  }
});

document.addEventListener("change", function (e) {
  // attemp to find if the element is a file input
  if (e.target.type == "file") {
    changeImage(e);
  }
});

function changeImage(e) {
  var src = URL.createObjectURL(e.target.files[0]);
  name = e.target.dataset.name;
  let box = e.target.parentNode.previousElementSibling;
  box.style.background = `url('${src}')`;
  box.style.backgroundSize = "cover";
  box.style.backgroundPosition = "center";
}

function addQuestion(e) {
  e.preventDefault();
  let questionText = document.querySelector("#question-text")?.value;
  let questionImage = document.querySelector("#question-image")?.files[0];
  let isQuestionText = document.querySelector("#chooseAnswerText")?.value;

  if (!questionText) {
    alert("Ugomba kwinjiza ikibazo");
    return;
  }

  let choice1, choice2, choice3, choice4;
  if (isQuestionText == "1") {
    choice1 = document.querySelector("#choice1")?.value;
    choice2 = document.querySelector("#choice2")?.value;
    choice3 = document.querySelector("#choice3")?.value;
    choice4 = document.querySelector("#choice4")?.value;
  } else {
    choice1 = document.querySelector("#choice-1-photo")?.files[0];
    choice2 = document.querySelector("#choice-2-photo")?.files[0];
    choice3 = document.querySelector("#choice-3-photo")?.files[0];
    choice4 = document.querySelector("#choice-4-photo")?.files[0];
  }
  let correctChoice = document.querySelector("#correct-choice")?.value;
  console.log(choice1, choice2, choice3, choice4);
  if (!choice1 || !choice2 || !choice3 || !choice4 || !correctChoice) {
    alert("Ugomba kwinjiza Ibisubizo byose");
    return;
  }

  let formData = new FormData();
  let question = questionText ? questionText : questionImage;
  formData.append("question-text", question);
  formData.append("choice1", choice1);
  formData.append("choice2", choice2);
  formData.append("choice3", choice3);
  formData.append("choice4", choice4);
  formData.append("correct-choice", correctChoice);
  formData.append("question-photo", questionImage);
  formData.append("areAnswersImages", isQuestionText == "1" ? "0" : "1");
  formData.append("isQuestionPhoto", questionImage ? "1" : "0");

  fetch("exam/addQuestion.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then((data) => {
      var Toast = Swal.mixin({
        toast: true,
        position: "top",
        showConfirmButton: false,
        timer: 3000,
      });
      if (data.trim() == "1") {
        Toast.fire({
          icon: "success",
          title: "Kongera ikibazo byagenze neza",
        });

        fetchContents("exam/viewExam.php", "");
      } else {
        Toast.fire({
          icon: "error",
          title: "Kongera ikibazo ntago byakunze, Ongera mukanya",
        });
      }
    });
}
