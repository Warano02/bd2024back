const detailsElements = document.querySelectorAll('details');
let toggleNav = document.getElementById("Navigation")
let navBar = document.getElementById("Navbar")

document.getElementById("ios").addEventListener('click',()=>window.location.href="../")
toggleNav.addEventListener("click", () => {

    toggleNav.classList.toggle("bx-x")
    let style = navBar.style.display
    console.log("Le style actuel est " + style)
    navBar.style.display = (style === "none" || style === "") ? "flex" : "none";
})


detailsElements.forEach((details) => {
    details.addEventListener('toggle', () => {
        if (details.open) {
            // Si le details est ouvert, fermer tous les autres
            detailsElements.forEach((otherDetails) => {
                if (otherDetails !== details) {
                    otherDetails.removeAttribute('open');
                }
            });
        }
    });
});