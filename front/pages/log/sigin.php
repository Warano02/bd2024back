
<!DOCTYPE html>
<html lang="fr">

 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="../../style/hover.css">
    <link rel="icon" href="../../img/b.png">
    <script src="../../js/script.js" type="module" defer></script>
</head>

<body>
    <header>
        <h1><span>S'</span>inscrire</h1>
    </header>
    <form id="form" method="post">
        <div class="data">
            <label for="name">Entrez votre nom et prénom :</label>
            <input type="text" name="name" id="name" placeholder="John Doe" required>
            <label for="mat">Entrez votre matricule :</label>
            <input type="text" id="mat" name="mat" placeholder="23A816FS" required>
            <div class="ask">
                <span>Êtes vous enseignant ?</span>
                <div><input type="radio" class="radio y" id="y"><span>Oui</span></div>
                <div><input type="radio" class="radio n"  id="n"><span>Non</span></div>
            </div>
            <div id="student" class="student">
                <label for="level">Votre niveau :</label>
                <input type="number" id="niv" name="niv" min="1" max="7" placeholder="2" >
                <label for="fil">Entrez votre filière :</label>
                <input type="text" name="fil" id="fil" placeholder="Informatique..." >
            </div>
            <div id="te" class="te disable">
                <label for="code">Nom de l'UE(code):</label>
                <input type="text"  id="code" placeholder="Base de donnée (INF223)" >
            </div>
            <label for="email">Votre adresse email :</label>
            <input type="email" name="email" id="email" placeholder="johndoe@gmail.com" required>
            <label for="pwrd">Crée un password :</label>
            <input type="password" name="pwd" id="pwrd" placeholder="#oodod8d7d" required>
            <label for="cpwrd">Confirmer le password :</label>
            <input type="password"  id="cpwrd" placeholder="#oodod8d7d" required>
        </div>
        <button type="submit" class="hvr-rectangle-out ">S'inscrire</button>
    </form>
    <div class="infos">
        <a href="./login.php">Se connecter !</a>
    </div>

    <footer>
        <div class="footer">
            <div class="header">
                <h1>Projet de Base de donnée : <span>GROUPE 5</span></h1>
                <h3>Projet 2: Système de Gestion de requête en faculté des sciences</h3>
            </div>
           
        </div>
    
    </footer>



<div class="loading disable" id="load">
    <img src="../../img/cargando.gif" alt="loading image">
</div>
</body>

</html>