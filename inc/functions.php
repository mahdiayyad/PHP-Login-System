<?php

    // Force the user to be logged in before they can see the page.
    function forceLogin() {
        if(!isset($_SESSION['user_id'])) {
             // Ther user is not allowed here
            header("Location: login.php"); exit;
        }
    }

    // Force the user to not go back to login page if they are logged in.
    function forceDashboard() {
        if(isset($_SESSION['user_id'])) {
             // Ther user is not allowed here
            header("Location: dashboard.php"); exit;
        }
    }
    
?>