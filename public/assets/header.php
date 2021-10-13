<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <script src="../functions/evaluatePoem.js" defer></script>

    <title><?= $title ?></title>
</head>
<body>
    <header class="header">
        <h1 class="header__h1 logo">
            <a class="header__h1__a" href="index.php">
                <img class="header__h1__a__img logoSVG" src="../pictures/logo.svg" alt="logo du site" >
            </a>
        </h1>
        <nav class="header__nav navBar">
            <ul class="navBar__ul">
                <li class="navBar__ul__li"><a class="navBar__ul__li__a" href="bio.php">A propos</a></li>
                <li class="navBar__ul__li"><a class="navBar__ul__li__a" href="bio.php#me_contacter">Nous contacter</a></li>
            </ul>
            <div id="box">
                <div class="header__nav--burgerMenu">
                    <div class="header__nav--burgerMenu__div"></div>
                    <div class="header__nav--burgerMenu__div"></div>
                    <div class="header__nav--burgerMenu__div"></div>
                </div>
            </div>
        </nav>
    </header>
    <hr>

