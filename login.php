<?php
require_once('config.php');

if(isset($_REQUEST['login']) && isset($_REQUEST['password'])) {
  
    $user = new  User ($_REQUEST['login'], $_REQUEST['password']);
    if($user->login()) {

        $v = array(
            'message' => "Zalogowano poprawnie użytkownika: ".$user->getName(),
        );
        $twig->display('message.html.twig', $v);
    } else {

        $twig->display('message.html.twig', 
                            ['message' => "Błędny login lub hasło"]);
    }
} else {

    $twig->display('login.html.twig');
}
?>  