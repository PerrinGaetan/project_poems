<?php
$title = "Liste de poèmes";
require_once './assets/header.php';
require_once './assets/class/SelectPoem.php';
?>
<link rel="stylesheet" href="./styles/poems.css">

<?php
$recuperePoem = SelectPoem::poems();
?>

<div id="caroussel">
<form action="" method="post">
    <input type="radio" name="fancy" autofocus value="amour" id="amour" />
    <input type="radio" name="fancy" value="liberté" id="liberté" />
    <input type="radio" name="fancy" value="montagne" id="montagne" />
    <input type="radio" name="fancy" value="mer" id="mer" />
    <input type="radio" name="fancy" value="ocean" id="ocean" />			
    <label for="amour" ><?= $recuperePoem[0]['theme'] ?><p class="poems"><?= $recuperePoem[rand(0, 5)]['contenu']?></p></label>
    <label for="liberté"><?= $recuperePoem[0]['theme'] ?><p class="poems"><?= $recuperePoem[rand(0, 5)]['contenu']?></p></label>
    <label for="montagne"><?= $recuperePoem[0]['theme'] ?><p class="poems"><?= $recuperePoem[rand(0, 5)]['contenu']?></p></label>
    <label for="mer"><?= $recuperePoem[0]['theme'] ?><p class="poems"><?= $recuperePoem[rand(0, 5)]['contenu']?></p></label>
    <label for="ocean"><?= $recuperePoem[0]['theme'] ?><p class="poems"><?= $recuperePoem[rand(0, 5)]['contenu']?></label>
</form>
</div>

<script src="./functions/getPoem.js"></script>

<?php
require_once './assets/footer.php';
?>