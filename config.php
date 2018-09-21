<?php


$oauthClientID = '667711705740-g5dtu2ot84odo79jcmtm2bg3em2gd2eg.apps.googleusercontent.com';
$oauthClientSecret = 'SDz7LC7LjPXRUrVAC9FsHbjk';
$baseURL = 'http://localhost/upload_video_to_youtube_php/';
$redirectURL = 'http://localhost/upload_video_to_youtube_php/upload.php';

define('OAUTH_CLIENT_ID',$oauthClientID);
define('OAUTH_CLIENT_SECRET',$oauthClientSecret);
define('REDIRECT_URL',$redirectURL);
define('BASE_URL',$baseURL);

// Include google client libraries
require_once 'google-api-php-client/vendor/autoload.php';
require_once 'google-api-php-client/src/Google/Client.php';
require_once 'google-api-php-client/vendor/google/apiclient-services/src/Google/Service/YouTube.php';
session_start();

$client = new Google_Client();
$client->setClientId(OAUTH_CLIENT_ID);
$client->setClientSecret(OAUTH_CLIENT_SECRET);
$client->setScopes('https://www.googleapis.com/auth/youtube');
$client->setRedirectUri(REDIRECT_URL);

//Định nghĩ 1 object sẽ được sử dụng để thực hiện tất cả API request
$youtube = new Google_Service_YouTube($client);
?>
