<?php 
/**
 * Page de suivi des réservations
 */

// Chargement des namespaces
use BiblioApp\BookingController;

// Chargement des classes
require_once './classes/Controller/BookingController.php';

// On récupère toutes les réservations
$bookings = BookingController::getAllBookings();

// Inclusion du header
require_once './templates/_header.php';

?>

<!--Contenu de la page -->

<div class="p-5 text-center bg-body-tertiary rounded-3 m-4 bg-svg">
    <h1 class="text-body-emphasis">Les réservations</h1>
    <p class="lead">Retrouvez ici toutes les réservations</p>
    <a href="#" class="btn btn-success rounded-5">Ajouter une réservation</a>
</div>

<div class="row">
    <div class="col-12">
        <!-- On ajoute un attribut aria-details pour indiquer que
         le tableau est une liste de réservations. Cela permettra
            aux lecteurs d'écran de comprendre le contenu du tableau -->
        <table class="table table-striped table-hover" aria-details="Liste des réservations">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Livre</th>
                    <th scope="col">Date de début</th>
                    <th scope="col">Date de fin</th>
                    <th scope="col">Client</th>
                    <th scope="col">Statut</th>
                </tr>
            </thead>
            <tbody>
                <!-- On boucle sur le tableau $bookings pour afficher les réservations -->
                <?php foreach ($bookings as $booking): ?>
                    <tr>
                        <th scope="row"><?= $booking['id'] ?></th>
                        <td><?= $booking['title'] ?></td>
                        <td><?= $booking['dateStart'] ?></td>
                        <td><?= $booking['dateEnd'] ?></td>
                        <td><?= $booking['firstname'] . ' ' . $booking['lastname'] ?></td>
                        <td>
                            <?php if ($booking['dateEnd'] >= date('Y-m-d')): ?>
                                <span class="badge bg-success">En cours</span>
                            <?php else: ?>
                                <span class="badge bg-danger">Terminé</span>
                            <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <a href="index.php" class="btn btn-outline-primary rounded-5">Retour à l'accueil</a>
    </div>
</div>

<!--Fin du contenu de la page -->

<?php
// Inclusion du footer
require_once './templates/_footer.php';
