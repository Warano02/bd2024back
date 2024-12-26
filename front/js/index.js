let btn_list=document.querySelectorAll('.fgh')

btn_list.forEach(btn => {
    btn.addEventListener("click",()=>{
        let objet=btn.getAttribute("data-objet")
        localStorage.setItem("objet",objet)
     window.location.href="./config/requete.php"
    })
});