<?php
// Permet de récupérer le code du fichier header.php et je le place là, ici au début de ma page
// include "template/header.php";

// Presque comme le include sauf que si le fichier n'existe pas, il lance une FATAL ERROR et arrete tout
// require "template/header.php";

// Identique au include, sauf qu'il va inclure le fichier ssi il n'a jamais été inclus quelque part ailleurs avant dans toute ma page
// include_once "template/header.php";

// C'est un peu comme un combot du require et du include_once
require_once "template/header.php";
?>

<section>
    <h2 class="page__title">Bienvenue au Cinéma Rodia</h2>
</section>

<?php
require_once "template/footer.php";
?>