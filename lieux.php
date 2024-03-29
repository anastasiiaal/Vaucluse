<?php
require_once "templates/head.php";
?>
<div class="lieux__cover">
    <div id="overlay"></div>
    <?php
    require_once "templates/header.php";
    require_once "templates/slogan.php";

    if ($eng) {
        $link = "See on map";
    } else {
        $link = "Sur la carte";
    }
    ?>

<main>
    <section id="lieux">
        <div class="container">
            <h2><?= $eng ? 'Places not to miss' : 'Lieux à visiter' ?></h2>
            <div class="lieux__wrapper d-flex">
                <div class="lieux__card">
                    <img src="img/lieux01.jpg" alt="Palais des Papes">
                    <div class="lieux__text-wrapper">
                        <h4><?= $eng ? 'The Popes\' Palace' : 'Palais des Papes' ?></h4>
                        <p class="light">
                            <?= $eng ? 'In Avignon there are several sites to see, among them - the magnificent 14th century Gothic palace, former fortress and palace of the popes, one of the most visited French monuments.' 
                            :
                            'Sur Avignon, il y a plusieurs sites à voir, parmi eux - le magnifique palais gothique du XIV° siècle, ancienne forteresse et palais des papes, un des monuments français les plus visités.' ?> 
                        </p>
                        <a href="https://www.google.com/maps/place/Palais+des+Papes/@43.9508559,4.8055084,17z/data=!3m1!4b1!4m5!3m4!1s0x12b5eb868edbf86f:0x778ce565c188d2cb!8m2!3d43.9508521!4d4.8076971" class="arrow" target="_blank"> <?= $link ?> <img src="img/arrow-l.svg" alt="Flèche"> </a>
                    </div>
                </div>
                <div class="lieux__card">
                    <img src="img/lieux02.jpg" alt="Le Mont Ventoux">
                    <div class="lieux__text-wrapper">
                        <h4><?= $eng ? 'The Mont Ventoux' : 'Le Mont Ventoux' ?></h4>
                        <p class="light">
                            <?= $eng ? 'Absolutely unmissable site when visiting Vaucluse, Mont Ventoux is a majestic summit which rises to an altitude of 1,910 meters.' 
                            : 
                            'Site absolument incontournable lorsqu’on va visiter le Vaucluse, le Mont Ventoux est un sommet majestueux qui culmine à 1 910 mètres d’altitude.' ?> 
                        </p>
                        <a href="https://www.google.com/maps/place/Mt+Ventoux/@44.1740997,5.2699249,15z/data=!3m1!4b1!4m5!3m4!1s0x12ca645aaf6f7367:0xd3f24ac5c0a1bcd!8m2!3d44.1740851!4d5.2786797" class="arrow" target="_blank"> <?= $link ?> <img src="img/arrow-l.svg" alt="Flèche"> </a>
                    </div>
                </div>
                <div class="lieux__card">
                    <img src="img/lieux03.jpg" alt="Pont Saint-Bénézet">
                    <div class="lieux__text-wrapper">
                        <h4><?= $eng ? 'Saint-Bénézet Bridge' : 'Pont Saint-Bénézet' ?></h4>
                        <p class="light">
                            <?= $eng ? 'The famous Avignon bridge known thanks to the song. Listed as a UNESCO World Heritage Site, it was partly destroyed, and of the 22 original arches, only 4 remain.' 
                            : 
                            'Le fameux pont d’Avignon connu grâce à la chanson. Classé au Patrimoine Mondial de l’Unesco, il a été en partie détruit, et, sur les 22 arches initiales, il n’en reste 4.' ?>
                        </p>
                        <a href="https://www.google.com/maps/place/Pont+d'Avignon/@43.953856,4.8026894,17z/data=!3m1!4b1!4m5!3m4!1s0x12b5eb825fa84051:0x7b72f2b877bc1976!8m2!3d43.9538522!4d4.8048781" class="arrow" target="_blank"> <?= $link ?> <img src="img/arrow-l.svg" alt="Flèche"> </a>
                    </div>
                </div>
                <div class="lieux__card">
                    <img src="img/lieux08.jpg" alt="Notre-Dame-des Doms">
                    <div class="lieux__text-wrapper">
                        <h4>Notre-Dame-des Doms</h4>
                        <p class="light">
                            <?= $eng ? 'Historical monument dating from the 12th, 14th and 17th centuries, it is next to the Palais des Papes. You can contemplate the beautiful facade and its bell tower, surmounted by a golden virgin.' 
                            : 
                            'Monument Historique qui date des XII°, XIV° et XVII° siècle, elle est voisine du Palais des Papes. On peut contempler la belle façade et son clocher, surmonté d’une vierge dorée.' ?>
                        </p>
                        <a href="https://www.google.com/maps/place/Avignon+Cathedral/@43.9514439,4.8056519,17z/data=!3m1!4b1!4m5!3m4!1s0x12b5eb86d90a23f1:0xc3d249199481820d!8m2!3d43.9514401!4d4.8078406" class="arrow" target="_blank"> <?= $link ?> <img src="img/arrow-l.svg" alt="Flèche"> </a>
                    </div>
                </div>
                <div class="lieux__card">
                    <img src="img/lieux06.jpg" alt="Le Colorado Provençal">
                    <div class="lieux__text-wrapper">
                        <h4><?= $eng ? 'The Colorado Provençal' : 'Le Colorado Provençal' ?></h4>
                        <p class="light">
                            <?= $eng ? 'An outdoor activity to do in the Vaucluse. The landscapes and colors of the site will not leave you indifferent. This Historic Monument is an old ocher quarry.' 
                            : 
                            'Une activité plein air à faire dans le Vaucluse. Les paysages et couleurs du site ne vous laisseront pas indifférents. Ce Monument Historique est une ancienne carrière d’ocre. ' ?>
                        </p>
                        <a href="https://www.google.com/maps/place/The+Proven%C3%A7al+Colorado/@43.9199146,5.4969,17z/data=!3m1!4b1!4m5!3m4!1s0x12ca39371a3de879:0x2bdf9bc216db7e00!8m2!3d43.9199108!4d5.4990887" class="arrow" target="_blank"> <?= $link ?> <img src="img/arrow-l.svg" alt="Flèche"> </a>
                    </div>
                </div>
                <div class="lieux__card">
                    <img src="img/lieux04.jpg" alt="Les champs de lavande">
                    <div class="lieux__text-wrapper">
                        <h4><?= $eng ? 'Lavender fields' : 'Les champs de lavande' ?></h4>
                        <p class="light">
                            <?= $eng ? 'Lavender fields are emblematic of Provence. Usually from mid-June to early August (may vary depending on the weather) lavender is in bloom.' 
                            : 
                            'Les champs de lavande sont emblématiques de la Provence. En général de la mi-juin à début août (peut varier selon la météo) les lavandes sont en fleur.' ?> 
                        </p>
                        <a href="https://www.google.com/maps/place/84220+Gordes/@43.9075344,5.1339934,12z/data=!3m1!4b1!4m5!3m4!1s0x12ca0dc30dc4b6cd:0x6cf8370fce926027!8m2!3d43.911315!4d5.200176" class="arrow" target="_blank"> <?= $link ?> <img src="img/arrow-l.svg" alt="Flèche"> </a>
                    </div>
                </div>
                <div class="lieux__card">
                    <img src="img/lieux09.jpg" alt="L’abbaye de Sénanque">
                    <div class="lieux__text-wrapper">
                        <h4><?= $eng ? 'Sénanque Abbey' : 'L’abbaye de Sénanque' ?></h4>
                        <p class="light">
                            <?= $eng ? 'Sénanque Abbey, founded in 1148, is located in the town of Gordes. It is still occupied by monks who cultivate lavandin and olive trees on their land.' 
                            : 
                            'L’abbaye de Sénanque, fondée en 1148, se trouve sur la commune de Gordes. Elle est toujours occupée par des moines qui cultivent sur leurs terres du lavandin et des oliviers.' ?> 
                        </p>
                        <a href="https://www.google.com/maps/place/Abbaye+Notre-Dame+de+S%C3%A9nanque/@43.9285565,5.1845451,17z/data=!4m9!1m2!2m1!1zTOKAmWFiYmF5ZSBkZSBTw6luYW5xdWU!3m5!1s0x12ca0db2e33c18bb:0x47ca1205ef3ceca0!8m2!3d43.9281097!4d5.1871889!15sChdM4oCZYWJiYXllIGRlIFPDqW5hbnF1ZVoXIhVsIGFiYmF5ZSBkZSBzw6luYW5xdWWSAQVhYmJleZoBI0NoWkRTVWhOTUc5blMwVkpRMEZuU1VSM2FYSlBSVVZCRUFF" class="arrow" target="_blank"> <?= $link ?> <img src="img/arrow-l.svg" alt="Flèche"> </a>
                    </div>
                </div>
                <div class="lieux__card">
                    <img src="img/lieux07.jpg" alt="Dentelles de Montmirail">
                    <div class="lieux__text-wrapper">
                        <h4>Dentelles de Montmirail</h4>
                        <p class="light">
                            <?= $eng ? 'Outdoor enthusiasts can embark on an adventure in the Dentelles de Montmirail massif, which offers a magnificent panorama, as well as beautiful steep walls.' 
                            : 
                            'Les amateurs de outdoor pourront se lancer à l’aventure dans le massif des Dentelles de Montmirail qui offrent un magnifique panorama, ainsi que de belles parois abruptes. ' ?>
                        </p>
                        <a href="https://www.google.com/maps/place/Dentelles+de+Montmirail/@44.1794585,5.0518012,15z/data=!3m1!4b1!4m5!3m4!1s0x12ca788211d1c053:0xf619d90e46ddec91!8m2!3d44.179444!4d5.060556" class="arrow" target="_blank"> <?= $link ?> <img src="img/arrow-l.svg" alt="Flèche"> </a>
                    </div>
                </div>
                <div class="lieux__card">
                    <img src="img/lieux05.jpg" alt="Vignobles du Vaucluse">
                    <div class="lieux__text-wrapper">
                        <h4><?= $eng ? 'Vaucluse Wineries' : 'Vignobles du Vaucluse' ?></h4>
                        <p class="light">
                            <?= $eng ? 'Viticulture is very important in the Vaucluse, being one of the main agricultural activities. It is possible to make a route with the areas open to visitors.' : 'La viticulture est très importante dans le Vaucluse, étant une des principales activités agricoles. Il est possible de faire un parcours avec les domaines ouverts à la visite.' ?> 
                        </p>
                        <a href="https://www.google.com/maps/search/Vignobles+du+Vaucluse/@44.1795298,5.0255365,13z/data=!3m1!4b1" class="arrow" target="_blank"> <?= $link ?> <img src="img/arrow-l.svg" alt="Flèche"> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
require_once "templates/footer.php";
