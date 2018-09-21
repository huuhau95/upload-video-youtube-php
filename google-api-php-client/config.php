<?php

// OAUTH Configuration
$oauthClientID = '587164481385-dnelp6vt7squ6s22l0i8dilrj1pqp6c7.apps.googleusercontent.com';
$oauthClientSecret = 'B6Ck-aFMdj54N_sA0uHcL7cE';
$baseURL = 'https://login.nhandantv.vn/admin';
$redirectURL = 'https://login.nhandantv.vn/admin/youtube/youtube/config_ytb';

define('OAUTH_CLIENT_ID',$oauthClientID);
define('OAUTH_CLIENT_SECRET',$oauthClientSecret);
define('REDIRECT_URL',$redirectURL);
define('BASE_URL',$baseURL);

// Include google client libraries
require_once DIR_MODULES.'google-api-php-client/vendor/autoload.php'; 
require_once DIR_MODULES.'google-api-php-client/src/Google/Client.php';
require_once DIR_MODULES.'google-api-php-client/vendor/google/apiclient-services/src/Google/Service/YouTube.php';
// die(OAUTH_CLIENT_ID);
session_start();

$client = new Google_Client();

// $client->setClientId(OAUTH_CLIENT_ID);
// $client->setClientSecret(OAUTH_CLIENT_SECRET);

// $client->setRedirectUri(REDIRECT_URL);
$client->setAuthConfigFile( DIR_MODULES.'google-api-php-client/client_secrets.json');
$client->setRedirectUri(REDIRECT_URL);
$client->setScopes('https://www.googleapis.com/auth/youtube');
$client->setAccessType('offline');        // offline access
$client->setApprovalPrompt ("force"); 
// $client->setClientId($oauthClientID);
// $client->setClientSecret($oauthClientSecret);
// Define an object that will be used to make all API requests.
// $youtube = new Google_Service_YouTube($client);
    // dd($youtube);
?>