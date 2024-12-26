<?php
session_start();
if (!isset($_SESSION["wa"])) {
  header("location:../log/login.php");
}
?>
<!doctype html>
<html lang="fr" data-bs-theme="auto">

<head>
  <script src="/docs/5.3/assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Warano, carineteoi@gmail.com, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.122.0">
  <title>Paramètre de compte · GP5_BD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAz1BMVEX///9ohJFUanSq/+zS2t6SprBgfoxphZKs/+/FztKVqbNffYtRZ3Gu//Fyi5dkgY5PYW2Wt7uxur5lfo1bcXtWbHZHYGvp7e+Knqix//ZQY29NXWrZ4OT4+fqGnKbw8/Rug42/ys+fsLii6uHO19vh5um4xMqOycVumJhpkJJ7k55ceYCpuMBliIx8qq1xlZ2b4dh/tLBoe4Sk8+SFlJuW1tB6ramLpayIvr6Etrh5paiW0c6q4Nt5ipiu8OaGoanJ4uG97uabw8HE5+OMysJ2QpvGAAAQRUlEQVR4nO2dC3fauBLHa2psgwX2NobwMO9XAkmXQJLNpne79+7N9/9MV4bwsDR6jEzjcA//0/b09NBYP2Y0kkYj+cuXiy666KKLLrrooovkmpQ0NO7l3UxjTaq+oyHfH+bdUlNZgaUn/1veTTVTydcEtCwn77aaqaFrQmrEOO/GGqmqDWg5g7wba6JrfRNaQTHv1poodhCE87xba6I7hA2t4Drv5hqoiCF0zjDUdBCBhhLe5d1evDCBhnppOe/24lVCBBqqaifvBqP1DUdonV+o6aK81HJKeTcYK1ygoYTTvFuM1QTppEE37xZjNdZfWGx1dqFmiOuG1E0neTcZKWSgoQuocd5NxqmDBbSCM0tlXGO74dmFmikylCaI5xVq0IGGdsTzmtXM8YTnNavpuWhAKzirBRRyYbHVWY35Bk56Xgm3AXqs2BrxbDYwMFm2Y53NkBibuOhGTuMsuuLAGJAizj//oBh3zfrgu4LgLg8zdnq6T6V8GSy4NaM+Y+9Ekak3rPpWeazx2OtiZr4NozvVeNhk2vX9+SkGmGs3iYyBXx0qIHt3wSn4EvlzW9GoaTdwgqRZJ8iz7gfvwHGHthhyUDUcIyAFTkO85Kd4lrNrlZ95NpsavAPfLcOQ9jxTgAEY/SHYy64Hc8c59hU3Y2TqsUlBCjmM2R963ThJB0zLCbgEY2+wdc7UxzJO2IeA6wVOdZjaKppqlyTg5HePH9MrNTi8TXMypbBEWU8aeO7ef3Bn6p6wAzKPcbq7kFPirbf7UCMLoWSNEPh+tdvour4eXxBcMdL7b3REaDTmji/AS5Ql2KjWCIHW+JCwWdU/Xl5eZk8jquUT/eufr1VLDzNQPsU82HBhxkAU7/fffvzrZyWR53lfv36lfyZ/r6yXP/6sXl1l78PmwQYKMyhdXf31B4XbgvFKSEdvr5amx4plGmwm2b7d4Kr6Qk0Hwx1hVrzldysbo2mwQSfmj+Vc/f2kpNvbcj37PZMhzbYEEGVpnK6u/vkpcE0B5NfR9yw9smoAiN95OPC5v+ma79hb16/mdjQJNsZhJnBnKPMdVBm9GtsRnzHH7uEeHlUeV4z4Ejt6y98NzYgPNoZhxnEHsf1vU8KE8cXQjNhgYxZmgqAc21T/MUekrmpmxgCXMu8Y7DskDxlsAG3b2E8TM1ZmRoi4YHNn0gv9rr1TBj9NzLg08lQHEWyMZjPOMN4T2v/NhOitTTwVE2wQFdqHn393BGjbP7Mheq8GiI52sDHYGwvcUgrQts2GxAPjAx4xmGsGm04VX0jhjm1G2boi7YwveETd0jF8mAEAsw0ZiZomiFrBxqBQBAK07fVxe+lSsNmky97tr6Z6VbVBxA5aesEGHWYEgLZ9oGv+XP7z8Pp6c3tDf93e3rw+z5ajSlNB2fwTjegrkuWJ0CV3llWCAbdDBsX78cd9LQxbW5HNr1bYbi1uZyM5ZOUZixiol1H4MONMYwEhHTLoAv7vVrtFCoBIqx0uXtayhYh3i0V0lIfE0GHGHwoB7Xj9sghbEN2eMmzdLiV90lugragINtdYwKArBIzHxSgErcdA3osZvVE7wCGqDhhh69GCqtiAQ6LG2zK270eiuXrlDY0oH/ZRB12SHzcQ8Q36dT2+rR0fRN2x8hriEBXHb5ClPo6oE8bFuqYB39VeLAVmXEcE1RcVS2GkDauiTogx4M6Mb03YiE/tAsaKChsOUP3Qh300HkQ4A76b8Rl21OZNSHwEorwfdjDjvVMGTRhPdUMMo/AWRlzXiD6io6qmxiRo4NkaBTTio2rBiJVZWChoIjpzZQlKrF1Rwax5swMKregtSEHPir7Ocdtr3XkbPBQODF1Uhlh5o0bUQdS8u6A31wo3DmhCWxJkSNhuh63kt/gz7QcooiZGLJBIhah9eKpT1OqMYCfsCxpP2u1o8TybzZ7o79tFQTAbp4hPwLjovbULakTMdvdQjejcQYANeBxshfd0pdRM9koTNZve8lU0J2+NAEetbFxDihgEqLPE6iUGGEinIGBYeB5VGMt4zcrTbRuyY+seINwaUYYYVJEbwapRIyhCvXAFNJnOOdfghMzzlvdtyE/fgI+v3w0uQtQYJVjF8jInZwr46BAwYXgP820Z30AzQka8kSI6JgXUE1eGCA0VJR6QtB6kOafK+p7vjeEN/514T+/mBh3VsETxWlYvBCwq4kfOHoSIVgwHM76GvJ+ugQ8uyA6RBzQtN+l0hfHGAeLMuMYDQnGRNeN3rjO2nvnvpfK8/yZYRD9DHa0QcQ6YsMiakBQ0AOna4TtvRd6I3vLwRaQRsx2YEuzmB8CqYhxxplC56M48N2xfDB8AIx59dbWjtrgaKVI8IrQw/MbGmfZMd6N038f2CAve+M3bow8drJj9/DC8oc93Qy7OkHvtnWBvxHbFcMkhVmbHH9pZ8RTHh4GlRgB0Q5vthS0gIIpUeWC6IhRr0l9DzUpGDf8UFxXE/OwGWlawTgp1JYkYPyUR0BHTn6kF7qnuJuK3aoAJDeukJEKYcD/vlLpp8z79iBpm11cqYK+G34uJmSkp0oRcsGm/8R2RdeUCssJEqGtumuTyvXDMPBwY0aRim9+64VbC3owlJCe6t4e7piSY84SDdDckfAMVNhylm08WPOETS1g/1W2EHCG/coqHjJM9YSsVKmwv451gzYbrX0fIT7u5QIMuxag8pGNNOOI+0mQnBr+OkB8sGELAx1Q6nnduvGDJf+T+8xACcUIpZl4DzWrytKGdzrG1Z/iCoWZ65h7ys1q2q/5CQiCDkR4OQ3Sg4Qb01nPTY8StQX4dIVB8kSZs8S6mJrxNtZ/0f+PEJmM/lDD9cIIc7zeErwxhucionCshM2kzqNtjZjWfnNDEhkeJmE9JmH44mJlXqHnzibwUyGGcINKkYylEyKbUfx3hN348TD+8/cOAMD2ekypPyOa6PnROk3Yg7OowETOvJnOOsJgrITMvvcfP2ph5KWlwgJ+KMMLPvJ8+EyGfD44bzPoQHUyZUAoSMoAnI+TX+EA9IpNqC8HteJnWzK5HxHfDxq9aAfMHnoGttRITJ4CktVRcimLFh9I5tzFyoqvcgWufxhxhzPSRNnJEZNcN0GBR5Qj7pyHk9/SBIX/CzDcE5U1CEy4ZE5Iu56TcgE8/dZJLT4H786CMMLvDDazRESakDsgTcptbJ3JTYPcJKlNgt7gJVFIhNiGT8iZ8Nyxy+5NU9RMYESzKAOpK2aR3oY2Y13hsJRU0o+lChR5R5qy3DVad+EBav8w2IFzrWpFZOCUCnBQst8ocbGK4fMUHclElLtLpjhibwjylkwLdcPPRR1Mrbv7fWFCKCY358V+cEW+1/NRbcgUnQCTlx/u9FTu75uIlLowC9mZsvrA0fNWY2Xgjvl4TmNDw4/3B4Mb3tkkOX4AlUXxHCW++qjy1sizwwxwQZ4DR8IBoGFFlBYrgURmuVkFe87VR8w0ow6wBQ4XISTeIBaOd0oa8dg/I1UDFpS3yJjvW5N0AtXukC5hQVLi6/R91fE2NpB5q66ZDoCdy4TRR+2YtYPS8twioMQVHe25tyAi9zJDVtG0F7JImJ2WAh7fI8xo4Z1ipPN3DB7+AlSE43KcRcXe6T9Q3sMGnSeBwELZunirNw8kmz6s0Rw8LmA9YVUjjzB7xEQE4ltwdthN8LA/006TZ7cLtbDZKDgBXmuun2fOiLTi4B/uoLM7sEfvag6Le0SDQiDEQT/eQ7VahtlhEtUIowksmmhCghgk3X47mvRF3esdmYCOKatn3rVA1FeqEWiZMfnhNa2As654Lgs8exo/oY2vHAgYKXRMmiHX1wKgaJZRGzIYIAqoD6UHqUUPvvMxWglPc5ojQUI8x4QZRUcsHlOlJBM2/zRGJwILiOTf4U1ZyQtx7KRzw0AVFvDM43kWiIggIZi8kUiQ2kOeABYdIk1OkWDMCu2kGPpoQyqeoyCu+hIfV4/Ej6qgzqQELJgMfVRNir1QQHJRNGKcIM7b6Ig8tFrkzDqovS+6l6Hs/oIzNjrEcaXVHQlZwiNkIe2iaRFJAg3dvOKKbTRJXHa6UjHI++bIQUl11vGSCvrylOhYi2rFdljISUus3xHz4TqiTXUTfCAkW7u9VLhfnqxrhMek/kajfLUv4imXEZGb3Y9UzU/x1e6JRcRNu6ESaQjTm/YiuKbagyZ+1aNXvNqR49D82sFGmUNfZyMC/JEaCuG/sBqbRbSTqNvb/IgVEh1EqrSUi/kU/QsSpAuLUgKpJ6bvwwcbyGyDiOAsg3kX1NzEMrp91QMQMJjQBLBDd09wm7xRz5uNTmrDcNQDUCjNb4e5w2SpYsTcnZjAhv2Wvoxpi/8LkrWJBjS13MzcheiazMSHmHBtuIbwTSZ3DiO9MDdgwusAHuVdaNrqumPSPPdUUcM5vRmmZEHdatmcCaFmF+n41ZWjCMnoxsTMhtizD4EWiluVatfrq/bZko0BapiHG8HobTJjZyugVhm5AJ9mP49jQhOWuoQGNStzMgo1rJTmzxjg2MGEGPmWGDZRZsKGOmqweilgTlrPwGVYO9cxuf6eOmnynpN8Vp154vuI8Cx9mNnOsqdkLLtxg6zckaugxUvP1a1n4CgQfZrYyCjZ7xKRD9ovloXwVXy52+3oJK5kJTStpTd8nukcskDqJ+nNwubv5p8Y8Uu+3KZWh8sss2BwjFjY7hrVVv0oX9puMxpaMslX7US07XSLkbOZYPZkRA8dPBH7EdZii6G2GphZFq9Uqydjs/kVtn/pWsoQdZgOflTDYBL5VHown15Px1IUulHL9LEY54utPxxP6kG8rCWSml3WCwSZwrOLRCy1L0LsdT4FI6o+HYW4yXNVBs2cs2Lf5Gm8/KJbS31rnDjBjdsR6xPQvEDJzgWn6UtrACbolIGE3AV7x6PrZxjgyBB4UDyMGUmPnXq6jmQ11zsZA5PM2vz2exYqENERPiouroyiVKcxs9R5saGgR423Ev2rVRe5tHvjqj7KsWcfeuyshJ3gn8NTxHcfvDpTVOD2uO7pmk816pKw07NhF6q71umllKdPy0t1U75viXnlsgliv6QXHTjwcZrzmy0STYrokDo1I+T77+9XjdMhxFXWhLCD8FuDPJeYGW5QVDUp9c9HQ1Ip11C2yeaoRGCGeiwW/8NlWPcQTDN4fJ7YsR2sj6TSHCT9I7IvbXA1E8lfercaIOxytYcWTHT3/GPHvyVAiZl4kfKyA+jgVYv0MxvojQQcz5YhGefkc1eMJt8lwMeE5jRWJgNeyp3KMvJOeV6CB308nRcyQ9MxH4A6rFPG8Ao3oDLh79f8SaISFAEIrEsNX3OcowcaVyIpnF2jEJzdcB7bh2SwN9xIWc8BpVNM9zhwVC3fmoGT4qW6a+UhJChwBxFPdFvShkhy/4RFRVXefRbJDYi53X+75BRrF273ZHGP2a2Zy0ERa55BGPMdAozy4kUIkuOsCPosU5TjHadQzypQeS3XS7wixrnmQ/pNJeW5jj3ie3fBLcnWBquIoSspqSP0Ud5Llo3G5qtAqiqLV8Dx99KKLLrrooosuuugD9T9JWeQKIa4I5QAAAABJRU5ErkJggg==">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous" defer></script>
  <meta name="theme-color" content="#712cf9">
  <script src="../../js/config.hr.js" defer></script>

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


  <!-- Custom styles for this template -->
  <link href="sidebars.css" rel="stylesheet">
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
    <h1 class="visually-hidden">Sidebars examples</h1>

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
          <a href="../../" class="nav-link text-white" aria-current="page">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#home" />
            </svg>
            Accueil
          </a>
        </li>
        <li>
          <a href="../r.php" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#speedometer2" />
            </svg>
            Requête Rapide
          </a>
        </li>
        <li>
          <a href="../hr.php" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#table" />
            </svg>
            Historique de Requête
          </a>
        </li>
        <li>
          <a href="../produit.php" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#grid" />
            </svg>
            Products
          </a>
        </li>
        <li>
          <a href="../" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#people-circle" />
            </svg>
            Mon compte
          </a>
        </li>
        <li>
          <a href="#" class="nav-link active">
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
          <img src=" <?php echo $_SESSION["pp"] ?> " alt="" width="32" height="32" class="rounded-circle me-2">
          <strong> <?php echo (strlen($_SESSION["name"]) > 20) ? substr($_SESSION["name"], 0, 18) . '...' : $_SESSION["name"] ?> </strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
          <li><a class="dropdown-item" href="#">Paramètre</a></li>
          <li><a class="dropdown-item" href="../hr.php">Historique</a></li>
          <li><a class="dropdown-item text-danger " href="../decon.php">Déconnexion</a></li>
        </ul>
      </div>
    </div>

    <div class="b-example-divider b-example-vr"></div>


    <div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">His. Connexion</a></li>
        <li class="nav-item"><a href="../" class="nav-link">Profil</a></li>
        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
      </ul>
    </header>
    </div>

  </main>

</body>

</html>