<?php
require_once('config.php');
require_once('class/User.class.php');

$user = new User('jkowalski', 'tajneHasło');
/*
if($user->register()) {
    echo "Zarejestrowano poprawnie";
} else {
    echo "Błąd rejestracji użytkownika";
}
*/

if($user->login()) {
    echo "Zalogowano poprawnie";
} else {
    echo "Bledny login lub haslo";
}


echo"chuj";
?>