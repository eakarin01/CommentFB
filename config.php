<?php
    require_once 'vendor/autoload.php';
    
    use Facebook\Facebook;
    $dotenv = new Dotenv\Dotenv(__DIR__);
    $dotenv->load();

    $fb = new Facebook([
        'app_id' => $_ENV['APP_ID'],
        'app_secret' => $_ENV['APP_SECRET'],
        'default_graph_version' => 'v2.10',
        //'default_access_token' => '{access-token}', // optional
    ]);

    // Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
    $helper = $fb->getRedirectLoginHelper();

?>