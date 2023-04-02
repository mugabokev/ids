// const quizData = [
//   {
//     question: "1. Which language runs in a web browser?",
//     a: "https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/71L0EbialtL.jpg",

//     b: "https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/71L0EbialtL.jpg",

//     c: "https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/71L0EbialtL.jpg",

//     d: "https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/71L0EbialtL.jpg",

//     correct: "d",
//     photos: true,
//     onePhoto: false,
//   },
//   {
//     question: "2. What does CSS stand for?",
//     a: "Central Style Sheets",
//     b: "Cascading Style Sheets",
//     c: "Cascading Simple Sheets",
//     d: "Cars SUVs Sailboats",
//     correct: "b",
//     photos: false,
//     onePhoto:
//       "https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/71L0EbialtL.jpg",
//   },
//   {
//     question: "3. What does HTML stand for?",
//     a: "Hypertext Markup Language",
//     b: "Hypertext Markdown Language",
//     c: "Hyperloop Machine Language",
//     d: "Helicopters Terminals Motorboats Lamborginis",
//     correct: "a",
//     photos: false,
//     onePhoto: false,
//   },
//   {
//     question: "4. What year was JavaScript launched?",
//     a: "1996",
//     b: "1995",
//     c: "1994",
//     d: "none of the above",
//     correct: "b",
//     photos: false,
//     onePhoto: false,
//   },
// ];

let quizData;
const quiz = document.getElementById("quiz");
const answerEls = document.querySelectorAll(".answer");
const questionEl = document.getElementById("question");
const a_text = document.getElementById("a_text");
const b_text = document.getElementById("b_text");
const c_text = document.getElementById("c_text");
const d_text = document.getElementById("d_text");
const nextBtn = document.getElementById("submit");
const prevBtn = document.getElementById("prev");

const COUNTER_KEY = "my-counter";
function timer(today) {
  const second = 1000,
    minute = second * 60,
    hour = minute * 60;

  //end

  const countDown = new Date(today).getTime(),
    x = setInterval(function () {
      const now = new Date().getTime(),
        distance = countDown - now;
      let m = document.getElementById("minutes");
      let s = document.getElementById("seconds");

      if (m && s) {
        document.getElementById("minutes").innerText = Math.floor(
          (distance % hour) / minute
        );
        document.getElementById("seconds").innerText = Math.floor(
          (distance % minute) / second
        );
      }

      //do something later when time is reached

      if (distance < 11000) {
        document.querySelector(".questionHeader")?.classList.add("warning");
      }

      window.localStorage.setItem(
        COUNTER_KEY,
        Math.floor((distance % hour) / minute)
      );

      if (distance < 1200) {
        document.getElementById("minutes").innerText = "00";
        document.getElementById("seconds").innerText = "00";
        document.querySelector(".questionHeader").classList.remove("warning");

        document.querySelector(".questionHeader").classList.add("error");
        window.localStorage.removeItem("counter");
        nextBtn.style.opacity = 0.5;
        nextBtn.style.cursor = "not-allowed";
        nextBtn.disabled = true;
        prevBtn.style.opacity = 0.5;
        prevBtn.style.cursor = "not-allowed";
        prevBtn.disabled = true;
        clearInterval(x);
        localStorage.setItem("answers", JSON.stringify(answers));
        window.localStorage.removeItem("counter");

        setTimeout(() => {
          alert("Igihe cyaranjyiye, ujyiye kujyanwa kuri paje y'ibisubizo");
          window.location = "result.html";
        }, 2000);
      }
      //seconds
    }, 0);
}

document.addEventListener("DOMContentLoaded", () => {
  // attempt to fetch data from result.php

  fetch("result.php")
    .then((response) => response.json())
    .then((data) => {
      // if data is returned, display it
      if (data) {
        data.forEach((question) => {
          delete Object.assign(question, { a: question.choice1 })["choice1"];
          delete Object.assign(question, { b: question.choice2 })["choice2"];
          delete Object.assign(question, { c: question.choice3 })["choice3"];
          delete Object.assign(question, { d: question.choice4 })["choice4"];
          delete Object.assign(question, { correct: question.correctChoice })[
            "correctChoice"
          ];
          delete Object.assign(question, { question: question.questionText })[
            "questionText"
          ];
          question["onePhoto"] = question["questionPhoto"];
          delete question["questionPhoto"];

          // if (question["onePhoto"].includes("uploads")) {
          //   question["photos"] = changePhotoPath(question["onePhoto"]);
          // }
          question.photos =
            question.a.includes(".jpg") ||
            question.b.includes(".png") ||
            question.c.includes(".jpeg") ||
            question.d.includes(".gif");

          if (question.photos) {
            console.log(question.a);
          }
        });

        quizData = data.sort(() => Math.random() - 0.5).splice(0, 20);
        localStorage.setItem("quizData", JSON.stringify(quizData));

        loadQuiz();
        if (window.localStorage.getItem("counter") == null) {
          let today = new Date();
          let min = today.getMinutes();
          today.setMinutes(min + 20);
          window.localStorage.setItem("counter", today);
          timer(today);
        } else {
          let today = window.localStorage.getItem("counter");
          timer(today);
        }
        // document.querySelector("#result").innerHTML = data;
      }
    });
});

let answers = [];

let currentQuiz = 0;
let score = 0;

function loadQuiz() {
  deselectAnswers();
  if (currentQuiz === 0) {
    prevBtn.style.display = "none";
  } else {
    prevBtn.style.display = "inline-block";
  }
  if (currentQuiz === quizData.length - 1) {
    nextBtn.innerText = "Soza Ikizamini";
  }

  const currentQuizData = quizData[currentQuiz];
  questionEl.innerText = currentQuizData.question;
  if (currentQuizData.onePhoto !== "NULL") {
    document.querySelector(
      "#photo"
    ).src = `admin/uploads/${currentQuizData.onePhoto}`;
    document.querySelector("#photo").style.display = "block";
  } else {
    document.querySelector("#photo").style.display = "none";
  }
  if (currentQuizData.photos === true) {
    document.querySelector("ul").classList.add("photoGrid");
    console.log(`admin / uploads / ${currentQuizData.a}`);
    a_text.innerHTML = `<img src="admin/uploads/${currentQuizData.a}" alt=""/>`;
    b_text.innerHTML = `<img src="admin/uploads/${currentQuizData.b}" alt=""/>`;
    c_text.innerHTML = `<img src="admin/uploads/${currentQuizData.c}" alt=""/>`;
    d_text.innerHTML = `<img src="admin/uploads/${currentQuizData.d}" alt=""/>`;
  } else {
    document.querySelector("ul").classList.remove("photoGrid");

    a_text.innerText = currentQuizData.a;
    b_text.innerText = currentQuizData.b;
    c_text.innerText = currentQuizData.c;
    d_text.innerText = currentQuizData.d;
  }
}

function deselectAnswers() {
  if (currentQuiz == quizData.length - 1) {
    // make answers[currentQuiz] checked
    if (answers?.length == quizData?.length) {
      const answer = answers[currentQuiz][currentQuiz];
      answerEls.forEach((answerEl) => {
        if (answerEl.id === answer) {
          answerEl.checked = true;
        }
      });
    }
  }
  if (prevBtn?.value > 0) {
    // make answers[currentQuiz] checked
    const answer = answers[currentQuiz][currentQuiz];
    answerEls.forEach((answerEl) => {
      if (answerEl.id === answer) {
        answerEl.checked = true;
      }
    });
  } else {
    answerEls.forEach((answerEl) => (answerEl.checked = false));
  }
}

function getSelected() {
  let answer;

  answerEls.forEach((answerEl) => {
    if (answerEl.checked) {
      answer = answerEl.id;
    }
  });

  return answer;
}

nextBtn.addEventListener("click", () => {
  const answer = getSelected();

  prevBtn.value =
    parseInt(prevBtn.value) > 0
      ? parseInt(prevBtn.value) - 1
      : parseInt(prevBtn.value);

  if (answer) {
    if (prevBtn.value > -1) {
      answers[currentQuiz] = {
        [currentQuiz]: answer,
      };
    } else {
      answers.push({
        [currentQuiz]: answer,
      });
    }

    if (answer === quizData[currentQuiz].correct) {
      score++;
    }

    currentQuiz++;

    if (currentQuiz < quizData.length) {
      loadQuiz();
    } else {
      localStorage.setItem("answers", JSON.stringify(answers));
      window.localStorage.removeItem("counter");

      window.location = "result.html";
    }
  }
});

prevBtn.addEventListener("click", () => {
  prevBtn.value = parseInt(prevBtn.value) + 1;
  const answer = getSelected();

  if (answer) {
    if (prevBtn.value > 0) {
      answers[currentQuiz] = {
        [currentQuiz]: answer,
      };
    }

    currentQuiz--;
    loadQuiz();
  }
});

function reloadQuiz() {
  currentQuiz = 0;
  score = 0;
  loadQuiz();
  deselectAnswers();
}

function calculateScore() {
  let score = 0;
  answers.forEach((answer) => {
    if (
      answer[Object.keys(answer)[0]] ===
      quizData[Object.keys(answer)[0]].correct
    ) {
      score++;
    }
  });
  return score;
}

function changePhotoPath(photo) {
  let newPhoto = photo.replace("../uploads", "");
  //remove single quotes
  newPhoto = newPhoto.replace(/'/g, "");
  return newPhoto;
}
