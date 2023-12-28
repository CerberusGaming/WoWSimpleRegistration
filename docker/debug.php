<?php
if (filter_var($_ENV['DEBUG_MODE'], FILTER_VALIDATE_BOOLEAN)) {
    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    phpinfo();
}
?>