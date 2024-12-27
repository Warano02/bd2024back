import { Aurl } from "../../backend/security/api.js";

let Form = document.getElementById("form");
let mat = document.getElementById("mat");
let psw = document.getElementById("psw");

Form.addEventListener("submit", (e) => {
  e.preventDefault();
  let user = {
    mat: mat.value,
    psw: psw.value,
  };

  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../../../backend/log/login.php", true);
  xhr.setRequestHeader("Content-Type", "application/json");
  xhr.onloadend = () => {
    if (xhr.status == 200) {
      let r = JSON.parse(xhr.responseText);
      sessionStorage.setItem("u",true)
      if (!r.err) {
        let url = `${Aurl}/post/w3r?email=${r.data.email}&name=${r.data.nom}`;
        const t = new XMLHttpRequest();
        t.open("POST", url, true);
        t.setRequestHeader("Content-type", "application/json");
        t.onloadend = () => (window.location.href = "../");
        t.send();
      } else {
        alert(r.msg);
      }
    }
  };
  xhr.send(JSON.stringify(user));
});
