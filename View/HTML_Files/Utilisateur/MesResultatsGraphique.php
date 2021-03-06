<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../CSS_files/GraphiqueResultats.css" />
    <title>Resultats Graphique</title>
</head>

<body>
    <?php include("ENTETE_MENU_Utilisateur.php"); ?>
<div class="canvas">
    <h2>Graphiques</h2>
    <div class="tabbed">
        <div class="tabs"><a href="#ReactS">ReactS</a><a href="#FC">FC</a><a href="#ReactV">ReactV</a><a href="#temp">temp</a></div>
        <div id="ReactS" class="tab">
            <div class="bargraph" style= "width: 365px;">
            <ul class="bars">
                <li class="bar1 purplebar" style="height: 136px;"><span>0.340</span></li>
                <li class="bar2 redbar" style="height: 131px;"><span>0.327</span></li>
                <li class="bar3 bluebar" style="height: 116px;"><span>0.289</span></li>
                <li class="bar4 greenbar" style="height: 124px;"><span>0.311</span></li>
                <li class="bar5 orangebar" style="height: 118px;"><span>0.294</span></li>
            </ul>
            <ul class="label"><li>13/01</li><li>24/01</li><li>07/02</li><li>21/02</li><li>01/03</li></ul>
            <ul class="y-axis"><li>0.5</li><li>0.375</li><li>0.25</li><li>0.125</li><li>0</li></ul>
            <p class="centered">Résultats aux tests de réaction à un stimulus sonor</p>
        </div>
        </div>
        <div id="FC" class="tab">
            <div class="bargraph" style= "width: 365px;">
            <ul class="bars">
                <li class="bar1 purplebar" style="height: 92px;"><span>92</span></li>
                <li class="bar2 redbar" style="height: 86px;"><span>86</span></li>
                <li class="bar3 bluebar" style="height: 90px;"><span>90</span></li>
                <li class="bar4 greenbar" style="height: 75px;"><span>75</span></li>
                <li class="bar5 orangebar" style="height: 82px;"><span>82</span></li>
            </ul>
            <ul class="label"><li>13/01</li><li>24/01</li><li>07/02</li><li>21/02</li><li>01/03</li></ul>
            <ul class="y-axis"><li>200</li><li>150</li><li>100</li><li>50</li><li>0</li></ul>
            <p class="centered">Résultats aux tests de fréquence cardiaque</p>
        </div>
        </div>
        <div id="ReactV" class="tab">
            <div class="bargraph" style= "width: 365px;">
                <ul class="bars">
                    <li class="bar1 purplebar" style="height: 116px;"><span>0.289</span></li>
                    <li class="bar2 redbar" style="height: 108px;"><span>0.271</span></li>
                    <li class="bar3 bluebar" style="height:110px;"><span>0.276</span></li>
                    <li class="bar4 greenbar" style="height: 105px;"><span>0.262</span></li>
                    <li class="bar5 orangebar" style="height: 102px;"><span>0.255</span></li>
                </ul>
                <ul class="label"><li>13/01</li><li>24/01</li><li>07/02</li><li>21/02</li><li>01/03</li></ul>
                <ul class="y-axis"><li>0.5</li><li>0.375</li><li>0.25</li><li>0.125</li><li>0</li></ul>
                <p class="centered">Résultats aux tests de réaction à un stimulus visuel</p>
            </div>
        </div>
        <div id="temp" class="tab">
            <div class="bargraph" style= "width: 365px;">
                <ul class="bars">
                    <li class="bar1 purplebar" style="height: 60px;"><span>36.5</span></li>
                    <li class="bar2 redbar" style="height: 88px;"><span>37.2</span></li>
                    <li class="bar3 bluebar" style="height: 76px;"><span>36.9</span></li>
                    <li class="bar4 greenbar" style="height: 128px;"><span>38.2</span></li>
                    <li class="bar5 orangebar" style="height: 80px;"><span>37.0</span></li>
                </ul>
                <ul class="label"><li>13/01</li><li>24/01</li><li>07/02</li><li>21/02</li><li>01/03</li></ul>
                <ul class="y-axis"><li>40</li><li>38.75</li><li>37.5</li><li>36.25</li><li>35</li></ul>
                <p class="centered">Résultats aux tests de température corporelle</p>
            </div>
        </div>
    </div>
</div>

    <a href="MonCompteUtilisateur.php">
        <button class="bouton_retour"> RETOUR</button>
    </a>

</body>
<footer>
    <?php include("../FOOTER.php"); ?>
</footer>
</html>
</html>