<?php ?>

<footer id="footer">
    <div class="container">
        <div class="footer__wrapper d-flex">
            <figure>
                <a href="<?= $eng ? 'index.php?eng' : 'index.php' ?>">
                    <img src="img/logo.svg" alt="Logo">
                </a>
            </figure>
            <nav class="nav">
                <ul class="d-flex">
                    <li>
                        <a href="<?= $eng ? 'index.php?eng' : 'index.php' ?>" class="forced">
                            <?= $eng ? 'Home' : 'Accueil' ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $eng ? 'lieux.php?eng' : 'lieux.php' ?>">
                            <?= $eng ? 'Places to see' : 'Lieux' ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $eng ? 'marches.php?eng' : 'marches.php' ?>">
                            <?= $eng ? 'Local markets' : 'Marchés & foires' ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $eng ? 'actualites.php?eng' : 'actualites.php' ?>">
                            <?= $eng ? 'News' : 'Actualités' ?>
                        </a>
                    </li>
                </ul>
            </nav>
            <a href="<?= $eng ? $pageName : $pageName . '?eng' ?>"><?= $eng ? 'Version française' : 'English version' ?></a>
        </div>
    </div>
</footer>
<script src="main.js"></script>
</body>

</html>