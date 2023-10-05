<?php
$name = "Lumières Éthérées";

$description1 = "Les Lumières Éthérées, un groupe musical de Roselune, fusionne la folk, le rock alternatif et la musique celtique pour créer une expérience musicale enchanteresse.
            Formé par Clara (chant), Leo (guitare), Ezra (multi-instrumentiste) et Sam (batterie), le groupe évoque des paysages mystiques et des rêves à travers sa musique.
            Le nom du groupe est inspiré des nuits étoilées de Roselune, où ils ont composé leurs premières chansons.
            Leur alchimie musicale s'est formée lors d'une rencontre fortuite lors d'un festival local.
            Les Lumières Éthérées ont conquis les petits clubs de Roselune avec leur musique captivante.
            Leur style unique transporte le public vers des mondes imaginaires.
            Leurs performances sont réputées pour leur ambiance immersive et envoûtante.";

$description2 = "Ils restent fidèles à leur amour pour la magie de la musique et des étoiles.
            Le groupe est en constante croissance, se produisant dans des lieux prestigieux.
            Leur musique invite à la contemplation et à la rêverie.
            Les membres du groupe sont des virtuoses de leurs instruments respectifs.
            Clara apporte des harmonies angéliques, Leo une guitare virtuose, Ezra des mélodies envoûtantes et Sam un rythme puissant.
            Ils sont devenus un pilier de la scène musicale de Roselune.
            Les Lumières Éthérées captivent les cœurs et les esprits grâce à leur musique enchanteresse.
            Leur voyage musical continue, promettant encore plus de découvertes et de mystères.";
?>




<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $name; ?>, groupe de musique sur Bordeaux">
    <link rel="stylesheet" href="index.css">
    <title><?php echo $name; ?></title>
</head>



<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Acceuil</a></li>
                <li><a href="#">Présentation</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <h1><?php echo $name; ?></h1>
    </header>
</body>

<main>
    <section class="container">
        <h2>Le commencement</h2>
        <p>
            <?php echo $description1; ?>
        </p>
        <p>
            <?php echo $description2; ?>
        </p>

    </section>
    <h2>La discographie</h2>
    <section class="container1">
        <article class="album1">
            <div>
                <h3>Lurmess</h3>
                <img src="Album1.webp" alt="album Lurness">
                <ul>
                    <li> 1 : Blue 3:01</li>
                    <li> 2 : Dark 2:40</li>
                    <li> 3 : Grey 2:15</li>
                    <li> 4 : White 1:47</li>
                </ul>
            </div>
        </article>
        <article class="album2">
            <div>
                <h3>Earth</h3>
                <img src="Album2.webp" alt="album Earth">
                <ul>
                    <li> 1 : Sky 2:01</li>
                    <li> 2 : Symdrom 2:10</li>
                    <li> 3 : Absolution 1:49</li>
                    <li> 4 : Sacred 1:32</li>
                </ul>
            </div>
        </article>
        <article class="album3">
            <div>
                <h3>OtherWorld</h3>
                <img src="Album3.webp" alt="Album OtherWorld">
                <ul>
                    <li> 1 : Yann le + fort 2:33</li>
                    <li> 2 : Dead 1:45</li>
                    <li> 3 : Colonise 1:30</li>
                    <li> 4 : Fly 1:15</li>
                </ul>
            </div>
        </article>
    </section>

</main>

</html>