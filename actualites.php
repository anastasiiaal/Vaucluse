<?php
require_once "templates/head.php";
?>
<div class="actu__cover">
    <div id="overlay"></div>
    <?php
    require_once "templates/header.php";
    require_once "templates/slogan.php";

    if($eng) {
        $read = "Read more";
        $hide = "Hide more";
    } else {
        $read = "Lire la suite";
        $hide = "Cacher la suite";
    }
    ?>

<main>
    <!-- 
        HELLO THERE to the stranger who accidentally - or intentionally! - came across this code. 
        Yes, I do realise that the way I'm doing my code on this page is just horrific. Yes, I do know it would have been like a thousand times better if I simply used some basic DB connection and made it loop. But this website being just a dummy study project, I was too lazy to make a DB, sorry about that. So enjoy my worst code practices here, mwahaha

        p.s. I've already done my best to make this code livable. Maybe i'll come back one day to work on it further... We'll see.. (unlikely thing)
    -->
    <section class="actualites">
        <div class="container">
            <h2><?= $eng ? 'News of Vaucluse' : 'Actualités de vaucluse' ?></h2>
            <div class="actualites__wrapper d-flex">
                <div class="actualites__card">
                    <img src="img/actu01.jpg" alt="<?= $eng ? "Beaumes-de-Venise: the competition for the ugliest Christmas sweater!" : "Beaumes-de-Venise : le concours du pull de Noël le plus moche !" ?>">
                    <div class="actualites__text">
                        <h4><?= $eng ? "Beaumes-de-Venise: the competition for the ugliest Christmas sweater!" : "Beaumes-de-Venise : le concours du pull de Noël le plus moche !" ?></h4>
                        <p class="light"><?= $eng ? "In Beaumes - de - Venise, like everywhere else, we are preparing for the end of the year celebrations. And if we believe the association of traders, artisans and estates, particularly active in this period, it will \"hit\". Recently, the president, Cathy Rabasse, gathered her troops to prepare the decorations, pretty gift packages, which will adorn the village during the holidays. For the occasion, they received the help of the twinning committee. Never short of ideas to animate her village, Cathy Rabasse, presents the novelty of the year," : "À Beaumes - de - Venise comme partout ailleurs on prépare les fêtes de fin d'année. Et si on en croit l'association des commerçants, artisans et domaines, particulièrement active en cette période, ça va \"cartonner\". Dernièrement, la présidente, Cathy Rabasse, a réuni ses troupes pour préparer les décorations, de jolis paquets cadeaux, qui vont orner le village durant les fêtes.Pour l'occasion, ils ont reçu l'aide du comité de jumelage. Jamais à court d'idée pour animer son village, Cathy Rabasse, présente la nouveauté de l'année," ?><span class="dots"> ...</span> <span class="light p-hidden hidden"><?= $eng ? "the organization of a competition for the ugliest Christmas sweater. The latter explains: \"This competition is aimed at traders, artisans and estates.\"" : "l'organisation d'un concours du pull de Noël le plus moche.Cette dernière explique: \"Ce concours s'adresse aux commerçants, artisans et domaines.\"" ?>  </span>  </p>
                        <a href="#" class="arrow readmore"><?= $read ?></a>
                    </div>
                </div>
                <div class="actualites__card">
                    <img src="img/actu02.jpg" alt="<?= $eng ? "L'Isle-sur-la-Sorgue - Inordinate water bill" : "L'Isle-sur-la-Sorgue - Facture d'eau démesurée" ?>">
                    <div class="actualites__text">
                        <h4><?= $eng ? "L'Isle-sur-la-Sorgue - Inordinate water bill" : "L'Isle-sur-la-Sorgue - Facture d'eau démesurée" ?></h4>
                        <p class="light"><?= $eng ? "1991 euros. This is the amount of the bill received by Paul Gribbell, a resident of L'Isle-sur-la-Sorgue, for an annual consumption of non-potable water estimated - by the meter - at 10,600 m3. riverside of the canal, managed by the Asco (union association automatically constituted of the Isle canal), over this period only irrigates about 600 m2 of its land with water from the canal. The amount calls out to Paul Gribbell who made this second home, acquired in 2009, his main home in 2017." : "1991 euros. C'est le montant de la facture reçue par Paul Gribbell, un habitant de L'Isle-sur-la Sorgue, pour une consommation annuelle d'eau non potable estimée --par le compteur-- à 10 600 m3.Sauf que ce riverain du canal, géré par l'Asco (Association syndicale constituée d'office du canal de l'Isle), n'arrose sur cette période-là, qu'environ 600 m2 de ses terrains avec l'eau du canal. Le montant interpelle Paul Gribbell qui a fait de cette résidence secondaire acquise en 2009, sa résidence principale en 2017." ?><span class="dots"> ...</span><span class="light p-hidden hidden"><?= $eng ? "\"Since we have been there full time, I use around 600m3 of water per year and until then I paid around 350 € per year, specifies the owner of the farmhouse located in the middle of the Icelandic countryside. feel free to pay, I could.\"" : "\"Depuis que nous sommes là à plein temps, j'utilise environ 600m3 d'eau par an et je payais jusque-là environ 350€ à l'année, précise le propriétaire du mas situé en pleine campagne l'isloise. Cela ne me gêne pas de payer, je pourrais le faire.\"" ?> </span></p>
                        <a href="#" class="arrow readmore"><?= $read ?></a>
                    </div>
                </div>
                <div class="actualites__card">
                    <img src="img/actu03.jpg" alt="<?= $eng ? "'Winter' firsts for Courthezon" : "Premières \"Hivernales\" pour Courthezon" ?>">
                    <div class="actualites__text">
                        <h4><?= $eng ? "'Winter' firsts for Courthezon" : "Premières \"Hivernales\" pour Courthezon" ?></h4>
                        <p class="light"><?= $eng ? "Christmas being a true Provençal tradition, it is in this state of mind that the Municipality wishes to make these end-of-year celebrations from December 3 to 12 a key moment.Last year the health crisis did not allow to organize such an event. The Mayor, Nicolas Paget, his deputy Corinne Martin, delegate for the festivities, elected officials, employees and technical services, have been preparing for weeks an exceptional event: Les Hivernales. For the opening of these Christmas festivities the Merchants Association," : "Noël étant une véritable tradition provençale, c'est dans cet état d'esprit que la Municipalité souhaite faire de ces fêtes de fin d'année du 3 au 12 décembre un moment phare.L'an dernier la crise sanitaire n'a pas permis d'organiser un tel événement. Le Maire, Nicolas Paget, son adjointe Corinne Martin, déléguée aux festivités, les élus, employés et les services techniques, préparent depuis des semaines un événement exceptionnel: Les Hivernales. Pour l'ouverture de ces festivités de Noël l'Association des Commerçants," ?><span class="dots"> ...</span><span class="light p-hidden hidden"><?= $eng ? "Craftsmen, Independents and Winegrowers offers to meet from Friday December 3 at 6 p.m. Place Daladier around Santa Claus and his choir with a distribution of wheat, papillotes, clementines and other surprises." : "Artisans, Indépendants et Vignerons propose de se retrouver dès le vendredi 3 décembre à 18h place Daladier autour du père Noël et de sa chorale avec une distribution de blé, papillotes, clémentines et autres surprises." ?>  </span></p>
                        <a href="#" class="arrow readmore"><?= $read ?></a>
                    </div>
                </div>
                <div class="actualites__card">
                    <img src="img/actu04.jpg" alt="<?= $eng ? "Avignon: at Mistral high school, the artisan designers of tomorrow" : "Avignon : au lycée Mistral, les artisans designers de demain" ?>">
                    <div class="actualites__text">
                        <h4><?= $eng ? "Avignon: at Mistral high school, the artisan designers of tomorrow" : "Avignon : au lycée Mistral, les artisans designers de demain" ?></h4>
                        <p class="light"><?= $eng ? "There is a big project to restructure their spaces in the pipeline. And it won't be luxury. Teachers and students of the Sciences and Technologies of Design and Applied Arts (STD2A) section of the Mistral high school are impatiently awaiting this renewal. If only to more conveniently install the computer stations (2 hours of lessons from the 1st) and work their study subjects with free rein ... Nothing more legitimate for an option, created 23 years ago , which has proven itself, a flagship section in the Paca region," : "Il y a dans les tuyaux un gros projet de restructuration de leurs espaces. Et ce ne sera pas du luxe. Enseignants et élèves de la section Sciences et technologies du design et des arts appliqués (STD2A) du lycée Mistral attendent ce renouveau avec impatience. Ne serait-ce que pour installer plus commodément les postes d'informatique (2 heures de cours dès la 1re) et travailler leurs sujets d'études les coudées franches...Rien de plus légitime pour une option, créée il y a 23 ans, qui a fait ses preuves, une section phare en région Paca," ?><span class="dots"> ...</span><span class="light p-hidden hidden"><?= $eng ? "with for ten years a general average of 14-15 / 20 and 100% success in the Bac. And a strong footprint: relevant and innovative projects, in collaboration with craftsmen. Above all, upstream work is decisive." : "avec depuis dix ans une moyenne générale de 14-15/20 et 100 % de réussite au Bac. Et une empreinte forte : des projets pertinents et innovants, en collaboration avec des artisans.Avant tout, le travail en amont est déterminant." ?>  </span></p>
                        <a href="#" class="arrow readmore"><?= $read ?></a>
                    </div>
                </div>
                <div class="actualites__card">
                    <img src="img/actu05.jpg" alt="<?= $eng ? "The Crafts are on display at the Sainte-Praxède Chapel" : "Les Métiers d’Art s’exposent à la Chapelle Sainte-Praxède" ?>">
                    <div class="actualites__text">
                        <h4><?= $eng ? "The Crafts are on display at the Sainte-Praxède Chapel" : "Les Métiers d’Art s’exposent à la Chapelle Sainte-Praxède" ?></h4>
                        <p class="light"><?= $eng ? "CMAR PACA is organizing the \"Reg'Art\" exhibition from December 4 to 12, which will bring together the works and creations of 29 artisans from the region. <br> In Provence-Alpes-Côte-d’Azur, there are precisely 2,024 artisans who are qualified in Crafts. Ceramists, glassmakers, tanners and even designers ... all have unique skills that deserve to be honored. It is for this purpose that the Chamber of Trades and Crafts of the Provence-Alpes-Côte-d´Azur region" : "La CMAR PACA organise du 4 au 12 décembre l’exposition « Reg’Art », où seront réunies les œuvres et créations de 29 artisans de la région. <br> En Provence-Alpes-Côte-d’Azur, ils sont précisément 2 024 artisans à être qualifiés en Métiers d’Art. Céramistes, verriers, tanneurs ou encore designers... Tous détiennent des savoir-faire uniques qui méritent d’être mis à l’honneur. C’est dans cet objectif que la Chambre de Métiers et de l’Artisanat de région Provence-Alpes-Côte-d’Azur" ?><span class="dots"> ...</span><span class="light p-hidden hidden"><?= $eng ? "(CMAR PACA) offers the 11th edition of \"Reg’Art\", on the theme \"Curves and Lights\". This exhibition, open to the public, will unveil the achievements, restorations and creations of artisans from the region, specially made for the event." : "(CMAR PACA) propose la 11ème édition de « Reg’Art », sur la thématique « Courbes et Lumières ». Cette exposition, ouverte au public, dévoilera les réalisations, restaurations et créations des artisans de la région, spécialement réalisées pour l’événement." ?> </span></p>
                        <a href="#" class="arrow readmore"><?= $read ?></a>
                    </div>
                </div>
                <div class="actualites__card">
                    <img src="img/actu06.jpg" alt="<?= $eng ? "The Christmas crib comes alive under the fingers of Orietta Chanal" : "La crèche de Noël s'anime sous les doigts d'Orietta Chanal" ?>">
                    <div class="actualites__text">
                        <h4><?= $eng ? "The Christmas crib comes alive under the fingers of Orietta Chanal" : "La crèche de Noël s'anime sous les doigts d'Orietta Chanal" ?></h4>
                        <p class="light"><?= $eng ? "In the old youth room located on Place Gilbert Espenon, a 12-meter-long crèche, animated by 500 figurines, arranged with dry stones, branches and mosses collected between Venasque and Beaucet, delights the eyes of young and old. since yesterday. Orietta Chanal, designer of the crib, and her friends, have devoted themselves to putting together this immense scene of Provençal life. The Christmas crib comes alive under the fingers of Orietta Chanal in Saint-Didier Photos BG \"Each year the crib is different." : "Dans l'ancien local des jeunes situé place Gilbert Espenon, une crèche de 12 mètres de long, animée par 500 santons, agencée de pierres sèches, de branches et de mousses recueillies entre Venasque et le Beaucet, ravit le regard des petits et des grands depuis hier. Orietta Chanal, conceptrice de la crèche, et ses amies, se sont dévouées pour assembler cette immense scène de la vie provençale.La crèche de Noël s'anime sous les doigts d'Orietta Chanal à Saint-Didier Photos B.G. \"Chaque année la crèche est différente." ?><span class="dots"> ...</span><span class="light p-hidden hidden"><?= $eng ? "For the 2021 edition, the Dentelles de Montmirail will make their debut. The village castle, which comes to life in our hearts, will also find its place in my nursery. I make almost all of my santons. They are 7 cm tall and are all dressed." : "Pour l'édition 2021, les Dentelles de Montmirail vont faire leur entrée. Le château du village, qui revit dans nos coeurs va retrouver sa place également dans ma crèche. Je réalise presque tous mes santons. Ils mesurent 7 cm et sont tous habillés." ?>  </span></p>
                        <a href="#" class="arrow readmore"><?= $read ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<p id="read" class="hidden"><?= $read ?></p>
<p id="hide" class="hidden"><?= $hide ?></p>

<?php
require_once "templates/footer.php";