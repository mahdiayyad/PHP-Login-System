<?php
    // Allow the config
    define('__CONFIG__', true);
    // Require the config
    require_once "inc/config.php"; 
    Page::ForceDashboard();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require_once("inc/header.php"); ?>
    
    <title>Register</title>
</head>
<body>
    <div class="uk-section uk-container">
        <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
            <form class="uk-form-stacked js-register">
                <h2>Register</h2>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-email">First Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-firstname" type="text" name="firstname" required='required' placeholder="John">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-email">Last Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-lastname" type="text" name="lastname" required='required' placeholder="Doe">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-email">Email</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-email" type="email" name="email" required='required' placeholder="email@email.com">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-password">Password</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-password" type="password" name="password" required='required' placeholder="Your Password">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-password">Confirm Password</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-confirm-password" type="password" name="confirm_password" required='required' placeholder="Confirm Password">
                    </div>
                </div>

                <div class="uk-margin uk-alert uk-alert-danger js-error" style="display:none;"></div>

                <div class="uk-margin">
                    <button class="uk-button uk-button-primary" type="submit">Register</button>
                    <p>Already have an account? <a href="./login.php" style="color: #f79f24; text-decoration: none;">Sign In</a></p>
                </div>

            </form>
        </div>
    </div>

    <?php require_once("inc/footer.php"); ?>
</body>
</html>