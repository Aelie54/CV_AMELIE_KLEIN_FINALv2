<!DOCTYPE html>
<html>

<!--head-->
<?php include './head.php' ?>

<body class="bg1" id="body">

    <!--header-->
    <?php include './header.php' ?>


    <div class="flex-body" >
        <div class="article-contain gradient-border" >

            <div class="flex-contain" id="introAK">

                <div>
                    <br><h1>En route pour une reconversion vers le développement Web</h1><br>
                </div>

                <br>

                <p>
                    <span class= "italique">31 ans • Habite à Laneuveville-devant-Nancy • Permis B, véhiculée</span>
                </p>

                <br>

                <div style="align-text:justify">

                    <p> J'ai commencé par me former seule à la maison aux langages HTML, CSS et JS via Openclassrooms pour des débuts purement front-end. <br><br> Du 25 octobre 2021 au  6 jullet 2022, j'ai eu la chance de suivre une formation d'Alaji pour devenir développeur web full stack.<br>
                        <br> J'ai ainsi obtenu une qualification de développeur Web et Web mobile full stack orienté objet d'équivalence Bac+2. Nous avons ainsi suivi le programme sur plusieurs thèmes : </p>
                        <ul style="list-style-image:square;">
                            <li> la découverte des outils les plus importants que sont Git Hub et Visual Studio Code</li>
                            <li> la création d'une base de données via SQL (MySQL et PhpMyAdmin) et l'écriture et la compréhension des diagrammes UML, </li>
                            <li> pour l'aspect visuel, les langages CSS, SCSS, affichage responsive (media queries), avec une utilisation des outils Bootstrap et Figma, </li>
                            <li> la sécurisation Front (interface utilisateur) et Back (API) d'un site internet, </li>
                            <li> l'utilisation d'API pour générer du contenu depuis une base de données extérieure (outil indispensable : Postman)</li>
                            <li> le langage PHP orienté objet (Doctrine/ORM puis Symfony pour la création d'API) pour le fonctionnement back-end et la gestion de la base de données, dans le respect du modèle MVC dans l'organisation du code, </li>
                            <li> une approche également de Javascript et de la bibliothèque JQuerry pour modifier le DOM, et la découverte de la méthode Ajax, </li>
                            <li> la découvert de VueJS et de son système de store (Pinia) pour la création Front d'un site web et la consommation d'une API, avec un affichage adapté à l'utilisateur connecté en fonction de son rôle, </li>
                            <li> la création d'une API sur NodeJS avec système d'authentification. </li>
                        </ul><br>
                <p>

                    <p> J'ai eu la chance de mener un premier projet pour une entreprise lors de mon stage d'un mois chez Aprex Solutions (voir la rubrique expériences profesionnelles)</p><br>

                    <p>Je suis maintenant à la recherche de mon premier emploi en tant que web dev débutante !</p><a style="text-decoration:underline; font-weight: bold; color:orange;" onclick="run4()">cliquez ici</a>

                    <br><br>
                    Vous pouvez naviguer à travers ce petit site internet que j'ai réalisé pour découvrir mon parcours avant de commencer cette formation !
                    <br><br>
                    Pour changer de background (vider le cache pour éviter les répétitions de fonds avec Ctrl+r+Shift) : <br><br>

                    <button class="change" type="button" id="change" value="1" onclick="changeClass()" style="border:none; background-color:transparent; pointer-events: auto; display: block;margin: auto;">
                        <img style="height:100px" src="https://pic1.mangapicgallery.com/r/essay/d3/raw_/1989135_13410212.gif">
                    </button>

                </p>
                <br><br>
            </div>
        </div>
    </div>
</div>

<!--Footer-->
<?php include './footer.php' ?>

</html>