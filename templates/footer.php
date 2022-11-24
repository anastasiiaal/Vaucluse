<?php ?>

<footer id="footer">
    <div class="container">
        <div class="footer__wrapper d-flex">
            <figure>
                <a href="<?= ($eng === 1) ? 'index.php?eng' : 'index.php' ?>">
                    <img src="img/logo.svg" alt="Logo">
                </a>
            </figure>
            <nav class="nav">
                <ul class="d-flex">
                    <li>
                        <a href="<?= ($eng === 1) ? 'index.php?eng' : 'index.php' ?>" class="forced">
                            <?= ($eng === 1) ? 'Home' : 'Accueil' ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?= ($eng === 1) ? 'lieux.php?eng' : 'lieux.php' ?>">
                            <?= ($eng === 1) ? 'Places to see' : 'Lieux' ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?= ($eng === 1) ? 'marches.php?eng' : 'marches.php' ?>">
                            <?= ($eng === 1) ? 'Local markets' : 'Marchés & foires' ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?= ($eng === 1) ? 'actualites.php?eng' : 'actualites.php' ?>">
                            <?= ($eng === 1) ? 'News' : 'Actualités' ?>
                        </a>
                    </li>
                </ul>
            </nav>
            <a href="<?= ($eng === 1) ? 'index.php' : 'index.php?eng' ?>"><?= ($eng === 1) ? 'Version française' : 'English version' ?></a>
        </div>
    </div>
</footer>
<script src="main.js"></script>
</body>

</html>