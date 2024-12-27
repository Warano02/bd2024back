let isA = sessionStorage.getItem("a");

if (!isA) {
  window.location.href = "../";
}

let table = document.getElementById("l52e");

function generateRow(id, date, objet, statut) {
  let r;

  switch (statut) {
    case "r":
      r = `<td><span class="badge badge-warning text-danger"><i class="bi bi-x-circle-fill"></i> Rejeter</span></td>
                  <td>
                      <button class="btn btn-warning btn-sm dupli g" data-id="${id}"> <i class="bi bi-repeat"></i> Revoir le statut</button>
              </td>`;
      break;
    case "t":
      r = `<td><span class="badge badge-warning text-success"><i class="bi bi-pin-angle-fill"></i> Traiter</span></td>
        <td>
            <button class="btn btn-info btn-sm dupli g" data-id="${id}"><i class="bi bi-pin-map-fill"></i> Voir</button>
        </td>`;
      break;

    default:
      r = `<td><span class="badge badge-warning text-secondary"><i class="bi bi-pin"></i> En attente</span></td>
              <td>
                  <button class="btn btn-success btn-sm dupli g" data-id="${id}">Traiter</button>
              </td>`;
      break;
  }
  return `
    <tr>
      <td>${id} </td>
       <td>${date} </td>
       <td>${objet.length < 50 ? objet : objet.substring(0, 45) + "..."} </td>
      ${r}
  </tr>
    `;
}

function insertIntoDom(data) {
  table.innerHTML = ''; // Nettoyer le tableau avant d'insérer des données

  if (data.length === 0) {
    table.insertAdjacentHTML(
      "beforeend",
      `<tr>
      <td colspan="5" class="text-center">
          <div class="spinner-border text-primary" role="status">
              <span class="visually-hidden">Loading...</span>
          </div>
      </td>
    </tr>`
    );
  } else {
    let rows = ""; // Utiliser une variable locale pour stocker les lignes
    data.forEach((element) => {
      const row = generateRow(
        element.un_id,
        element.date,
        element.objet,
        element.statut
      );
      rows += row; // Concaténer les lignes
    });
    table.innerHTML = rows; // Insérer toutes les lignes en une seule fois
  }
  addEventListeners(); // Ajouter les écouteurs d'événements après l'insertion
}

function addEventListeners() {
  let buttons = document.querySelectorAll(".g");
  buttons.forEach(element => {
    element.addEventListener("click", () => {
      sessionStorage.setItem("un_id", element.getAttribute("data-id"));
      window.location.href = "./view.php";
    });
  });
}

fetch("../../../backend/log/main.php")
  .then((response) => {
    return response.json();
  })
  .then((data) => {
    insertIntoDom(data);
    let traiter = data.filter((a) => a.statut == "t");
    let refuse = data.filter((a) => a.statut == "r");
    let encoure = data.filter((a) => a.statut == "e");
    
    document.getElementById("t1").textContent = encoure.length;
    document.getElementById("t2").textContent = traiter.length;
    document.getElementById("t3").textContent = refuse.length;
    document.getElementById("t").textContent = encoure.length + refuse.length + traiter.length;
    
    let select = document.getElementById("select");
    select.addEventListener("change", () => {
      switch (select.value) {
        case "t":
          insertIntoDom(traiter);
          break;
        case "n":
          insertIntoDom(refuse);
          break;
        case "e":
          insertIntoDom(encoure);
          break;
        default:
          insertIntoDom(data);
          break;
      }
    });
  });