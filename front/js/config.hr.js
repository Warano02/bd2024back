let form=document.getElementById("form")
let code=document.getElementById("disabledTextInput")
let objet=document.getElementById("disabledTextInput2")

form.addEventListener("submit",(e)=>{
    e.preventDefault();
    localStorage.setItem("code",code.value)
    localStorage.setItem("objet",objet.value)
    window.location.href="./requete.php"
})