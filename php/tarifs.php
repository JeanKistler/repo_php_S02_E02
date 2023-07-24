<?php

// Au début de mon fichier, je vais mettre toutes les données utiles et faire tous les calculs utiles pour l'affichage qui se trouve plus bas.

// On définit l'age du capitaine
$age = 43;

// On définit des variables qui contiennent les différents tarifs
$tarifPlein = 8.3;
$tarifReduit = 6.8;
$tarifEnfant = 4.5;

// On calcule le montant qu'il doit payer
if ($age < 14) {
    $montant = $tarifEnfant;
}
// On teste ensuite les ages pour le tarif réduit.
// Ici, pas besoin de préciser que l'age doit etre supérieur à 14.
// Si l'age est inférieur à 14, le premier if s'est déjà déclenché. PHP ne passera donc pas dans le elseif.
elseif ($age > 60 || $age < 16) {
    $montant = $tarifReduit;
}
// Dans tous les autres cas, on a le tarif plein
else {
    $montant = $tarifPlein;
}

require_once "template/header.php";
?>

<section>
    <h2 class="page__title">Tarifs</h2>
    <div class="prices__lists">

        <div class="prices__list">
            <h3 class="prices__list-title">
                A l'unité
            </h3>
            <ul>
                <li class="prices__item">
                    <span class="prices__item-desc">Tarif Plein</span> <span class="prices__item-value">8,30 &euro;</span>
                </li>
                <li class="prices__item">
                    <span class="prices__item-desc">Tarif Réduit</span> <span class="prices__item-value">6,80 &euro;</span>
                </li>
                <li class="prices__item">
                    <span class="prices__item-desc">Tarif Enfant</span> <span class="prices__item-value">4,50 &euro;</span>
                </li>
                <li class="prices__item">
                    <span class="prices__item-desc">Supplément 3D</span> <span class="prices__item-value">1,00 &euro;</span>
                </li>
            </ul>
        </div>

        <div class="prices__list">
            <h3 class="prices__list-title">
                Abonnement
            </h3>
            <ul>
                <li class="prices__item">
                    <span class="prices__item-desc">5 places</span> <span class="prices__item-value">-10%</span>
                </li>
                <li class="prices__item">
                    <span class="prices__item-desc">5 places -25ans </span> <span class="prices__item-value">-20%</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="prices__description">
        <p class="prices__description-line">
            <strong class="prices__description-name">Tarif réduit</strong> pour les personnes de + de 60 ans et de moins de 16 ans
        </p>
        <p class="prices__description-line">
            <strong class="prices__description-name">Tarif enfant</strong> pour les - de 14 ans
        </p>
    </div>
</section>

<section>
    <h2 class="page__title">Tarif du capitaine</h2>

    <div class="prices__list">
        <h3 class="prices__list-title">
            <span class="prices__item-desc">Age</span>
            <span class="prices__item-value">Tarif unitaire</span>
        </h3>
        <ul>
            <li class="prices__item">
                <span class="prices__item-desc"><?php echo $age; ?> ans</span>
                <span class="prices__item-value"><?= number_format($montant, 2, ',', ' '); ?> &euro;</span>
            </li>
        </ul>
    </div>

</section>

<section>
    <h2 class="page__title">Tarif âge par âge</h2>

    <div class="prices">
        <div class="prices__list">
            <h3 class="prices__list-title">
                <span class="prices__item-desc">Age</span> <span class="prices__item-value">Tarif unitaire</span>
            </h3>
            <ul>
                <?php
                /*
                $age = 1;
                while ($age <= 99) {
                    // On calcule le montant qu'il doit payer
                    if ($age < 14) {
                        $montant = $tarifEnfant;
                    }
                    // On teste ensuite les ages pour le tarif réduit.
                    // Ici, pas besoin de préciser que l'age doit etre supérieur à 14.
                    // Si l'age est inférieur à 14, le premier if s'est déjà déclenché. PHP ne passera donc pas dans le elseif.
                    elseif ($age > 60 || $age < 16) {
                        $montant = $tarifReduit;
                    }
                    // Dans tous les autres cas, on a le tarif plein
                    else {
                        $montant = $tarifPlein;
                    }

                    // Ici on va construire le html pour l'age courant.
                    ?>

                    <li class="prices__item">
                        <span class="prices__item-desc"><?= $age; ?> ans</span>
                        <span class="prices__item-value"><?= number_format($montant, 2, ',', ' '); ?> &euro;</span>
                    </li>

                    <?php
                    // $age = $age + 1;
                    // $age += 1;
                    // $age++;
                    ++$age;
                }
                */
                ?>

                <?php
                for ($age = 1; $age <= 99; $age++) {
                    // On calcule le montant qu'il doit payer
                    if ($age < 14) {
                        $montant = $tarifEnfant;
                    }
                    // On teste ensuite les ages pour le tarif réduit.
                    // Ici, pas besoin de préciser que l'age doit etre supérieur à 14.
                    // Si l'age est inférieur à 14, le premier if s'est déjà déclenché. PHP ne passera donc pas dans le elseif.
                    elseif ($age > 60 || $age < 16) {
                        $montant = $tarifReduit;
                    }
                    // Dans tous les autres cas, on a le tarif plein
                    else {
                        $montant = $tarifPlein;
                    }

                    // Ici on va construire le html pour l'age courant.
                    ?>

                    <li class="prices__item">
                        <span class="prices__item-desc"><?= $age; ?> ans</span>
                        <span class="prices__item-value"><?= number_format($montant, 2, ',', ' '); ?> &euro;</span>
                    </li>

                    <?php
                }
                ?>
            </ul>
        </div>
    </div>

</section>

<?php
require_once "template/footer.php";
?>