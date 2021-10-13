<?php
$title = "Qui suis-je ?";
require_once './assets/header.php';
?>
<link rel="stylesheet" href="./styles/bio.css">
<?php
    $email = $_POST['email'];
    $message = $_POST['message'];
    $name = $_POST['first'];
    $contact = $_POST['contact'];
?>
<div class="bio">
  <section class="artist">
    <article>
      <figure class="img_artist">
        <img src="pictures/rapon.jpg" alt="Artiste">
      </figure>
      <h2 class="artist_title">Marcel François Rapon</h2>
      <p class="artist_title--bio">Marcel-François Rapon est né à Saint-Joseph, en Martinique, le 29 janvier 1956. <br>
        Après des études supérieures à Montpellier, il retourne s’installer à Trinité, en 1982, en tant que chirurgien dentiste, où il exerce depuis. <br>
        En 1992, il prend une année sabbatique afin d’obtenir un diplôme d’Ingénieur, en Organisation au C.N.A.M. à Paris (I.E.S.T.O.).
        Cette démarche avait comme ambition d’apporter une aide, plus efficace possible, aux acteurs Martiniquais.
        Il milite également, pour l’instauration d’une journée universelle du RESPECT.
      </p>
    </article>
  </section>
  <section class="asso">
    <article>
    <figure class="img_asso">
        <img src="pictures/karisko.png" alt="asso">
      </figure>
      <p class="who_asso--bio">
      <h3>Premier Point : Manifestations</h3>
KARISKO explore l’histoire des amérindiens à nos jours et nous initient  quand a ses trésors grâce à des manifestations socioculturelles et sportives, des actes symboliques, une familiarisation avec des mots de vocabulaire amérindien. <br>

<h3>Deuxieme Point : Projet Scientifique</h3>
KARISKO mobilise des experts et scientifiques afin de nous approprier le quotidien de nos ancêtres. Anthropologues, Archéologues, Historiens, Géologues, Gastronomes, Artistes, Médecins, Juristes, Ingénieurs, Sportifs…<br>

<h3>Troisieme Point : La Kanawa</h3>
Générée dans le cadre du projet citoyen KARISKO. l’opération Youmoulikou, frères d’une autre île, mais de la même Nation a permis à 27 équipiers de la kanawa AKAYOUMAN de rallier la Dominique en 6h47mn le 8 mai 2008. Organiser en étroite collaboration avec les Fédération des Organisations des Peuples Autochtones de Guyane, l’Association Téléuyu de Kourou et les Kalinago du territoire Caraïbe de la Dominique. Cette opération à pour suite logique en 2009-2010 le projet KYTANGOMINGO EMA développer en deux phases.<br>
La première s’intéressera à la traversée d’île en île de la partie Nord de l’Archipel des Petites Antilles de la Martinique à Porto-Rico tandis que la seconde concernera la traversée de la partie Sud de notre Archipel de la Martinique aux côtes du Vénézuela.<br>
Ces opérations Kanawa ont été un succès grâce à nos partenaires : UFR, l’Etat, le RSMA, Leader Price, Habitation Saint James, CMA-CGM, ODE ; les villes du Prêcheur, Schoelcher, Fort de France, Lamentin, Sainte Luce, Sainte Anne, Marin, Sainte Mari... <br></p>
      </article>
  </section>


<form method="POST" action="/bio.php#me_contacter">
<ul class="form">
<li id="me_contacter">Me contacter</li>
    <li>
    <label for="contact">Qui voulez vous contacter<span class="required">*</span></label>
    <select name="contact" id="contact_select" size="1">
        <option value="Marcel François Rapon">Marcel François Rapon</option>
        <option value="Karisko">Karisko</option>
    </select>
    </li>
    <li>
      <label for="first">Votre nom<span class="required">*</span></label>
      <input id="first" type="text" name="first" class="name" placeholder="Nom et prénom" required/>
    <li>
        <label for="email">Email <span class="required">*</span></label>
        <input id="email" type="email" name="email" class="email" placeholder="Adresse@email.com" required/>
    </li>
    <li>
        <label for="message">Votre message <span class="required">*</span></label>
        <textarea name="message" id="message" class="message" placeholder="Votre message" required></textarea>
    </li>
    <li>
        <input type="submit" value="Envoyer" id="envoyer"/>
    </li>
    <div class="confirm" id="confirm">
<?php 
      if (count($email) > 0) { 
      echo 'Merci ' . $name . ' votre message a été envoyé à ' . $contact . '. <br>'  . ' Nous vous recontacterons par email sur : ' . $email . '<br>' . ' Cordialement, toute l\'équipe de Karisko.' ;
      }else { 
            echo '<style type="text/css">
            #confirm {
            display: none;
            } </style>';
            }
?>
</ul>
</form>
</div>
<?php
require_once './assets/footer.php'; 
?>
