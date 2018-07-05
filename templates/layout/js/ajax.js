// JavaScript Document

function register() {
    let login = encodeURI(document.getElementById('login').value);
    let password = encodeURI(document.getElementById('password').value);
    let rememberme = encodeURI(document.getElementById('rememberme').checked);
    let rememberme2 = encodeURI(document.getElementById('rememberme').value);
    $.ajax({
        type: 'POST',
        url: '/index.php',
        data: {
            metod: 'ajax',
            PageAjax: 'register',
            var3: rememberme2,
            login: login,
            password: password,
            rememberme: rememberme
        },
        success: function (response) {
            $('#autorize').html(response[0]);
        },
        dataType: "json"
    });
}

function inputs(var3) {
    $.ajax({
        type: 'POST',
        url: '/index.php',
        data: {metod: 'ajax', var1: 'ajax', var2: 'test2', vars: var3},
        success: function (response) {
            $('#inbef').before(response[0]);
            $('#over').html(response[1]);
        },
        dataType: "json"
    });
}


