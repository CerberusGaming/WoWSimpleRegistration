<?php
$config['baseurl'] = $_SERVER['BASEURL'] ?: "http://localhost";
$config['page_title'] = $_SERVER['PAGE_TITLE'] ?: "Simple Register";
$config['template'] = $_SERVER['TEMPLATE'] ?: 'light';
$config['language'] = $_SERVER['LANGUAGE'] ?: "english";
$config['realmlist'] = $_SERVER['REALMLIST'] ?: 'logon.myserver.com';
$config['patch_location'] = $_SERVER['PATCH_LOCATION'] ?: 'http://mypatch.com/patch.mpq';
$config['game_version'] = $_SERVER['GAME_VERSION'] ?: '3.3.5a (12340)';
$config['expansion'] = $_SERVER['EXPANSION'] ?: '2';
$config['server_core'] = $_SERVER['SERVER_CORE'] ?: 0;
$config['script_version'] = $_SERVER['SCRIPT_VERSION'] ?: '2.0.2';

$config['debug_mode'] = filter_var($_SERVER['DEBUG_MODE'], FILTER_VALIDATE_BOOLEAN);
$config['battlenet_support'] = filter_var($_SERVER['BATTLENET_SUPPORT'], FILTER_VALIDATE_BOOLEAN);
$config['srp6_support'] = filter_var($_SERVER['SRP6_SUPPORT'], FILTER_VALIDATE_BOOLEAN);
$config['disable_top_players'] = filter_var($_SERVER['DISABLE_TOP_PLAYERS'], FILTER_VALIDATE_BOOLEAN);
$config['disable_online_players'] = filter_var($_SERVER['DISABLE_ONLINE_PLAYERS'], FILTER_VALIDATE_BOOLEAN);
$config['disable_changepassword'] = filter_var($_SERVER['DISABLE_CHANGEPASSWORD'], FILTER_VALIDATE_BOOLEAN);
$config['multiple_email_use'] = filter_var($_SERVER['MULTIPLE_EMAIL_USE'], FILTER_VALIDATE_BOOLEAN);
$config['vote_system'] = filter_var($_SERVER['VOTE_SYSTEM'], FILTER_VALIDATE_BOOLEAN);
$config['2fa_support'] = filter_var($_SERVER['2FA_SUPPORT'], FILTER_VALIDATE_BOOLEAN);

$config['smtp_host'] = $_SERVER['SMTP_HOST'] ?: 'smtp1.example.com';
$config['smtp_port'] = $_SERVER['SMTP_PORT'] ?: 587;
$config['smtp_auth'] = filter_var($_SERVER['SMTP_AUTH'], FILTER_VALIDATE_BOOLEAN);
$config['smtp_user'] = $_SERVER['SMTP_USER'] ?: 'user@example.com';
$config['smtp_pass'] = $_SERVER['SMTP_PASS'] ?: 'SECRET';
$config['smtp_secure'] = $_SERVER['SMTP_SECURE'] ?: 'tls';
$config['smtp_mail'] = $_SERVER['SMTP_MAIL'] ?: 'no-reply@example.com';

$config['captcha_type'] = $_SERVER['CAPTCHA_TYPE'] ?: 0;
$config['captcha_key'] = $_SERVER['CAPTCHA_KEY'] ?: '';
$config['captcha_secret'] = $_SERVER['CAPTCHA_SECRET'] ?: '';
$config['captcha_language'] = $_SERVER['CAPTCHA_LANGUAGE'] ?: 'en';

$config['soap_for_register'] = filter_var($_SERVER['SOAP_FOR_REGISTER'], FILTER_VALIDATE_BOOLEAN);
$config['soap_host'] = $_SERVER['SOAP_HOST'] ?: '127.0.0.1';
$config['soap_port'] = $_SERVER['SOAP_PORT'] ?: '7878';
$config['soap_uri'] = $_SERVER['SOAP_URI'] ?: 'urn:MaNGOS';
$config['soap_style'] = $_SERVER['SOAP_STYLE'] ?: 'SOAP_RPC';
$config['soap_username'] = $_SERVER['SOAP_USERNAME'] ?: 'admin_soap';
$config['soap_password'] = $_SERVER['SOAP_PASSWORD'] ?: 'admin_soap';
$config['soap_ca_command'] = $_SERVER['SOAP_CA_COMMAND'] ?: 'account create {USERNAME} {PASSWORD}';
$config['soap_cp_command'] = $_SERVER['SOAP_CP_COMMAND'] ?: 'account set password {USERNAME} {PASSWORD} {PASSWORD}';
$config['soap_asa_command'] = $_SERVER['SOAP_ASA_COMMAND'] ?: 'account set addon {USERNAME} {EXPANSION}';
$config['soap_2d_command'] = $_SERVER['SOAP_2D_COMMAND'] ?: 'account set 2fa {USERNAME} off';
$config['soap_2e_command'] = $_SERVER['SOAP_2E_COMMAND'] ?: 'account set 2fa {USERNAME} {SECRET}';

$config['db_auth_host'] = $_SERVER['DB_AUTH_HOST'] ?: '127.0.0.1';
$config['db_auth_port'] = $_SERVER['DB_AUTH_PORT'] ?: '3306';
$config['db_auth_user'] = $_SERVER['DB_AUTH_USER'] ?: 'root';
$config['db_auth_pass'] = $_SERVER['DB_AUTH_PASS'] ?: 'root';
$config['db_auth_dbname'] = $_SERVER['DB_AUTH_DBNAME'] ?: 'realmd';

// ---------------------------------------------------------------------------------------------------------------------
foreach ($_SERVER as $var => $val) {
    if (substr($var, 0, 11) != "REALMLISTS_") {
        continue;
    };
    $_id = substr($var, 11, 1);
    $_vr = substr($var, 13, strlen($var) - 13);
    $config['realmlists'][$_id][strtolower($_vr)] = $val;
}

$vote_sites = array();

foreach ($_SERVER as $var => $val) {
    if (substr($var, 0, 11) != "VOTE_SITES_") {
        continue;
    };
    $_id = substr($var, 11, 1);
    $_vr = substr($var, 13, strlen($var) - 13);
    $config['vote_sites'][$_id][strtolower($_vr)] = $val;
}


// ---------------------------------------------------------------------------------------------------------------------


$config['supported_langs'] = [
    'english' => 'English',
    'persian' => 'Persian',
    'italian' => 'Italian',
    'chinese-simplified' => 'Chinese Simplified',
    'chinese-traditional' => 'Chinese Traditional',
    'swedish' => 'Swedish',
    'french' => 'French',
    'german' => 'German',
    'spanish' => 'Spanish',
    'korean' => 'Korean',
    'russian' => 'Russian'
];