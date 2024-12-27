import { Aurl } from "../../backend/security/api.js";

let champ = document.getElementById("email");
let code = sessionStorage.getItem("code");
let Form=JSON.parse(sessionStorage.getItem("data"))
let nom=Form.name
champ.textContent = sessionStorage.getItem("email");
let Input = document.querySelectorAll("input");
let i = 0,
  o = "";
const t = setInterval(() => {
  if (i == 5) {
    if (o == code) {
      // clearInterval(t);  
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
                window.location.href="../t.php"    
              } else {
                load.classList.add("disable");
                alert("Erreur lors de l'envoie de votre message de bienvenue!");
                window.location.href="../t.php"    
              }
            };
            xhr.send();
          } else {
            alert(tt.msg);
          }
        } else {
          alert(
            "Une erreur est survenue lors de l'envoi de votre demande d'inscription !"
          );
        }
      };

      t.send(JSON.stringify(Form));

    } else {
      alert("Code de confirmation incorrect !");
      for (; i >= 0; i--) {
        Input[i].value = "";
        Input[i].setAttribute("disable", false);
      }
      for (i = 2; i <= 5; i++) {
        Input[i].setAttribute("disabled", true);
      }
      // window.location.reload;
      Input[0].classList.add("active")
      Input[0].removeAttribute("disabled")
      Input[0].focus()
      code=""
    }
    i = 0;
  } else {
    let imput = Input[i];
    if (imput.value.length == 1 && !isNaN(imput.value)) {
      i++;
      o += imput.value;
      imput.classList.remove("active");
      imput.setAttribute("disabled", true);
      const next = Input[i];
      next.classList.add("active");
      next.removeAttribute("disabled");
      next.focus()
    } else {
      imput.value = "";
    }
  }
}, 100);
