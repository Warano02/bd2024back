let id = sessionStorage.getItem("un_id");
if (!id) {
  window.location.href = "./";
}
const d = new Date();
let date = `${d.getDate()}/${d.getMonth() + 1}/${d.getFullYear()}`;

fetch("../../../backend/log/getr.php?id=" + id)
  .then((o) => {
    return o.json();
  })
  .then((p) => {
    return p.msg;
  })
  .then((q) => {
    document.getElementById("text-content").textContent = q.text;
    document.getElementById("code").textContent = q.code_ue;
    document.getElementById("date").textContent = q.date;
    document.getElementById("oo").textContent = `Objet : ${q.text}`;
    document.getElementById("mat").textContent = `${q.mat}`;
  });

const alertPlaceholder = document.getElementById("liveAlertPlaceholder");
const appendAlert = (message, type) => {
  const wrapper = document.createElement("div");
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    "</div>",
  ].join("");

  alertPlaceholder.append(wrapper);
};

function post(url, data) {
  return new Promise((resolve, reject) => {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onloadend = () => {
      if ((xhr.status !== 200 && xhr.status !== 201) || xhr.readyState !== 4) {
        reject(
          "Une erreur est survenue lors de la mise sur pied de votre demande"
        );
      } else {
        resolve(xhr.responseText);
      }
    };
    xhr.send(data);
  });
}

const audio = document.getElementById("au");
audio.loop = true;
const notificationSong = document.getElementById("f");
let form = document.getElementById("form");
form.addEventListener("submit", (e) => {
  e.preventDefault();
  let fromData = {
    statut: document.getElementById("statut").value,
    id,
    date,
    msg: document.getElementById("msg").value,
  };

  audio.play();
  console.log(JSON.stringify(fromData));

  post("../../../backend/log/valid.php", JSON.stringify(fromData))
    .then((a) => {
      a = JSON.parse(a);
      let b = a.msg;
      console.log(b);
      
      const xhr = new XMLHttpRequest();
      xhr.open(
        "POST",
        `http://localhost:3000/post/w4r?email=${b.em}&&name=${b.n}&&date=${date}`,
        true
      );
      xhr.onloadend = () => {
        console.log(xhr.responseText);

        audio.pause();
        notificationSong.play();
        appendAlert(
          "Votre réponse a la requête a bien été enregistrer.",
          "success"
        );
        let i = 0;
        let t = setInterval(() => {
          if (i == 5) {
            clearInterval(t);
            window.location.href = "./index.php";
          }
          i++;
        }, 1000);
      };
      xhr.send();
    })

    .catch((err) => {
      console.log(err);

      appendAlert(
        "Une erreur est survenue lors de la mise en place de votre réponse."
      );
      let i = 0;
      let t = setInterval(() => {
        if (i == 5) {
          clearInterval(t);
          i = 0;
          // window.location.reload();
        }
        i++;
      }, 1000);
    });
});
