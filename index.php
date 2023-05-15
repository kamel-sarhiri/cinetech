<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cinetech</title>
</head>

<body>
    <?php
    require("header.php");
    ?>
    <main>
        <div id="films"></div>
        <div class="series"></div>
    </main>

    <script>
        // recuperer les films populaires
        fetch('https://api.themoviedb.org/3/movie/popular?api_key=e36a2cf5e6bd97879978ee516f3e4cf5', {
            method: 'GET'
        }).then((res) =>
            res.json()
        ).then((data) => {
            data.results.filter(function(resultats) {
                console.log(resultats);
                let films = document.getElementById("films");
                let p = document.createElement('p');
                let img = document.createElement('img');
                img.src = "https://image.tmdb.org/t/p/original" + resultats.poster_path;
                p.innerHTML = resultats.title;
                p.append(img);
                //    console.log(p.innerHTML);
                films.append(p);
            });
        })
        
    </script>
</body>
<?php
var_dump($_SESSION);
?>
</html>