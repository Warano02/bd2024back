let table = document.getElementById("l52e");

function generateRow(id, date, objet, statut) {
  let r
  
  switch (statut) {
    case "r":
      r = ` <td><span class="badge badge-warning text-danger"><i class="bi bi-x-circle-fill"></i> Rejeter</span></td>
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
      r = ` <td><span class="badge badge-warning text-secondary"><i class="bi bi-pin"></i> En attente</span></td>
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
  if (data.length == 0) {
   
    table.insertAdjacentHTML(
      "beforeend",
      `<tr>
      <td>
          <div class="spinner-border text-primary d-flex justify-content-center" role="status">
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
      
    </tr>`
    );
  } else {
    let f = "";
    data.forEach((element) => {
      console.log(element.statut);
      
      const e = generateRow(
        element.un_id,
        element.date,
        element.objet,
        element.statut
      );
      f += e;
    });
    table.innerHTML = f;
  }
}

fetch("../../../backend/log/main.php")
  .then((t) => {
    return t.json();
  })
  .then((r) => {
    insertIntoDom(r);
    let traiter = r.sort((a) => a.statut === "t");
    let refuse = r.sort((a) => a.statut === "r");
    let encoure = r.sort((a) => a.statut === "e");
    let select = document.getElementById("select");
    select.addEventListener("change", () => {
      console.log(select.value);
      
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
          insertIntoDom(r);
          break;
      }
    });

    let su=document.querySelectorAll(".g")

    su.forEach(element => {
      element.addEventListener("click",()=>{
        sessionStorage.setItem("un_id",element.getAttribute("data-id"))
        window.location.href="./view.php"
      })
    });
  });
