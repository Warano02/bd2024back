let isU=sessionStorage.getItem("u")
if(!isU){
  window.location.href="../log/sigin.php"
}
let textInput = document.getElementById("text");
let outputMessage = document.querySelector("main .data p");
let ai = document.getElementById("form2");
let text = document.querySelector("#form2 textarea");
let objet = document.getElementById("Objet");
const d = new Date();
let datte = `${d.getDate()}/${d.getMonth() + 1}/${d.getFullYear()}`;
console.log(datte);

objet.textContent = localStorage.getItem("objet");
let chatArea = document.getElementById("jz");
let submit2 = document.querySelector("#form2 button");
let closes = document.querySelectorAll(".x");
let IA = document.getElementById("IA");

document
  .querySelector("nav .back")
  .addEventListener("click", () => (window.location.href = "../"));

let date = document.getElementById("date");
let actualDate = new Date().toDateString().split(" ");

let form = document.getElementById("form");
date.textContent = `Ngaounderer , ${actualDate[2]} ${actualDate[1]} ${actualDate[3]}`;

textInput.addEventListener("input", () => {
  outputMessage.textContent = textInput.value;
});

form.addEventListener("submit", (e) => {
  e.preventDefault();
  let code = localStorage.getItem("code");
  if (!code) {
    while (!code || code == null || code == " ") {
      code = prompt("Entrez le code de l'Ue svp !");
    }
  }

  let donnee = {
    objet: localStorage.getItem("objet"),
    code,
    date: datte,
    text: textInput.value,
  };

  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../../../backend/log/req.php", true);
  xhr.setRequestHeader("Content-Type","application/json")
  xhr.onloadend = () => {
    if (xhr.status == 200) {
      const r = xhr.responseText;
      if (r.err) {
        alert(r.msg);
      } else {
        let t = confirm(
          "Tout est OK, ou souhaitez vous envoyer une autre requête ?"
        );
        t ? window.location.reload : (window.location.href = "../");
      }
    }else{
        alert("Une erreur est survenue lors de l'envoie de votre requête !")
    }
  };
  xhr.send(JSON.stringify(donnee));
});

closes.forEach((close) => {
  close.addEventListener("click", () => IA.classList.toggle("disable"));
});

ai.addEventListener("submit", (e) => {
  e.preventDefault();
  let mot = text.value;
  chatArea.insertAdjacentHTML(
    "beforeend",
    `  <div class="message question">
                    <p> ${mot} </p>
                </div>`
  );

  text.value = "";
  submit2.classList.toggle("test");
});