function generateElement(app, date) {
  return `
       <tr>
            <td>${app}</td>
            <td>${date}</td>
          </tr>
    `;
}

fetch("../../../../backend/log/hist.php")
  .then((a) => {
   return  a.json();
  })
  .then((b) => {
    if (b.length != 0) {
      let hist = document.getElementById("hist");
      console.log(b);
      
      b.forEach((c) => {
        hist.insertAdjacentHTML("beforeend", generateElement(c.app, c.date));
      });
    }
  })
 .catch((e)=>{
    console.error(e)
    alert("Une erreur est survenue lors du chargement de votre historique de connexion")
 })