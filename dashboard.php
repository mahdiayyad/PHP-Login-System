<?php
    // Allow the config
    define('__CONFIG__', true);
    // Require the config
    require_once "inc/config.php";
    Page::ForceLogin();

    $User = new User($_SESSION['user_id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
    <title>Dashboard</title>
</head>
<body>
    <div class="uk-section uk-container">
       <h2>Dashboard</h2> 
       <p>Hello <?php echo $User->firstname; ?>, you are registered <?php echo $User->reg_time; ?></p>
       <p><a href="./logout.php">Logout</a></p>
    </div>

    <?php require_once("inc/footer.php"); ?>
</body>
</html>