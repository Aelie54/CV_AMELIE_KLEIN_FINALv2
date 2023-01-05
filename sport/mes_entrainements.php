<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style_entrainement.css" />
        <title>Practive Time</title>

    </head>

    <body>

<div class="boutons_nav">
    <br><br>
    <input class="nav"
       type="button" onclick="window.location.href = 'entrainement.php';"
       value="M'entraîner">
       <input class="nav"
       type="button" onclick="window.location.href = 'mon_evolution.php';"
       value="Mon évolution">
    <br><br>
</div>

<br><br><br>

    <div class="exercices_choice">
        <form action="/ma-page-de-traitement" method="post">
            <div>
                <label for="Date AAAA-MM-NN">Nom :</label><br>
                <input type="date" id="date" name="dateuser_name">
            </div><br>
            <SELECT for="selectionner une année" name="année" size="1">
                <OPTION>2021
                <OPTION>2022
            </SELECT>

            <SELECT for="selectionner un mois" name="année" size="1">
                <OPTION>Janvier
                <OPTION>Février
                <OPTION>Mars
                <OPTION>Avril
                <OPTION>Mai
                <OPTION>Juin
                <OPTION>Juillet
                <OPTION>Aout
                <OPTION>Septembre
                <OPTION>Octobre
                <OPTION>Novembre
                <OPTION>Décembre
            </SELECT>

            <SELECT for="selectionner un mois" name="année" size="1">
                <OPTION> vide
                <OPTION> vide
                <OPTION> vide
                <OPTION> vide
                <OPTION> vide
                <OPTION> vide
                <OPTION>
                <OPTION>
                <OPTION>
                <OPTION>
                <OPTION>
                <OPTION>
            </SELECT><br>
    

        <div class="boutons_valider">
            <br><input class="Valider"
            type="submit"
            value="Valider">
        </div>
    </form>
</div>

    </body>