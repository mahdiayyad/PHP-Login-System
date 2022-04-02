<?php
    
    // Allow the config
    define('__CONFIG__', true);

    // Require the config
    require_once "../inc/config.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $return = [];

        // Make sure the user does not exist.

        // Make sure the user CAN be added AND is added

        // Return the proper information back to JavaScript to redirect us.

        $return['redirect'] = '/Login-System/var/www/php-login-system/dashboard.php';

        $return['name'] = 'Mahdi Ayyad';
        // Always return JSON format
        echo json_encode($return, JSON_PRETTY_PRINT); exit;
    } else {
        // Die. Kill the script. Redirect the user. Do something regardless.
        exit('Invalid URL');
    }
?>