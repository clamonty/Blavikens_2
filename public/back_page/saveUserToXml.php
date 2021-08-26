<?php
    $xml_location = "../../resources/data/users.xml";
    $user_list = simplexml_load_file($xml_location);
    $user = $users_list->addChild("user");
    $user->addChild("username", $_POST['username']);
    $user->addChild("email", $_POST['email']);
    $user->addChild("password", $_POST['password']);
    $user_list->asXML($xml_location);
?>