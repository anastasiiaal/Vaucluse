<?php  ?>
<header id="header">
    <div class="container">
        <div class="menu d-flex">
            <figure>
                <a href="<?= ($eng === 1) ? 'index.php?eng' : 'index.php' ?>">
                    <img src="img/logo.svg" alt="Logo">
                </a>
            </figure>
            <nav class="nav">
                <ul class="d-flex" id="navigation">
                    <li>
                        <a href="<?= ($eng === 1) ? 'index.php?eng' : 'index.php' ?>" class="<?= ($pageName == 'index.php') ? 'forced' : '' ?>">
                            <?= ($eng === 1) ? 'Home' : 'Accueil' ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?= ($eng === 1) ? 'lieux.php?eng' : 'lieux.php' ?>" class="<?= ($pageName == 'lieux.php') ? 'forced' : '' ?>">
                            <?= ($eng === 1) ? 'Places to see' : 'Lieux' ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?= ($eng === 1) ? 'marches.php?eng' : 'marches.php' ?>" class="<?= ($pageName == 'marches.php') ? 'forced' : '' ?>">
                            <?= ($eng === 1) ? 'Local markets' : 'Marchés & foires' ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?= ($eng === 1) ? 'actualites.php?eng' : 'actualites.php' ?>" class="<?= ($pageName == 'actualites.php') ? 'forced' : '' ?>">
                            <?= ($eng === 1) ? 'News' : 'Actualités' ?>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="lang d-flex" id="lang">
                <a href="<?= $pageName ?>" class="<?= ($eng === 1) ? '' : 'active' ?>">FR</a>
                <span>/</span>
                <a href="<?= $pageName ?>?eng" class="<?= ($eng === 1) ? 'active' : '' ?>">EN</a>
            </div>
            <div class="burger hidden" id="burger">
                <div class="burger__layer"></div>
                <div class="burger__layer"></div>
                <div class="burger__layer"></div>
            </div>
            <img src="img/cross.svg" alt="Fermer" class="cross hidden" id="cross">
        </div>
    </div>
</header>