<?php
    if(!session_id()) {
        session_start();
    }

    require_once 'config.php';
    require_once 'vendor/autoload.php';

    // name space
    use Facebook\Facebook;

    $dotenv = new Dotenv\Dotenv(__DIR__);
    $dotenv->load();

    $permissions = ['email']; // optional
    $loginUrl = $helper->getLoginUrl($_ENV['HOST'].'fb-callback.php', $permissions);
    echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';

?>