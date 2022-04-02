$(document).on('submit', 'form.js-register', function(event) {
    event.preventDefault();

    var form = $(this);
    var error = $(".js-error", form);
    var dataObj = {
        email: $("input[type='email']", form).val(),
        password: $("input[type='password']", form).val(),
    }

    if(dataObj.email.length < 6) {
        error.text("Please enter a valid email address").show();
        return false;
    } else if(dataObj.password.length < 11) {
        error.text("Please enter a passphrase that is atleast 11 characters long.").show();
        return false;
    }

    error.hide();

    $.ajax({
        type: "POST",
        url: "/Login-System/var/www/php-login-system/ajax/register.php",
        data: dataObj,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(data) { 
        // Whatever data is
        console.log(data);
        if(data.redirect !== undefined) {
            // window.location = data.redirect;
        }

        alert(data.name);
    })
    .fail(function ajaxFailed(e) {
        // This failed
        console.log(e);
    })
    .always(function ajaxAlwaysDoThis(data) {
        // Always do
        console.log('Always');
    })

    return false;
});

