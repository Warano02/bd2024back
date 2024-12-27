<!doctype html>
<html lang="fr" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Warano, carineteoi@gmail.com, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.122.0">
  <title>Infos sur la Requête · GP5_BD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous" defer></script>
  <meta name="theme-color" content="#712cf9">
  <link rel="icon" href="https://i.ibb.co/QXgWDYy/b.png">

  <script src="../../js/cons.js" type="module" defer></script>
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
      display: block !important;
    }
  </style>
</head>

<body>
  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">

    <symbol id="home" viewBox="0 0 16 16">
      <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
    </symbol>
    <symbol id="speedometer2" viewBox="0 0 16 16">
      <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
      <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
    </symbol>
    <symbol id="table" viewBox="0 0 16 16">
      <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
    </symbol>
    <symbol id="people-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
    </symbol>
    <symbol id="grid" viewBox="0 0 16 16">
      <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
    </symbol>
    <symbol id="param" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
      <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5m0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78zM5.048 3.967l-.087.065zm-.431.355A4.98 4.98 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8zm.344 7.646.087.065z" />
    </symbol>
  </svg>

  <main class="d-flex flex-nowrap">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32">
          <use xlink:href="#bootstrap" />
        </svg>
        <span class="fs-4">Menu</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="../" class="nav-link text-white" aria-current="page">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#home" />
            </svg>
            Accueil
          </a>
        </li>
        <li>
          <a href="./r.php" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#speedometer2" />
            </svg>
            Requête Rapide
          </a>
        </li>
        <li>
          <a href="./hr.php" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#table" />
            </svg>
            Historique de Requête
          </a>
        </li>
        <li>
          <a href="./produit.php" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#grid" />
            </svg>
            Products
          </a>
        </li>
        <li>
          <a href="#" class="nav-link active">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#people-circle" />
            </svg>
            Mon compte
          </a>
        </li>
        <li>
          <a href="./setting" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#param" />
            </svg>
            Paramètre
          </a>
        </li>
      </ul>
      <hr>
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="" id="po" alt="" width="32" height="32" class="rounded-circle me-2">
          <strong id="name"></strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
          <li><a class="dropdown-item" href="./setting/">Paramètre</a></li>
          <li><a class="dropdown-item" href="./hr.php">Historique</a></li>
          <li><a class="dropdown-item text-danger " href="./decon.php">Déconnexion</a></li>
        </ul>
      </div>
    </div>

    <div class="b-example-divider b-example-vr"></div>

    <div class="container bg-dark-subtle">

      <figure class="figure">
        <img src="../../img/b.png" id="pp" class="figure-img rounded-circle" width="255" height="255">
        <figcaption class="figure-caption text-end">
          <div class="dropdown " style="margin-top: -5em;margin-left:-5em;">
            <a class="btn btn-secondary rounded-circle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-pencil-fill"></i>
            </a>

            <ul class="dropdown-menu">
              <li>
                <button type="button" class="btn dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  Modifier le profil
                </button>
              </li>
              <li><a class="dropdown-item" href="#">Another action</a></li>

            </ul>
          </div>
        </figcaption>
      </figure>

      <div class="input-group mb-3 mt-2 w-50">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-check"></i></span>
        <input type="text" class="form-control" id="Username" aria-label="Username" aria-describedby="basic-addon1" disabled>
      </div>
      <div class="input-group mb-3 mt-2 w-50">
        <span class="input-group-text" id="basic-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-lock" viewBox="0 0 16 16">
            <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
          </svg></span>
        <input type="text" class="form-control" id="User" aria-label="Username" aria-describedby="basic-addon1" disabled>
      </div>
      <div class="input-group mb-3 mt-2 w-50">
        <span class="input-group-text" id="basic-addon3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
            <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671" />
            <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791" />
          </svg></span>
        <input type="text" class="form-control" id="User1" aria-label="Username" aria-describedby="basic-addon1" disabled>
      </div>


      <p class="d-inline-flex gap-1">
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          <i class="bi bi-person-plus"></i> Inviter des amies
        </button>
      </p>
      <div class="collapse" id="collapseExample">
        <div class="card card-body">
          Si vous trouvez notre système de gestion de requête assez attrayant, nous vous donnons la possibilité d'inviter vos amies !
          <p>
            <button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
              inviter via le lien
            </button>
          </p>
          <div>
            <div class="collapse collapse-horizontal" id="collapseWidthExample">
              <div class="card card-body" style="width: 300px;">
                copiez le lien suivant :
                <code class="card mt-2">http://localhost/bd_20225 </code>
              </div>
            </div>
          </div>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary w-25 mt-2" data-bs-toggle="modal"  id="g" data-bs-target="#statcBackdrop">
            Via Qr Code
          </button>

          <!-- Modal -->
          <div class="modal fade" id="statcBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Scannez le code Qr ci-dessous:</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">
                  <img id="qr" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJQAAACUCAYAAAB1PADUAAAAAklEQVR4AewaftIAAAR7SURBVO3BQY4cSRIEQbVA/f/Lun31SwCJ9GoOuSYSf1C15FC16FC16FC16FC16FC16FC16FC16FC16FC16FC16FC16FC16FC16FC16FC16MNLCb9KuUoYlCFhUB5JuFKuEgblKuFXKa8cqhYdqhYdqhZ9WKasSnhEGRKuEgblSrlKuFJeUVYlrDpULTpULTpULfrwZQmPKI8kPKIMCVcJgzIkDMqQ8FUJjyhfdahadKhadKha9OEfowwJQ8IjyiMJjyQMyl/tULXoULXoULXowz9OGRIGZUh4RHkkYVD+KYeqRYeqRYeqRR++TPlVCYMyKEPCKwmPKKuU/5RD1aJD1aJD1aIPyxL+KGVIGJQrZUgYlCFhUIaEq4RBuUr4TztULTpULTpULYo/+IslvKIMCYMyJAzKVcKV8k85VC06VC06VC368FLCoAwJq5RBGRJeUYaERxKulCFhUIaEVcpXHaoWHaoWHaoWxR+8kHClXCUMylXClTIkPKJcJVwpVwmDMiS8ojySMCivHKoWHaoWHaoWfXhJGRKuEgblKuEV5SrhEeUVZUh4RBkSXlFWHaoWHaoWHaoWffjDEgZlUIaERxIGZVCuEgZlSBiUIeEVZUgYlEcSBmXVoWrRoWrRoWrRh2XKkHClDAm/KmFQBuWRhFeUK+Uq4Ur5qkPVokPVokPVog8vJVwpQ8KQcKUMCV+V8IgyJFwpQ8KQ8IoyJFwlDMorh6pFh6pFh6pFH5YpQ8KgDAlXCYMyJFwpV8qQ8EjClXKlXCV8lbLqULXoULXoULXowy9LGJRVCVfKI8qQMCivJAzKlTIkXClDwqCsOlQtOlQtOlQtij9YlHClDAmDMiS8ogwJg3KVcKUMCYPyRyUMylcdqhYdqhYdqhbFH7yQ8IrySMKVMiQMyisJV8qQ8IgyJKxShoRBeeVQtehQtehQtejDMmVIGJQh4VclDMojylXCoDySMChDwqAMCY8oqw5Viw5Viw5Viz78soQr5SrhFWVIGJQhYVCGhEEZEq6UQRkSBmVIGJSrhEFZdahadKhadKhaFH/wQsKgrEq4UoaEK+WrEgblKmGVMiQ8orxyqFp0qFp0qFoUf/AXSxiUq4RVyisJg/JIwirllUPVokPVokPVog8vJfwqZVCGhEG5UoaEVxJWJQzKK8pXHaoWHaoWHaoWfVimrEq4SrhKGJQh4UoZEoaEQRkSXlFeUa4SBuWVQ9WiQ9WiQ9WiD1+W8IjyivKKMiQ8kjAoVwlDwivKkDAoX3WoWnSoWnSoWvThH5fwSMKgXCVcJTyivJLwiLLqULXoULXoULXow/8Z5ZWEQRkSBmVIeCThEeUqYVBWHaoWHaoWHaoWffgy5auUIeGRhEG5UoaEQblShoQrZUgYlCFhUH7VoWrRoWrRoWrRh2UJvyphUIaEK+UqYVAGZUgYlCtlSBiUR5QhYVC+6lC16FC16FC1KP6gasmhatGhatGhatGhatGhatGhatGhatGhatGhatGhatGhatGhatGhatGhatGhatH/AAdNlS7kPdLZAAAAAElFTkSuQmCC" class=" rounded border border-primary" width="255" height="255">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">C'est OK</button>
                </div>
              </div>
            </div>
          </div>



        </div>
      </div>




      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Modifier Votre photo de profil</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" id="ppp">
                <div class="input-group mb-3">
                  <input type="file" class="form-control" id="cpp" accept=".png, .jpg, .jpeg" required>
                  <label class="input-group-text" for="inputGroupFile02">Choisir</label>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                  <button type="submit" class="btn btn-secondary">Changer </button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>

  </main>


</body>

</html>