<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déconnexion</title>
    <link rel="stylesheet" href="../../style/dec.css">
</head>
<img src="../../img/cargando.gif" alt="pinner loading">
<script>
    let i = 0
    let t = setInterval(() => {
        if (i == 5) {
            clearInterval(t)
            const xhr = new XMLHttpRequest()
            xhr.open("GET", "../../../backend/log/dec.php", true)
            xhr.onloadend = () => {
                const res = JSON.parse(xhr.responseText)
                alert(res.msg)
                window.location.href = "../../"
            }
            xhr.send()
        }
        i++
    }, 100)
</script>
</body>

</html>