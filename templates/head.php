<?php 
if(isset($_GET['eng'])) {
    $eng = 1;
} else {
    $eng = 0;
}

$linkArray = strval($_SERVER['PHP_SELF']);
$linkArrayExplode = explode('/', $linkArray);
$pageName = end($linkArrayExplode);

if ($pageName == "index.php") {
    if ($eng === 1) {
        $pageTitle = "VAUCLUSE : we all need colors";
    } else {
        $pageTitle = "VAUCLUSE : on a tous besoin de couleurs";
    }
} else if ($pageName == "lieux.php") {
    if ($eng === 1) {
        $pageTitle = "Landmarks of VAUCLUSE";
    } else {
        $pageTitle = "Lieux de VAUCLUSE";
    }
} else if ($pageName == "marches.php") {
    if ($eng === 1) {
        $pageTitle = "Markets of VAUCLUSE";
    } else {
        $pageTitle = "Marchés de VAUCLUSE";
    }
} else if ($pageName == "actualites.php") {
    if ($eng === 1) {
        $pageTitle = "News of VAUCLUSE";
    } else {
        $pageTitle = "Actualités de VAUCLUSE";
    }
} else {
    $pageTitle = "VAUCLUSE";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="main.css">
    <title><?= $pageTitle ?></title>
</head>
<body>