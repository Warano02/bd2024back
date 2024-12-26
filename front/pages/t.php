<?php
session_start();
if (!isset($_SESSION["wa"])) {
  header("location:./log/signin.php");
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Création de compte</title>
  <style>
    body {
      background: #d5d5d5;
    }

    .container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-40%, -40%);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    span {
      width: 15px;
      height: 15px;
      border-radius: 50px;
      opacity: 1;
      position: absolute;
    }

    .blue {
      background: rgb(0, 204, 255);
      left: 1px;
      transition: 0.1s;
      animation: red0 0.5s infinite forwards;
    }

    .red {
      transition: 0.1s;
      background: rgba(255, 63, 63, 0.904);
      animation: blue0 0.5s infinite forwards;
    }

    @keyframes red0 {
      from {
        /* opacity: 0.5; */
        z-index: 2;

        transform: translateX(5px) scale(1.1);
      }

      to {
        transform: translateX(-10px);
        z-index: 1;
        opacity: 0.8;
      }
    }

    @keyframes blue0 {
      from {
        opacity: 0.5;
        z-index: 1;
        transform: translateX(5px);
      }

      to {
        transform: translateX(10px) scale(1.1);
        z-index: 2;
        /* opacity: 0.8; */
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <span class="red"></span>
    <span class="blue"></span>
  </div>
  <script>
    let i = 0
    let t = setInterval(() => {
      if (i == 10) {
        clearInterval(t)
        window.location.href = "./"
      }
      i++
    }, 100)
  </script>
</body>

</html>