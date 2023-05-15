<!-- Partie PHP -->
<?php 
session_start();
?>
<header>

    <nav>
        <a href="index.php">Accueil</a>
        <a href="films.php">Films</a>
        <a href="series.php">Series</a>
        <?php
if(!empty($_SESSION)){
        ?>
        <a href="favoris.php">Favoris</a>
        <?php
}
        ?>
        <?php
if(empty($_SESSION)){
        ?>
        <a href="inscription.php">Inscription</a>
        <a href="connexion.php">Connexion</a>
        <?php
}
if(!empty($_SESSION)){
        ?>
                <a href="deconnexion.php">Deconnexion</a>
                <?php
}
        ?>
        <!-- <div class="searchInputWrapper wrapper2"> -->
            <!-- <form class="search-input" action="" method="get"> -->
                <a href="" target="_blank" hidden></a>
                <input type="text" id="recherche" class="form-control me-2" placeholder="Search your favorite climber..">
                <!-- <div class="autocom-box3"> -->
                    <!-- here list are inserted from javascript -->
                <!-- </div> -->
                
            <!-- </form> -->
        <!-- </div> -->
    </nav>
</header>