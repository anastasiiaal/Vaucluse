<?php
require_once "templates/head.php";
?>
<div class="index__cover">
    <div id="overlay"></div>
    <?php
    require_once "templates/header.php";
    ?>
    <section id="offer">
        <div class="container">
            <div class="offer__text d-flex">
                <h1>
                    <?= ($eng === 1) ? 'We are all in need <br> <span> of colors</span> ' : 'On a tous besoin <br> <span> de couleurs </span>' ?>
                </h1>
                <a id="overlayed" href="#decouvrir"><?= ($eng === 1) ? 'Discover' : 'Découvrir' ?></a>
            </div>
        </div>
    </section>
</div>
<main>
    <section id="history">
        <div class="container">
            <h2>
                <?= ($eng === 1) ? 'History of the department' : 'Histoire du département' ?>
            </h2>
            <div class="history__wrapper d-flex">
                <img src="img/histoire01.jpg" alt="Panoramique sur Gordes">
                <div class="history__dates d-flex">
                    <div class="history__date">
                        <h3>1789</h3>
                        <p>
                            <?= ($eng === 1) ? 'French revolution: here it is!' : 'La Révolution Française est là !' ?>
                        </p>
                    </div>
                    <div class="history__date">
                        <h3>1790</h3>
                        <p>
                            <?= ($eng === 1) ? 'Adoption of the decrees of the law of December 22, 1789 creating the departments' : 'Adoption des décrets de la loi du 22 décembre 1789 créant les départements' ?>
                        </p>
                    </div>
                    <div class="history__date">
                        <h3>1791</h3>
                        <p>
                            <?= ($eng === 1) ? 'Vote of the meeting of the Papal States in France' : 'Vote de la réunion des États pontificaux à la France' ?>
                        </p>
                    </div>
                    <div class="history__date">
                        <h3>1793</h3>
                        <p>
                            <?= ($eng === 1) ? 'Official birth of the Vaucluse Department' : 'Naissance officielle du département du Vaucluse' ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="history__wrapper history__wrapper-inverse d-flex">
                <div class="history__dates d-flex">
                    <div class="history__date">
                        <h3>1800</h3>
                        <p>
                            <?= ($eng === 1) ? 'Each department is attributed a prefect' : 'Chaque département se voit doté d’un préfet' ?>
                        </p>
                    </div>
                    <div class="history__date">
                        <h3>1871</h3>
                        <p>
                            <?= ($eng === 1) ? 'The department becomes a territorial collectivity' : 'Le département devient une collectivité territoriale' ?>
                        </p>
                    </div>
                    <div class="history__date">
                        <h3>1982-<br>2008</h3>
                        <p>
                            <?= ($eng === 1) ? 'Decentralization laws grant unprecedented autonomy to departments and expand their powers' : 'Les lois de décentralisation accordent une autonomie sans précédent aux départements et élargissent leurs compétences' ?>
                        </p>
                    </div>
                    <div class="history__date">
                        <h3>2015</h3>
                        <p>
                            <?= ($eng === 1) ? 'The Departmental Council (and no longer the General Council) directs the Department' : 'Le Conseil départemental (et non plus le conseil général) dirige le Département' ?>
                        </p>
                    </div>
                </div>
                <img src="img/histoire02.jpg" alt="Panoramique sur Gordes">
            </div>
        </div>
    </section>
    <section id="geoposition">
        <div class="container">
            <h2>
                <?= ($eng === 1) ? 'Where is the 84<sup style="font-size: 20px;">th</sup>  situated?' : 'Où se situe le 84 ?' ?>
            </h2>
            <div class="geoposition__wrapper d-flex">
                <img src="<?= ($eng === 1) ? 'img/en.carte4.png' : 'img/carte4.png' ?>" alt="Carte de France">
                <p>
                    <?= ($eng === 1) ? 
                        "The Vaucluse department is part of the Provence-Alpes-Côte d'Azur region, a region located in the south-east of France. It borders the departments of Gard in the west, Ardèche in the north-west, Drôme in the north, Alpes-de-Haute-Provence in the east, Var and Bouches-du-Rhône in the South. <br><br>
                        Vaucluse also has a part in the north, the canton of Valréas, entirely enclosed in the Drôme.<br><br> 
                        The department of Vaucluse is subject to different types of climates. Indeed, its particular geographical location places it at a meeting point between three of the four major climates of France: the Mediterranean climate for its southern part, the mountain climate for its north-eastern part with the high relief of the Monts de Vaucluse and the Massif des Baronnies and finally a very relative influence of the semi-continental climate for its north-western part.<br><br>
                        Vaucluse is also known for its mistrals. In 1967, a wind blowing at 320 km / h was recorded at the top of Mont Ventoux. This is one of the high wind speed records recorded in mainland France.<br><br>"
                    : 
                        "Le département de Vaucluse fait partie de la région Provence-Alpes-Côte d'Azur, région située au sud-est de la France. Il est limitrophe des départements du Gard à l'ouest, de l'Ardèche au nord-ouest, de la Drôme au nord, des Alpes-de-Haute-Provence à l'est, du Var et des Bouches-du-Rhône au sud. <br><br>
                        Le Vaucluse possède également au Nord une partie, le canton de Valréas, entièrement enclavée dans la Drôme. <br><br>
                        Le département de Vaucluse est soumis à différents types de climats. En effet, son emplacement géographique particulier le place à un point de rencontre entre trois des quatre climats majeurs de France : le climat méditerranéen pour sa partie sud, le climat montagnard pour sa partie nord-est avec le relief élevé des Monts de Vaucluse et du massif des Baronnies et enfin une influence toute relative du climat semi-continental pour sa partie nord-ouest.<br><br>
                        Le Vaucluse est également connu pour ses mistrales. En 1967, un vent soufflant à 320 km/h a été enregistré au sommet du Mont Ventoux. Il s'agit de l'un des records de grande vitesse de vent enregistré en France métropolitaine.<br><br>" 
                    ?>
                </p>
            </div>
        </div>
    </section>
    <section id="decouvrir">
        <div class="container">
            <h2>
                <?= ($eng === 1) ? 'Discover' : 'Découvrir'?> Vaucluse
            </h2>
            <div class="decouvrir__wrapper d-flex">
                <a href="lieux.html">
                    <img src="img/decouvrir01.jpg" alt="Lieux incountournables">
                    <h3>
                        <?= ($eng === 1) ? 'Places you should not miss' : 'Lieux incountournables' ?>
                    </h3>
                </a>
                <a href="marches.html">
                    <img src="img/decouvrir02.jpg" alt="Marchés & foires">
                    <h3>
                        <?= ($eng === 1) ? 'Local markets' : 'Marchés & foires' ?>
                    </h3>
                </a>
                <a href="actualites.html">
                    <img src="img/decouvrir03.jpg" alt="Actualités">
                    <h3>
                        <?= ($eng === 1) ? 'News' : 'Actualités' ?>
                    </h3>
                </a>
                <a href="#history">
                    <img src="img/decouvrir04.jpg" alt="Histoire du département">
                    <h3>
                        <?= ($eng === 1) ? 'History of the department' : 'Histoire du département' ?>
                    </h3>
                </a>
            </div>
        </div>
    </section>
</main>











<?php
require_once "templates/footer.php";
