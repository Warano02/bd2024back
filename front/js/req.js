let dismiss_btn;
let dup_btn = document.querySelectorAll(".dupli");
let details_btn = document.querySelectorAll(".details");
let id = document.getElementById("id");
let supprimer = document.getElementById("sup");
const myModal = document.getElementById("staticBackdrop");
// const myInput = document.getElementById("myInput");

let table = document.getElementById("l52e");

function deleteR(id) {
  return new Promise((resolve, reject) => {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "../../../backend/log/dr.php?id=" + id, true);
    xhr.onloadend = () => {
      xhr.status == 200
        ? resolve(xhr.responseText)
        : reject({
            err: true,
            msg: "Une erreur est survenue lors de la suppression de votre requête",
          });
    };
    xhr.send();
  });
}

function createHistory(id, date, type, statut, mise, desc) {
  let st;
  let ac = ` <td>
                <button class="btn btn-info btn-sm details"  data-id="${id}">Voir Détails</button>
               </td>`;
  switch (statut) {
    case "e":
      st = `<td><span class="badge badge-warning text-secondary">En attente</span></td>`;
      ac = `<td>
            <button type="button" class="btn btn-warning btn-sm mb-3 annuler" data-bs-toggle="modal" id="myInput" data-bs-target="#staticBackdrop"  data-id="${id}">Annuler</button>
            <button class="btn btn-secondary btn-sm dupli" data-id="${id}">Dupliquer</button>
          </td>`;
      break;
    case "t":
      st = `<td><span class="badge badge-success text-success">Traité</span></td>`;
      break;
    default:
      st = `<td><span class="badge badge-danger text-danger">Rejeté</span></td>`;
      break;
  }

  return ` <tr>
              <td>${id}</td>
              <td>${date}</td>
              <td>${type}</td>
              ${st}
              <td>${mise}</td>
              <td>${desc}</td>
               ${ac}
              </tr>
            `;
}

function fetchData() {
  fetch("../../../backend/log/get.php")
    .then((donne) => {
      return donne.json();
    })
    .then((OK) => {
      if (OK.length !== 0) {
        OK.forEach((req) => {
          const h = createHistory(
            req.un_id,
            req.date,
            req.objet,
            req.statut,
            req.ans !== "" ? req.ans : req.date,
            req.text.length >= 20 ? req.text.substring(19, "...") : req.text
          );

          table.insertAdjacentHTML("beforeend", h);
        });

        const updateIdMsg=(Id)=> {
          id.textContent = Id;
        }
        dismiss_btn = document.querySelectorAll(".annuler");
        dismiss_btn.forEach((btn) => {
          btn.addEventListener("click", () => {
            let detail = btn.getAttribute("data-id");
            sessionStorage.setItem("id", detail);
            updateIdMsg(detail);
            // myInput.focus();
          });
        });
      } else {
        table.insertAdjacentHTML(
          "beforeend",
          `<tr>
                        <td>
                            <div class="spinner-border text-primary d-flex justify-content-center" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </td>
                        <td>
                            <div class="spinner-border text-secondary d-flex justify-content-center" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </td>
                        <td>
                            <div class="spinner-border text-success" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </td>
                        <td>
                            <div class="spinner-border text-danger d-flex justify-content-center" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </td>
                        <td>
                            <div class="spinner-border text-warning d-flex justify-content-center" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </td>
                        <td>
                            <div class="spinner-border text-info d-flex justify-content-center" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </td>
                        <td>
                            <div class="spinner-border text-light d-flex justify-content-center" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </td>
                    </tr>`
        );
      }
    })
    .catch((e) => {
      console.log(
        "Une erreur est survenue lors de la mise en place de l'historique de vos requêtes " +
          e
      );
    });
}

fetchData();

supprimer.addEventListener("click", () => {
  let id = sessionStorage.getItem("id");
  deleteR(id)
    .then((d) => {
      console.log(d);
      window.location.reload()
    })
    .catch((e) =>
      alert(
        "Une erreur est survenue lors de la suppression de votre requête !" + e
      )
    );
});
