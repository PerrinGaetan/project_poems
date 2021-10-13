<?php
$title = "Laissez nous un commentaire";
require_once './assets/header.php';
require_once './assets/class/Query.php';
require_once './assets/class/StoreData.php';
require_once './assets/class/SelectPoem.php';
$pseudo = $_POST['pseudo'];
$comment = $_POST['commentaire'];
$title_poem = $_COOKIE['text'];
$date = new DateTime('now');
$dateFormated = $date->format('d-m-Y H:i:s');
$pdoSend = Query::pdo();
$takePoem = SelectPoem::comments();
$comments = $takePoem;
$prepareQuery = $pdoSend->prepare("INSERT INTO `comment`(`author_comment`, `comment`, `date`, `title_poem`) VALUES (:pseudo, :comment, :dateFormated, :title_poem);");

if ((!empty($pseudo)) && (!empty($comment))){
    $prepareQuery->bindParam(':pseudo', $pseudo);
    $prepareQuery->bindParam(':comment', $comment);
    $prepareQuery->bindParam(':dateFormated', $dateFormated);
    $prepareQuery->bindParam(':title_poem', $title_poem);
    $prepareQuery->execute();
    $takePoem = SelectPoem::comments();
    $comments = $takePoem;

}
?>
<link rel="stylesheet" href="./styles/poem.css">

<div class="black">
    <div class="MasterContener">
        <div class="containerPoème-margin">
            <h2 class="Titre"><?= $_COOKIE["theme"] ?></h2>
            <p id="poem"><?= $_COOKIE["text"]?></p>
        </div>
        <div class="containerCommentaire-margin">
            <h2 class="Titre">Commentaire</h2>
            <form method="post" action="">
                <label for="pseudo">Pseudo :</label>
                <input type="text" name="pseudo" value="" id="pseudo" />
                <div class="Button">
                    <label for="commentaire">Votre commentaire :</label>
                    <textarea name="commentaire" rows="5" cols="80" id="commentaire"></textarea>
                    <div id="buttons">
                        <input type="submit" class="envoyer" value="Envoyer"></input>
                        <button name="rate" id="likeIt" class="envoyer">J'aime</button>
                    </div>
                </div>
            </form>
        </div> 
        </div>
    </div>
    <div id="comments">
        <h3>Commentaires les plus récents</h3>
        <?php foreach ($comments as $comment) : ?>
            <div class="comment">
                <p><?= $comment["author_comment"];?></p>
                <p><?= $comment["comment"];?></p>
                <p><?= $comment["date"];?></p>
            </div>         
        <?php endforeach ?>
    </div>
</div>

<?php
require_once './assets/footer.php';
?>  