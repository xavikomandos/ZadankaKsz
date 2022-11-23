<?php
require_once('config.php');
require_once('class/User.class.php');

$user = new User('jkowalski', 'tajneHasło');


if($user->login()) {
    echo "Zalogowano poprawnie";
} else {
    echo "Błędny login lub hasło";
}


?>