<?php

// Version has been :
// $films = array("Matrix", "Batman", "Le Hobbit", "Jurrasic World", "Casino Royal");

// Version moderne mais monoligne : bien tant que c'est pas trop long -> lisibilité
// $films = ["Matrix", "Batman", "Le Hobbit", "Jurrasic World", "Casino Royal"];

// Version moderne en multi-ligne : bien pour la lisibilité des "longs" tableaux
$films = [
    "Matrix",
    "Batman",
    "Le Hobbit",
    "Jurrasic World",
    "Casino Royal",
    "Thor Ragnarok",
    "Oceans 12",
    "Man Of Steel",
    "Avatar",
    "Le bon, la brute et le truand",
    "Le retour du Jedi",
];

$rooms = [
  'Athéna',
  'Dyonisos',
  'Hadès',
  'Zeus',
];

require_once "template/header.php";
?>

<section>
<h2 class="page__title">Actuellement au cinéma</h2>

    <!-- On va mettre un <h3> par film -->

    <?php
    /*
    // Option 1 : pas ouf
    for ($index = 0; $index < 5; $index++) {
        ?>
        <h3><?= $films[$index] ?></h3>
        <?php
    }
    */
    ?>

    <?php
    /*
    // Option 2 : plutôt correct, passable
    // Si vous utilisez un count dans le nombre de fin d'un for, vous DEVREZ le
    // mettre plutot dans une variable une bonne fois pour toute avant le for.
    $nombreDeFilms = count($films);
    for ($index = 0; $index < $nombreDeFilms; $index++) {
        ?>
        <h3><?= $films[$index] ?></h3>
        <?php
    }
    */
    ?>

    <?php
    // Option 3 : la solution ultime POUR LES TABLEAUX
    // Pour chaque élément de $films, on récupère la valeur et on la met dans la variable $film (singulier)
    foreach ($films as $film) {
        ?>
        <h3><?= $film ?></h3>
        <?php
    }
    ?>
</section>

<section>

    <h2 class="page__title">Salles</h2>
    <ul>
        <?php

        foreach ($rooms as $room) {
            ?>
            <li><?= $room ?> </li>
            <?php
        }
        ?>
    </ul>
</section>

<?php
require_once "template/footer.php";
?>