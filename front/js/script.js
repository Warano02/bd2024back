let studentInput = document.getElementById("student");
let teInput = document.getElementById("te");
let radiosInput = document.querySelectorAll(".radio");
let load = document.getElementById("load");

let form = document.getElementById("form");
let password = document.getElementById("pwrd");
let confirmPassword = document.getElementById("cpwrd");

localStorage.setItem("e", "no"); // ps un enseignant par défaut
radiosInput.forEach((radio) => {
  radio.addEventListener("change", () => {
    if (radio.checked) {
      radiosInput.forEach((te) => {
        if (te !== radio) {
          te.checked = false;
        }
      });

      let tr = [...radio.classList];

      if (tr.includes("y")) {
        localStorage.setItem("e", "yes");
        teInput.classList.remove("disable");
        studentInput.classList.add("disable");
      } else {
        localStorage.setItem("e", "no");
        teInput.classList.add("disable");
        studentInput.classList.remove("disable");
      }
    }
  });
});

// Pour la gestion du formulaire d'inscription
form.addEventListener("submit", (e) => {
  e.preventDefault();

  // Vérification de la validité d'une adresse email
  let email = document.getElementById("email").value;
  let nom = document.getElementById("name").value;
  let mat = document.getElementById("mat").value;

  if (password.value !== confirmPassword.value) {
    alert("Les mots de passe que vous avez entrés ne correspondent pas !");
    return;
  } else if (!/^\w+@(gmail|yahoo|icloud)+\.(com|fr)$/.test(email)) {
    alert("Veuillez entrer une adresse email valide !");
    return;
  } else if (!/^\d{2}\w{1}\d{3}FS$/.test(mat)) {
    alert("Veuillez entrer un matricule valide pour la faculté des Sciences !");
    return;
  } else {
    load.classList.remove("disable");
    const XHR = new XMLHttpRequest();
    XHR.open("POST", "../../../backend/function/mat.php", true);
    XHR.setRequestHeader("Content-Type", "application/json");

    XHR.onload = () => {
      if (XHR.status === 200) {
        const r = XHR.responseText;

        let c = document.getElementById("code").value;

        if (!r.err) {
          let Form = {
            o: localStorage.getItem("e"),
            mat: mat,
            email: email,
            name: nom,
            pwd: password.value,
            fil: document.getElementById("fil").value,
            code: c !== "" ? c : "j",
            niv: document.getElementById("niv").value,
          };

          let url = `http://localhost:3000/post/w2r?email=${email}&name=${nom}`;

          // Envoi du code de vérification
          const xhr = new XMLHttpRequest();
          xhr.open("POST", url, true);
          xhr.setRequestHeader("Content-Type", "application/json");
          xhr.setRequestHeader("Access-Control-Allow-Origin", "*");

          xhr.onload = () => {
            if (xhr.status === 201) {
              let response = JSON.parse(xhr.responseText);
              sessionStorage.setItem("code", response.code);
              sessionStorage.setItem("email", email);
              sessionStorage.setItem("data", JSON.stringify(Form));
              alert("Vérifier votre boîte email pour vérifier votre compte");
              window.location.href = "./confirm.php";
            } else {
              load.classList.add("disable");
              alert(
                "Erreur lors de l'envoi du code de vérification. Veuillez réessayer !"
              );
            }
          };
          xhr.send();
        } else {
          load.classList.add("disable");
          alert(
            `Un compte avec le matricule ${mat} existe déjà. Veuillez vous connecter !`
          );
        }
      } else {
        load.classList.add("disable");
        alert(
          "Une erreur est survenue lors de la vérification de vos informations. Réessayez !"
        );
      }
    };

    XHR.send(JSON.stringify({ test: email }));
  }
});
