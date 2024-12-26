<?php
session_start();
if (!isset($_SESSION["wa"])){
    header("location:../log/login.php");
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Effectuer une requête</title>
    <link rel="stylesheet" href="../../style/requete.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="../../js/r.js" defer></script>
</head>

<body>
    <nav>
        <div class="back">
            <i class='bx bx-arrow-back'></i>
        </div>
        <h1>Requêtes</h1>
        <form id="form">
           
            <label for="text">Décrivez brièvement le contenue de votre requête :</label>
            <textarea name="" id="text"
                placeholder="J'ai l'honneur de venir au pret de votre haute bienveillance solliciter la suspension de mon matricule(xxxx)..."></textarea>
            <button type="submit">Envoyer </button>
        </form>
    </nav>
    <main>
        <div class="tete">
            <div class="left">
                <h2><?php echo $_SESSION["name"]; ?></h2>
                <h3><?php echo $_SESSION["mat"]; ?></h3>
                <h3>L2IN</h3>
                <h3>+237 621-09-21-30</h3>
                <h3><?php echo $_SESSION["email"]; ?></h3>
            </div>
            <div class="right">
                <h3 id="date">Ngaounderer, 23 Dec 2024</h3>
                <h1>A</h1>
                <h4>MONSIEUR LE DOYEN DE LA FACULTÉ DES SCIENCES DE l'UNIVERSITE DE NGAOUNDERER</h4>
            </div>
        </div>
        <div class="data">
            <h1><span>Objectif :</span> <span id="Objet">Demande de Suspension de mon matricule</span> </h1>
            <h2>Monsieur, </h2>
            <p>
                J'ai l'honneur de venir au prêt de votre haute bienveillance solliciter la suspension de mon
                matricule(XXXX). <br><br>
                En effet je suis un étudiant(e) régulièrement inscrit(e) dans votre établissement dans le département
                de(XXXX) et j'aimerais suspendre mon matricule pour raison de (raison de concours ou problème financier,
                temporairement ou maladie etc...). <br><br>
                Ci-joint a ma demande : <br>
                - Une photocopie de mes quitus de payement et des reçus bancaire; <br>
                - Une photocopie des résultats d'admission au concourt(Pour ceux qui ont réussis le concours ); <br>
                - Une photocopie de ma CNI. <br><br>
                Dans l'attente d'une suite favorable, veuillez agrée, Monsieur le doyen l'expression de ma plus haute
                consideration.
            </p>
            <div class="si">
                <h4><?php echo $_SESSION["name"]; ?></h4>
                <span>Signature</span>
            </div>
        </div>
    </main>


    <div class="openai x">
        <i class='bx bx-message-square-detail'></i>
    </div>
    <div class="chat-div disable" id="IA">
        <div class="area">
            <span class="close x"><i class='bx bx-x'></i></span>
            <div class="data">
                <div class="messages" id="jz">

                    <div class="message ai">
                        <img src="../../img/OIP.jpg" alt="Ia profil Div">
                        <p>Bonjour et bienvenue sur notre projet de bd pour le groupe 5. Je suis là pour vous aidez a
                            formuler votre requête.</p>
                    </div>
                    <div class="message question">
                        <p>Bonjour et bienvenue sur notre projet de bd pour le groupe 5. Je suis là pour vous aidez a
                            formuler votre requête.</p>
                    </div>

                </div>
                <form id="form2">
                    <textarea minlength="15" placeholder="Tapez votre question" required></textarea>
                    <button type="submit" ><i class='bx bx-send'></i></button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>