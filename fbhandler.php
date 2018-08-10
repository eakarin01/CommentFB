<?php

include ('vendor/autoload.php');

// name space
use Facebook\Facebook;


if($_POST['appid'] && $_POST['appsecret']){
    $fb = new Facebook([
        'app_id' => $_POST['appid'],
        'app_secret' => $_POST['appsecret'],
        'default_graph_version' => 'v2.10',
        //'default_access_token' => '{access-token}', // optional
    ]);

    // Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
      $helper = $fb->getRedirectLoginHelper();
    //   $helper = $fb->getJavaScriptHelper();
    //   $helper = $fb->getCanvasHelper();
    //   $helper = $fb->getPageTabHelper();

    $permissions = ['email', 'user_likes']; // optional
    $loginUrl = $helper->getLoginUrl('https://{your-website}/login-callback.php', $permissions);

    echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
    echo $_POST['appid'];
}

?>