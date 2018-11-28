"use strict";

(function ($) {
    $('#login-btn').on('click', function (event) {
        event.preventDefault();
        var userLogin = $('#user-login').val();
        var userPassword = $('#user-password').val();
        event.preventDefault();
        $.ajax({
            url:' http://localhost:3000/users',
            type: 'GET',
            success: function (users) {
                for(var user of users){
                    if(user.login === userLogin && user.password === userPassword){
                        var url = 'http://127.0.0.1:8080/personal.html';
                        $(location).attr('href', url);
                        break;
                    }
                }
                renderError();
            }
        })
    })
})(jQuery);

function renderError() {
    jQuery('#user-login').addClass('invalid');
    jQuery('#user-password').addClass('invalid');

}