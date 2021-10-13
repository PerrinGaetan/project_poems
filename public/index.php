<?php
$title = "Bienvenue sur notre recueil de poèmes";
require_once './assets/header.php';

?>
<link rel="stylesheet" href="./styles/index.css">

<section>
    <ul class="section__ul__cardContainer">
        <li class="section__li">
            <div class="section__li--card">
                <img class="section__img" src="/pictures/love.jpg" alt="love"/>
                <p>L'amour</p>
            </div>
        </li>
        <li class="section__li">
            <div class="section__li--card">
                <img class="section__img" src="/pictures/freedom.jpg" alt="freedom"/>
                <p>La liberté</p>
            </div>
        </li>
        <li class="section__li">
            <div class="section__li--card">
                <img class="section__img" src="/pictures/peace.jpg" alt="peace"/>
                <p>La paix</p>
            </div>
        </li>
        <li class="section__li">
            <div class="section__li--card">
                <img class="section__img" src="/pictures/friendship.jpg" alt="friendship"/>
                <p>L'amitié</p>  
            </div>
        </li>
        <li class="section__li">
            <div class="section__li--card">
                <img class="section__img" src="/pictures/dream.jpg" alt="dream"/>
                <p>Le rêve</p>
            </div>
        </li>
        <li class="section__li">
            <div class="section__li--card">
                <img class="section__img" src="/pictures/happiness.jpg" alt="happiness"/>
                <p>Le bonheur</p>
            </div>
        </li>
    </ul>
</section>
<hr>
<?php
require_once './assets/footer.php';
?>