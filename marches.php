<!-- yes, i do know that normally for such project one's using a DB and loops data but no i'm not doing it here thnx bye -->
<?php
require_once "templates/head.php";
?>
<div class="marches__cover">
    <div id="overlay"></div>
    <?php
    require_once "templates/header.php";
    require_once "templates/slogan.php";

    if ($eng) {
        $hours = "Opening hours:";
        $link = "See on map";
        $close = "closed";

        $mo = "Monday";
        $tu = "Tuesday";
        $we = "Wednesday";
        $th = "Thursday";
        $fr = "Friday";
        $sa = "Saturday";
        $su = "Sunday";
    } else {
        $hours = "Les horaires d’ouverture :";
        $link = "Sur la carte";
        $close = "fermé";

        $mo = "lundi";
        $tu = "mardi";
        $we = "mercredi";
        $th = "jeudi";
        $fr = "vendredi";
        $sa = "samedi";
        $su = "dimanche";
    }
    ?>

<main>
        <section class="marches">
            <div class="container">
                <h2><?= $eng ? 'Local markets of Vaucluse' : 'Marchés & foires de Vaucluse' ?></h2>
                <div class="marches__wrapper d-flex">
                    <div class="marches__card">
                        <img src="img/marche01.jpg" alt="Les Halles">
                        <div class="marches__text">
                            <h4>Les Halles</h4>
                            <p class="light">Place Pie, Avignon</p>
                            <h5><?= $hours ?></h5>
                            <div class="open__wrapper">
                                <div class="open__days">
                                    <ul>
                                        <li><?= $mo ?></li>
                                        <li><?= $tu ?> - <?= $fr ?></li>
                                        <li><?= $sa ?> - <?= $su ?></li>
                                    </ul>
                                </div>
                                <div class="open__hours">
                                    <ul>
                                        <li><?= $close ?></li>
                                        <li>6h - 14h</li>
                                        <li>6h - 13h</li>
                                    </ul>
                                </div>
                                <a href="https://www.google.com/maps/place/Les+Halles+d'Avignon/@43.9476197,4.8080343,17z/data=!3m2!4b1!5s0x12b5eb87fdbf2bfb:0xd6e6ff51567a6a83!4m5!3m4!1s0x12b5eb87f12bc2b5:0xab245fa1f8797383!8m2!3d43.9476159!4d4.810223" class="arrow" target="_blank"><?= $link ?> <img src="img/arrow-l.svg" alt="Flèche"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="marches__card">
                        <img src="img/marche02.jpg" alt="Marché Provençal de l’Isle-sur-la-Sorgue">
                        <div class="marches__text">
                            <h4>Marché Provençal de l’Isle-sur-la-Sorgue</h4>
                            <p class="light">Quai Jean Jaurès, L'Isle-sur-la-Sorgue</p>
                            <h5><?= $hours ?></h5>
                            <div class="open__wrapper">
                                <div class="open__days">
                                    <ul>
                                        <li><?= $th ?>, <?= $su ?></li>
                                        <li><?= $mo ?> - <?= $we ?></li>
                                        <li><?= $fr ?>, <?= $sa ?></li>
                                    </ul>
                                </div>
                                <div class="open__hours">
                                    <ul>
                                        <li>6h - 14h</li>
                                        <li><?= $close ?></li>
                                        <li><?= $close ?></li>
                                    </ul>
                                </div>
                                <a href="https://www.google.com/maps/place/L'Isle-sur-la-Sorgue+Market/@43.9192068,5.0517626,17z/data=!3m1!4b1!4m5!3m4!1s0x12b5f5f0c797fcf1:0x8ae66ba993a572ce!8m2!3d43.919203!4d5.0539513" class="arrow" target="_blank"><?= $link ?> <img src="img/arrow-l.svg" alt="Flèche"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="marches__card">
                        <img src="img/marche03.jpg" alt="Le marché de Châteauneuf-du-Pape">
                        <div class="marches__text">
                            <h4>Le marché de Châteauneuf-du-Pape</h4>
                            <p class="light">Place de la Renaissance, Châteauneuf-du-Pape</p>
                            <h5><?= $hours ?></h5>
                            <div class="open__wrapper">
                                <div class="open__days">
                                    <ul>
                                        <li><?= $su ?> - <?= $th ?></li>
                                        <li><?= $fr ?></li>
                                        <li><?= $sa ?></li>
                                    </ul>
                                </div>
                                <div class="open__hours">
                                    <ul>
                                        <li><?= $close ?></li>
                                        <li>7h - 13h</li>
                                        <li>8h - 12h30</li>
                                    </ul>
                                </div>
                                <a href="https://maps.google.com" class="arrow" target="_blank"><?= $link ?> <img src="img/arrow-l.svg" alt="Flèche"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="marches__card">
                        <img src="img/marche04.jpg" alt="Marché de Carpentras">
                        <div class="marches__text">
                            <h4>Marché de Carpentras</h4>
                            <p class="light">Les allées Jean Jaurès, Carpentras</p>
                            <h5><?= $hours ?></h5>
                            <div class="open__wrapper">
                                <div class="open__days">
                                    <ul>
                                        <li><?= $mo ?>, <?= $tu ?>, <?= $th ?></li>
                                        <li><?= $we ?>, <?= $fr ?></li>
                                        <li><?= $sa ?>, <?= $su ?></li>
                                    </ul>
                                </div>
                                <div class="open__hours">
                                    <ul>
                                        <li><?= $close ?></li>
                                        <li>8h - 12h30</li>
                                        <li>8h - 12h</li>
                                    </ul>
                                </div>
                                <a href="https://maps.google.com" class="arrow" target="_blank"><?= $link ?> <img src="img/arrow-l.svg" alt="Flèche"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="marches__card">
                        <img src="img/marche05.jpg" alt="Marché de Cavaillon">
                        <div class="marches__text">
                            <h4>Marché de Cavaillon</h4>
                            <p class="light">Place des Fêtes, Cavaillon</p>
                            <h5><?= $hours ?></h5>
                            <div class="open__wrapper">
                                <div class="open__days">
                                    <ul>
                                        <li><?= $th ?></li>
                                        <li><?= $fr ?></li>
                                        <li><?= $sa ?> - <?= $we ?></li>
                                    </ul>
                                </div>
                                <div class="open__hours">
                                    <ul>
                                        <li>17h - 19h</li>
                                        <li>8h - 13h</li>
                                        <li><?= $close ?></li>
                                    </ul>
                                </div>
                                <a href="https://maps.google.com" class="arrow" target="_blank"><?= $link ?> <img src="img/arrow-l.svg" alt="Flèche"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="marches__card">
                        <img src="img/marche06.jpg" alt="Le marché de Beaumes-de-Venise">
                        <div class="marches__text">
                            <h4>Le marché de Beaumes-de-Venise</h4>
                            <p class="light">Avenue Raspail, Beaumes-de-Venise </p>
                            <h5><?= $hours ?></h5>
                            <div class="open__wrapper">
                                <div class="open__days">
                                    <ul>
                                        <li><?= $tu ?></li>
                                        <li><?= $sa ?></li>
                                        <li>autres jours</li>
                                    </ul>
                                </div>
                                <div class="open__hours">
                                    <ul>
                                        <li>8h - 13h</li>
                                        <li>8h - 12h30</li>
                                        <li><?= $close ?></li>
                                    </ul>
                                </div>
                                <a href="https://maps.google.com" class="arrow" target="_blank"><?= $link ?> <img src="img/arrow-l.svg" alt="Flèche"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="marches__card">
                        <img src="img/marche07.jpg" alt="Grand marché provençal de Vaison-la-Romaine">
                        <div class="marches__text">
                            <h4>Grand marché provençal de Vaison-la-Romaine</h4>
                            <p class="light">Places princiales, Vaison-la-Romaine</p>
                            <h5><?= $hours ?></h5>
                            <div class="open__wrapper">
                                <div class="open__days">
                                    <ul>
                                        <li><?= $mo ?></li>
                                        <li><?= $tu ?></li>
                                        <li><?= $we ?> - <?= $su ?></li>
                                    </ul>
                                </div>
                                <div class="open__hours">
                                    <ul>
                                        <li><?= $close ?></li>
                                        <li>7h30 - 13h</li>
                                        <li><?= $close ?></li>
                                    </ul>
                                </div>
                                <a href="https://maps.google.com" class="arrow" target="_blank"><?= $link ?> <img src="img/arrow-l.svg" alt="Flèche"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
require_once "templates/footer.php";