<?php  ?>
<header id="header">
    <div class="container">
        <div class="menu d-flex">
            <figure>
                <a href="<?= $eng ? 'index.php?eng' : 'index.php' ?>">
                    <img src="img/logo.svg" alt="Logo">
                </a>
            </figure>
            <nav class="nav">
                <ul class="d-flex" id="navigation">
                    <li>
                        <a href="<?= $eng ? 'index.php?eng' : 'index.php' ?>" class="<?= ($pageName == 'index.php') ? 'forced' : '' ?>">
                            <?= $eng ? 'Home' : 'Accueil' ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $eng ? 'lieux.php?eng' : 'lieux.php' ?>" class="<?= ($pageName == 'lieux.php') ? 'forced' : '' ?>">
                            <?= $eng ? 'Places to see' : 'Lieux' ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $eng ? 'marches.php?eng' : 'marches.php' ?>" class="<?= ($pageName == 'marches.php') ? 'forced' : '' ?>">
                            <?= $eng ? 'Local markets' : 'Marchés & foires' ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $eng ? 'actualites.php?eng' : 'actualites.php' ?>" class="<?= ($pageName == 'actualites.php') ? 'forced' : '' ?>">
                            <?= $eng ? 'News' : 'Actualités' ?>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="lang d-flex" id="lang">
                <a href="<?= $pageName ?>" class="<?= $eng ? '' : 'active' ?>">FR</a>
                <span>/</span>
                <a href="<?= $pageName ?>?eng" class="<?= $eng ? 'active' : '' ?>">EN</a>
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