<?php
    
    // Allow the config
    define('__CONFIG__', true);

    // Require the config
    require_once "../inc/config.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $return = [];


        $firstname = Filter::String( $_POST['firstname'] );
        $lastname = Filter::String( $_POST['lastname'] );
        $email = Filter::String($_POST['email']);

        $user_found = User::Find($email);

        if($user_found) {
            // User exists
            // We can also check to see if they are able to log in.
            $return['error'] = 'You already have an account.';
            $return['is_logged_in'] = false;
        } else {
            // User does not exist add them now.

            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $confirm_password = password_hash($_POST['confirm_password'], PASSWORD_DEFAULT);

            $addUser = $con->prepare("INSERT INTO users(firstname, lastname, email, password, confirm_password) VALUES(:firstname, :lastname, LOWER(:email), :password, :confirm_password)");
            $addUser->bindParam(':firstname', $firstname, PDO::PARAM_STR);
            $addUser->bindParam(':lastname', $lastname, PDO::PARAM_STR);
            $addUser->bindParam(':email', $email, PDO::PARAM_STR);
            $addUser->bindParam(':password', $password, PDO::PARAM_STR);
            $addUser->bindParam(':confirm_password', $confirm_password, PDO::PARAM_STR);
            $addUser->execute();

            $user_id = $con->lastInsertId();

            $_SESSION['user_id'] = (int) $user_id;

            $return['redirect'] = '/Login-System/var/www/php-login-system/dashboard.php?message=welcome';
            $return['is_logged_in'] = true;
        }
        

        // Always return JSON format
        echo json_encode($return, JSON_PRETTY_PRINT); exit;
    } else {
        // Die. Kill the script. Redirect the user. Do something regardless.
        exit('Invalid URL');
    }
?>