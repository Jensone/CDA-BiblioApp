<?php 

// Inclusion de l'entête
include_once './templates/_header.php';


?>

<!-Contenu de la page -->



<!-Fin du contenu de la page -->

<?php
// Inclusion du footer
include_once './templates/_footer.php';

Table book
id
title
author
edition
isbn
category
pages
format

Table booking
id
clientId
bookId
dateStart
dateEnd

Table client
id
firstname
lastname
email
phone
birthdayYear
address
city
deposit
bookingId

Table user
id
username
password
