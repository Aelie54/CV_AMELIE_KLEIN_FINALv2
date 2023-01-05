<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style_entrainement.css" />
        <title>Practive Time</title>

    </head>

    <div class="boutons_nav">
    <br><br>
    <input class="nav"
       type="button" onclick="window.location.href = 'entrainement.php';"
       value="M'entraîner">
       <input class="nav"
       type="button" onclick="window.location.href = 'mes_entrainements.php';"
       value="Mes entraînements">
       
    <br><br>
</div>

<br><br><br>

    <body>

    <div class="exercices_choice">
        <form action="/.">
          <SELECT for="selectionner exercice" name="exercise" size="1"><br>
          <option value="selectionner_exercice">selectionner exercice</option>
            <!-- Index = 0 et Valeur = selectionner_exercice et Texte = selectionner exercice -->
            <option value="developpe_couche">Developpé couché</option>
            <option value="souleve_de_terre">Soulevé de terre</option>
            <option value="traction">Traction</option>
            <option value="souleve_militaire">Soulevé militaire</option>
            <option value="squat">Squat</option>
            <option value="fente">Fente</option>
            <option value="corde">Corde traction triceps</option>
            <option value="tirage">Tirage poitrine</option>
            <option value="lombaire">Extension lombaire</option>
            <option value="abdos_jambes">Abdos sur banc : levé de jambes</option>
            <option value="abdos_buste">Abdos sur banc : levé de buste</option>
            <option value="tapis">Tapis de course</option>
            <option value="velo">Vélo</option>
            <option value="escalier">Monte marches</option>
            <option value="velo_el">Vélo élliptique</option>
            <option value="plg">Planche latérale gauche</option>
            <option value="pld">Planche latérale droite</option>
            <option value="psc">Planche face au sol sur coude</option>
            <option value="psb">Planche face au sol bras tendus</option>
            <option value="pont_sol">Pont bras bras tendus</option>
            <option value="pont_bras">Pont bras tendus jambes pliées</option>
            <option value="pont_bras">Pont épaules au sol</option>
            </SELECT>
            
            <br><br>

        <div class="bouton_valider">
            <input class="bouton_valideralider"
            type="submit"
            value="Valider">
        </div>
    </form>
</div>

</body>