<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="series.css">
    <title>Cinetech</title>
</head>

<body>
    <?php
    require("header.php");
    ?>
    <main>
        <select name="categories" id="categories-select" value="categorie">
        <option value="">Catégorie</option>

        </select>
        <div id="séries"></div>
    </main>
</body>

</html>
<script>
    fetch('https://api.themoviedb.org/3/genre/tv/list?api_key=7c8573e07bc29f162cd95a3850c8b3b1&language=en-US', {
        method: 'GET'
    }).then((res) =>
        res.json()
    ).then((data) => {
        data.genres.filter(function(resultats) {
            let select = document.getElementById("categories-select");
            let option = document.createElement('option');
            option.setAttribute('value', resultats.id);
            option.innerHTML = resultats.name;
            select.append(option);
            console.log(resultats.id)
        });

    })
    const elt = document.querySelector("select");
    elt.addEventListener("change", () => {
        let séries = document.getElementById("séries");
        séries.innerHTML = '';// pour qu'a chaque changement de catégories, il ne me mette pas tout à la suite: action + horror etc..
        const value = elt.value;
        fetch('https://api.themoviedb.org/3/discover/tv?api_key=7c8573e07bc29f162cd95a3850c8b3b1&l&language=en-US&sort_by=popularity.desc&page=1&timezone=America%2FNew_York&include_null_first_air_dates=false&with_watch_monetization_types=flatrate&with_status=0&with_type=0&with_genres='+value, {
        method: 'GET'
    }).then((res) =>
        res.json()
    ).then((data) => {
        data.results.forEach(element => {
             //Traitement + affichage des données 
                console.log(element);
                let p = document.createElement('p');
                let img = document.createElement('img');
                img.src = "https://image.tmdb.org/t/p/original" + element.poster_path;
                p.innerHTML = element.name;
                p.append(img);
                séries.append(p);
            }
        )
    })
    })
  
</script>