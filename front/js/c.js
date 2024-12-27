import { Aurl } from "../../backend/security/api.js";

let champ = document.getElementById("email");
let code = sessionStorage.getItem("code");
let Form = JSON.parse(sessionStorage.getItem("data"));
let nom = Form.name;
champ.textContent = sessionStorage.getItem("email");
let Input = document.querySelectorAll("input");
let o = "";

// Fonction pour vérifier le code
function checkCode() {
  if (o.length === 5) { // Vérifie si tous les inputs sont remplis
    if (!isNaN(o) && !isNaN(code) && parseInt(o) === parseInt(code)) {
      // Envoi de la requête pour le message de bienvenue
      const t = new XMLHttpRequest();
      t.open("POST", "../../../backend/log/sign.php", true);
      t.setRequestHeader("Content-Type", "application/json");
      t.onload = () => {
        if (t.status === 200) {
          const tt = t.responseText;
          if (!tt.err) {
            let url = `${Aurl}/post/welcome2?email=${Form.email}&name=${nom}`;

            // Envoi du message de bienvenue 
            const xhr = new XMLHttpRequest();
            xhr.open("POST", url, true);
            xhr.setRequestHeader("Content-Type", "application/json");
            xhr.setRequestHeader("Access-Control-Allow-Origin", "*");
            xhr.onload = () => {
              if (xhr.status === 201) { 
                alert("Success !🥳✅");
                window.location.href = "../t.php";    
              } else {
                alert("Erreur lors de l'envoi de votre message de bienvenue!");
                window.location.href = "../t.php";    
              }
            };
            xhr.send();
          } else {
            alert(tt.msg);
          }
        }
      };

      t.send(JSON.stringify(Form));

    } else {
      alert("Code de confirmation incorrect !");
      resetInputs();
    }
  }
}

// Fonction pour réinitialiser les inputs
function resetInputs() {
  o = ""; // Réinitialiser la chaîne de code
  Input.forEach((input) => {
    input.value = "";
    input.removeAttribute("disabled");
    input.classList.remove("active");
  });
  Input[0].classList.add("active");
  Input[0].focus();
}

// Écoute des événements de saisie sur chaque input
Input.forEach((input, index) => {
  input.addEventListener("input", (event) => {
    if (event.target.value.length === 1 && !isNaN(event.target.value)) {
      o += event.target.value; // Ajoute la valeur à o
      input.classList.remove("active");
      input.setAttribute("disabled", true); // Désactive l'input
      if (index < Input.length - 1) {
        Input[index + 1].classList.add("active");
        Input[index + 1].removeAttribute("disabled");
        Input[index + 1].focus();
      }
      checkCode(); // Vérifie le code après chaque saisie
    } else {
      input.value = ""; // Réinitialiser la valeur si non valide
    }
  });
});

// Initialisation
Input[0].classList.add("active");
Input[0].removeAttribute("disabled");
Input[0].focus();