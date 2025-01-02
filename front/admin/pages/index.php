<!doctype html>
<html lang="fr" data-bs-theme="auto">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Welcome Admin · GP5_BD</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="https://i.ibb.co/QXgWDYy/b.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous" defer></script>
    <meta name="theme-color" content="#712cf9">
    <link rel="stylesheet" href="../../style/hover.css">
    <script src="../js/main.js" defer></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap");

        body {
            font-family: "Ubuntu", sans-serif;
        }

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
            <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8m4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5" />
            <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
        </symbol>
        <symbol id="table" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
            <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286m1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94" />
        </symbol>
        <symbol id="people-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </symbol>
        <symbol id="grid" viewBox="0 0 16 16">
            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
        </symbol>
    </svg>

    <main class="d-flex flex-nowrap">
        <div class="d-flex flex-column flex-shrink-0 bg-body-tertiary" style="width: 4.5rem;">
            <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                <li class="nav-item">
                    <a href="#" class="nav-link active py-3 border-bottom rounded-0" aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Home">
                            <use xlink:href="#home" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="./prod.php" class="nav-link py-3 border-bottom rounded-0" title="Products" data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Products">
                            <use xlink:href="#grid" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="../../pages/Faq/" class="nav-link py-3 border-bottom rounded-0" title="Contactez Nous" data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Customers">
                            <use xlink:href="#table" />
                        </svg>
                    </a>
                </li>
            </ul>
            <div class="dropdown border-top">
                <a href="#" class="d-flex align-items-center justify-content-center p-3 link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../../img/9.png" width="24" height="24" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item" href="./prod.php">Autre Service</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item text-danger" href="../../pages/config/decon.php">Sign out</a></li>
                </ul>
            </div>
        </div>

        <div class="b-example-divider b-example-vr"></div>

        <div class="container text-center">
            <div class="row">
                <div class="position-relative hvr-sweep-to-bottom col shadow p-3 m-2 bg-body-tertiary rounded w-35  border border-0  hover-background-danger" style="cursor:pointer;height:150px;margin-top:1em;flex-wrap:nowrap;display:flex;justify-content:center;align-items:center;gap:1em;">
                    <div class=" d-flex flex-column" style="width: 90px;height:100%;">
                        <h1 style="font-weight: 500;font-size: 2.5rem;color:#2a2185;" id="t1">100</h1>
                        <span style="color:#999;">Nouvelles Requêtes</span>
                    </div>
                    <img src="../../img/new.svg" class="img-fluide rounded" style="width:70px;height:70px;object-fit:cover;">
                </div>
                <div class="position-relative  col hvr-rectangle-out shadow p-3 m-2 bg-body-tertiary rounded w-35  border border-0  hover-background-danger" style="cursor:pointer;height:150px;margin-top:1em;flex-wrap:nowrap;display:flex;justify-content:center;align-items:center;gap:1em;">
                    <div class=" d-flex flex-column" style="width: 90px;height:100%;">
                        <h1 style="font-weight: 500;font-size: 2.5rem;color:#2a2185;" id="t2">100</h1>
                        <span style="color:#999;">Requêtes Traité</span>
                    </div>
                    <img src="../../img/good.svg" class="img-fluide rounded" style="width:70px;height:70px;object-fit:cover;">
                </div>
                <div class="position-relative  col hvr-bounce-to-top shadow p-3 m-2 bg-body-tertiary rounded w-35  border border-0  hover-background-danger" style="cursor:pointer;height:150px;margin-top:1em;flex-wrap:nowrap;display:flex;justify-content:center;align-items:center;gap:1em;">
                    <div class=" d-flex flex-column" style="width: 90px;height:100%;">
                        <h1 style="font-weight: 500;font-size: 2.5rem;color:#2a2185;" id="t3">100</h1>
                        <span style="color:#999;">Requêtes Refusé</span>
                    </div>
                    <img src="../../img/false.svg" class="img-fluide rounded" style="width:70px;height:70px;object-fit:cover;">
                </div>
                <div class="position-relative  col hvr-shutter-out-horizontal shadow p-3 m-2 bg-body-tertiary rounded w-35  border border-0  hover-background-danger" style="cursor:pointer;height:150px;margin-top:1em;flex-wrap:nowrap;display:flex;justify-content:center;align-items:center;gap:1em;">
                    <div class=" d-flex flex-column" style="width: 90px;height:100%;">
                        <h1 style="font-weight: 500;font-size: 2.5rem;color:#2a2185;" id="t">100</h1>
                        <span style="color:#999;">Total</span>
                    </div>
                    <img src="../../img/sum.svg" class="img-fluide rounded" style="width:70px;height:70px;object-fit:cover;">
                </div>

            </div>

            <select class="form-select form-select-lg mb-1 mt-2" id="select" aria-label="Large select example">
                <option selected value="ygu">Toute</option>
                <option value="t">Traiter</option>
                <option value="e">En attente</option>
                <option value="n">
                    Non fondé
                </option>
            </select>
            <table class="table  table-bordered table-striped mt-1">
                <thead>
                    <tr>
                        <th scope="col">Identifiant</th>
                        <th scope="col">Date de Soumission</th>
                        <th scope="col">Objet</th>
                        <th scope="col">Statut</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody id="l52e">
                
                </tbody>
            </table>





        </div>
      
    </main>
</body>

</html>