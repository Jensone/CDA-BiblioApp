<?php

/**
 * Formulaire d'ajout d'une réservation
 */

use BiblioApp\ClientController;

include_once './classes/Controller/ClientController.php';

$clients = ClientController::getAllClients();

?>

<form action="../config/forms.php" method="post">

    <div class="input-group mb-3 d-flex gap-2">
        <select name="client" id="client" class="form-select">
            <option value="0">Choisir un client</option>
            <?php foreach ($clients as $client) : ?>

                <option value="<?= $client['id'] ?>">
                    <?= $client['firstname'] . " " . $client['lastname'] ?>
                </option>

            <?php endforeach; ?>
        </select>
    </div>

    <div class="input-group mb-3">
        <!-- Cette valeur sert d'affichage pour l'utilisateur -->
        <input required value="<?= $book['title'] ?>" type="text" class="form-control" disabled>

        <!-- C'est bien cette valeur qui sera envoyée lors de la soumission du formulaire -->
        <input name="book" hidden required value="<?= $book['id'] ?>" type="text" class="form-control">
    </div>

    <div class="input-group mb-3">
        <input name="dateStart" required type="date" class="form-control">
    </div>

    <div class="input-group mb-3">
        <input name="dateEnd" required type="date" class="form-control">
    </div>

    <input name="addBooking" type="submit" class="btn btn-primary rounded-5" value="Ajouter">

</form>