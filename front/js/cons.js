import { Aurl, key } from "../../backend/security/api.js";
let pp = document.getElementById("pp");
let cpp = document.getElementById("cpp");
let ppp = document.getElementById("ppp");

const MAX_SIZE = 2 * 1024 * 1024; // 2 Mo en octets

fetch("../../../backend/log/yo.php")
  .then((d) => {
    return d.json();
  })
  .then((r) => {
    document.getElementById("po").src = r.pp;
    pp.src = r.pp;
    document.getElementById("name").textContent =
      r.name.length >= 20 ? r.name.substring(19, "...") : r.name;
    document.getElementById("Username").placeholder = r.name;
    document.getElementById("User").placeholder = r.mat;
    document.getElementById("User1").placeholder = r.email;
  });

function postIMG(img) {
  return new Promise((resolve, reject) => {
    const xhr = new XMLHttpRequest();
    xhr.open("PUT", Aurl + "/put/bd_2k25", true);
    xhr.setRequestHeader("Content-type", "application/json");
    xhr.onloadend = () => {
      if (xhr.status == 201) {
        const url = JSON.parse(xhr.responseText).msg;
        fetch("../../../backend/log/udpp.php", {
          method: "POST",
          body: JSON.stringify({ url }),
        })
          .then((dd) => {
            return dd.json();
          })
          .then((re) => {
            re.err ? reject("Une erreur est survenue") : resolve("Tout est Ok");
          });
      } else {
        reject(
          "Une erreur est survenue lors de la mise en place de votre photo de profil"
        );
      }
    };
    xhr.send(JSON.stringify({ img }));
  });
}

function reader(file) {
  return new Promise((resolve, reject) => {
    const reader = new FileReader();
    reader.onload = function (e) {
      resolve(e.target.result); // Renvoie la data URL
    };
    reader.onerror = reject; // Gère les erreurs de lecture
    reader.readAsDataURL(file); // Commence à lire le fichier
  });
}

ppp.addEventListener("submit", (e) => {
  e.preventDefault();

  if (cpp.files.length === 0) {
    console.error("Aucun fichier sélectionné");
    return;
  }

  const file = cpp.files[0];

  // Vérification de la taille du fichier
  if (file.size > MAX_SIZE) {
    alert("La taille de l'image ne doit pas dépasser 2 Mo.");
    cpp.value = ""; // Réinitialise l'input
    pp.src = ""; // Réinitialise l'aperçu de l'image
    return;
  }

  reader(file)
    .then((fileDataUrl) => {
      pp.src = fileDataUrl;
      return postIMG(fileDataUrl.split(",")[1]); // Envoie l'image sans le préfixe data URL
    })
    .then(() => {
      // Recharge la page ou effectue d'autres actions après l'envoi réussi
      window.location.reload();
    })
    .catch((e) => {
      alert("Erreur de réseau. Réessayez !");
      console.error(
        "Une erreur est survenue lors de la lecture de l'image : " + e
      );
    });
});

function generateQrCode() {
  const options = {
    headers: { "X-API_KEY": key },
  };
  fetch(`${Aurl}/get/warano-qr-code?url=${Aurl.replace(/:3000/g,"/bd_20224/front")}`, options)
    .then((a) => {
      return a.json();
    })
    .then((b) => {
      document.getElementById("qr").src = b.reponse;
    })
    .catch((e) => console.log(e));
}

document.getElementById("g").addEventListener("click", () => {
  generateQrCode();
});
