<?php
session_start();

if(isset($_SESSION["wa"])){
 header("location:../pages");
}elseif (isset($_SESSION["a"])) {
    header("location:./pages");
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="./js/index.js" defer></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        *,
        html,
        body {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to bottom right, #ff966d, #fa538d, #89379c);
        }

        .container {
            width: 50vw;
            height: 60vh;
            display: grid;
            grid-template-columns: 100%;
            grid-template-areas: "login";
            box-shadow: 0 0 17px 10px rgb(0 0 0 / 30%);
            border-radius: 20px;
            background: white;
            overflow: hidden;
        }

        .design {
            grid-area: design;
            display: none;
            position: relative;
        }

        .rotate-45 {
            transform: rotate(-45deg);
        }

        .design .pill-1 {
            bottom: 0;
            left: -40px;
            position: absolute;
            width: 80px;
            height: 200px;
            background: linear-gradient(#ff966d, #fa538d, #89379c);
            border-radius: 40px;
        }

        .design .pill-2 {
            top: -100px;
            left: -80px;
            position: absolute;
            height: 450px;
            width: 220px;
            background: linear-gradient(#ff966d, #fa538d, #89379c);
            border-radius: 200px;
            border: 30px solid #e2c5e2;
        }

        .design .pill-3 {
            top: -100px;
            left: 160px;
            position: absolute;
            height: 200px;
            width: 100px;
            background: linear-gradient(#ff966d, #fa538d, #89379c);
            border-radius: 70px;
        }

        .design .pill-4 {
            bottom: -180px;
            left: 220px;
            position: absolute;
            height: 300px;
            width: 120px;
            background: linear-gradient(#ff966d, #fa538d);
            border-radius: 70px;
        }

        .login {
            grid-area: login;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            background: white;
        }

        .login h3.title {
            margin: 15px 0;
        }

        .text-input {
            background: #e6e6e6;
            height: 40px;
            display: flex;
            width: 60%;
            align-items: center;
            border-radius: 10px;
            padding: 0 15px;
            margin: 5px 0;
        }

        .text-input input {
            background: none;
            border: none;
            outline: none;
            width: 100%;
            height: 100%;
            margin-left: 10px;
        }

        .text-input i {
            color: #686868;
        }

        ::placeholder {
            color: #9a9a9a;
        }

        .login-btn {
            width: 68%;
            padding: 10px;
            color: white;
            background: linear-gradient(to right, #ff966d, #fa538d, #89379c);
            border: none;
            border-radius: 20px;
            cursor: pointer;
            margin-top: 10px;
        }

        a {
            font-size: 12px;
            color: #9a9a9a;
            cursor: pointer;
            user-select: none;
            text-decoration: none;
        }

        a.forgot {
            margin-top: 15px;
        }

        .create {
            display: flex;
            align-items: center;
            position: absolute;
            bottom: 30px;
        }

        .create i {
            color: #9a9a9a;
            margin-left: 10px;
        }

        @media (min-width: 768px) {
            .container {
                grid-template-columns: 50% 50%;
                grid-template-areas: "design login";
            }

            .design {
                display: block;
            }
        }
    </style>
</head>
<!-----HTML----->

<body>
    <div class="container">
        <div class="design">
            <div class="pill-1 rotate-45"></div>
            <div class="pill-2 rotate-45"></div>
            <div class="pill-3 rotate-45"></div>
            <div class="pill-4 rotate-45"></div>
        </div>
        <form class="login" method="post" id="form">
            <h3 class="title">Bienvenue Mr.</h3>
            <div class="text-input">
                <i class="ri-user-fill"></i>
                <input type="text" name="email" placeholder="E-mail" required>
            </div>
            <div class="text-input">
                <i class="ri-lock-fill"></i>
                <input type="password" name="pwd" placeholder="Mot de passe" required>
            </div>
            <button class="login-btn" type="submit">Connexion</button>
            <a href="#" class="forgot">Information Oublié</a>
            <div class="create">
                <a href="../">Je ne suis pas admin </a>
                <i class="ri-arrow-right-fill"></i>
            </div>
        </form>
    </div>
</body>

</html>