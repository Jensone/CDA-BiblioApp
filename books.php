<?php

/**
 * Page d'affichage des livres
 */

// Inclusion de l'entête
include_once './templates/_header.php';

?>

<!--Contenu de la page -->

<div class="p-5 text-center bg-body-tertiary rounded-3 m-4 bg-svg">
    <h1 class="text-body-emphasis">Tous les livres</h1>
    <p class="col-lg-8 mx-auto fs-5 text-muted">
        Page d'affichage des livres de la bibliothèque
    </p>
    <div class="d-inline-flex gap-2 mb-5">
        <a href="/booking.php" class="btn btn-outline-secondary btn-lg px-4 rounded-pill" type="button">
            Les réservations
        </a>
    </div>
</div>

<div id="books" class="row gap-3 d-flex justify-content-center mb-5">
    <?php include_once './templates/_books.php'; ?>
</div>

<!--Fin du contenu de la page -->

<?php
// Inclusion du footer
include_once './templates/_footer.php';


/**
 * DONE : Créer un formulaire de réservation
 * TODO : Créer un formulaire de modification de livre
 * TODO: Déploiement
 */