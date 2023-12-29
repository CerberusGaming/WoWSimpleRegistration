<?php
$config['baseurl'] = $_ENV['BASEURL'] ?: "http://localhost";
$config['page_title'] = $_ENV['PAGE_TITLE'] ?: "Simple Register";
$config['template'] = $_ENV['TEMPLATE'] ?: 'light';
$config['language'] = $_ENV['LANGUAGE'] ?: "english";
$config['realmlist'] = $_ENV['REALMLIST'] ?: 'logon.myserver.com';
$config['patch_location'] = $_ENV['PATCH_LOCATION'] ?: 'http://mypatch.com/patch.mpq';
$config['game_version'] = $_ENV['GAME_VERSION'] ?: '3.3.5a (12340)';
$config['expansion'] = $_ENV['EXPANSION'] ?: '2';
$config['server_core'] = $_ENV['SERVER_CORE'] ?: 0;
$config['script_version'] = $_ENV['SCRIPT_VERSION'] ?: '2.0.2';

$config['debug_mode'] = filter_var($_ENV['DEBUG_MODE'], FILTER_VALIDATE_BOOLEAN);
$config['battlenet_support'] = filter_var($_ENV['BATTLENET_SUPPORT'], FILTER_VALIDATE_BOOLEAN);
$config['srp6_support'] = filter_var($_ENV['SRP6_SUPPORT'], FILTER_VALIDATE_BOOLEAN);
$config['disable_top_players'] = filter_var($_ENV['DISABLE_TOP_PLAYERS'], FILTER_VALIDATE_BOOLEAN);
$config['disable_online_players'] = filter_var($_ENV['DISABLE_ONLINE_PLAYERS'], FILTER_VALIDATE_BOOLEAN);
$config['disable_changepassword'] = filter_var($_ENV['DISABLE_CHANGEPASSWORD'], FILTER_VALIDATE_BOOLEAN);
$config['multiple_email_use'] = filter_var($_ENV['MULTIPLE_EMAIL_USE'], FILTER_VALIDATE_BOOLEAN);
$config['vote_system'] = filter_var($_ENV['VOTE_SYSTEM'], FILTER_VALIDATE_BOOLEAN);
$config['2fa_support'] = filter_var($_ENV['TWOFA_SUPPORT'], FILTER_VALIDATE_BOOLEAN);

$config['smtp_host'] = $_ENV['SMTP_HOST'] ?: 'smtp1.example.com';
$config['smtp_port'] = $_ENV['SMTP_PORT'] ?: 587;
$config['smtp_auth'] = filter_var($_ENV['SMTP_AUTH'], FILTER_VALIDATE_BOOLEAN);
$config['smtp_user'] = $_ENV['SMTP_USER'] ?: 'user@example.com';
$config['smtp_pass'] = $_ENV['SMTP_PASS'] ?: 'SECRET';
$config['smtp_secure'] = $_ENV['SMTP_SECURE'] ?: 'tls';
$config['smtp_mail'] = $_ENV['SMTP_MAIL'] ?: 'no-reply@example.com';

$config['captcha_type'] = $_ENV['CAPTCHA_TYPE'] ?: 0;
$config['captcha_key'] = $_ENV['CAPTCHA_KEY'] ?: '';
$config['captcha_secret'] = $_ENV['CAPTCHA_SECRET'] ?: '';
$config['captcha_language'] = $_ENV['CAPTCHA_LANGUAGE'] ?: 'en';

$config['soap_for_register'] = filter_var($_ENV['SOAP_FOR_REGISTER'], FILTER_VALIDATE_BOOLEAN);
$config['soap_host'] = $_ENV['SOAP_HOST'] ?: '127.0.0.1';
$config['soap_port'] = $_ENV['SOAP_PORT'] ?: '7878';
$config['soap_uri'] = $_ENV['SOAP_URI'] ?: 'urn:MaNGOS';
$config['soap_style'] = $_ENV['SOAP_STYLE'] ?: 'SOAP_RPC';
$config['soap_username'] = $_ENV['SOAP_USERNAME'] ?: 'admin_soap';
$config['soap_password'] = $_ENV['SOAP_PASSWORD'] ?: 'admin_soap';
$config['soap_ca_command'] = $_ENV['SOAP_CA_COMMAND'] ?: 'account create {USERNAME} {PASSWORD}';
$config['soap_cp_command'] = $_ENV['SOAP_CP_COMMAND'] ?: 'account set password {USERNAME} {PASSWORD} {PASSWORD}';
$config['soap_asa_command'] = $_ENV['SOAP_ASA_COMMAND'] ?: 'account set addon {USERNAME} {EXPANSION}';
$config['soap_2d_command'] = $_ENV['SOAP_2D_COMMAND'] ?: 'account set 2fa {USERNAME} off';
$config['soap_2e_command'] = $_ENV['SOAP_2E_COMMAND'] ?: 'account set 2fa {USERNAME} {SECRET}';

$config['db_auth_host'] = $_ENV['DB_AUTH_HOST'] ?: '127.0.0.1';
$config['db_auth_port'] = $_ENV['DB_AUTH_PORT'] ?: '3306';
$config['db_auth_user'] = $_ENV['DB_AUTH_USER'] ?: 'root';
$config['db_auth_pass'] = $_ENV['DB_AUTH_PASS'] ?: 'root';
$config['db_auth_dbname'] = $_ENV['DB_AUTH_DBNAME'] ?: 'realmd';

// ---------------------------------------------------------------------------------------------------------------------
foreach ($_ENV as $var => $val) {
    if (substr($var, 0, 11) != "REALMLISTS_") {
        continue;
    };
    $_id = substr($var, 11, 1);
    $_vr = substr($var, 13, strlen($var) - 13);
    $config['realmlists'][$_id][strtolower($_vr)] = $val;
}

$vote_sites = array();

foreach ($_ENV as $var => $val) {
    if (substr($var, 0, 11) != "VOTE_SITES_") {
        continue;
    };
    $_id = substr($var, 11, 1);
    $_vr = substr($var, 13, strlen($var) - 13);
    $config['vote_sites'][$_id][strtolower($_vr)] = $val;
}

// ---------------------------------------------------------------------------------------------------------------------
$config['discord_embed'] = $_ENV['DISCORD_EMBED'] ?: 'Add discord iframe here.';


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
