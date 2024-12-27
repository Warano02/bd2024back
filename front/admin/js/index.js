let form = document.getElementById("form");
form.addEventListener("submit", (e) => {
  e.preventDefault();

  let formData = new FormData(form);
  let jsonData = Object.fromEntries(formData.entries()); // Convertir FormData en objet

  fetch("../../backend/log/index.php/login", {
    method: "POST",
    headers: {
      "Content-Type": "application/json", // Indiquer que le contenu est du JSON
    },
    body: JSON.stringify(jsonData), // Utiliser l’objet JSON
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.json();
    })
    .then((data) => {
      if (data.err) {
        alert("Mr vous avez entrez des informations incorrects !")
      } else {
        sessionStorage.setItem("a",true)
        window.location.href="./pages/"
      }
    
    })
    .catch((error) => console.error("There was a problem with the fetch operation:", error));
});


