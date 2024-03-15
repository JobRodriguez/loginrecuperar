function login() {
    var username = $('#username').val();
    var password = $('#password').val();

    $.ajax({
        type: 'POST',
        url: 'funciones/login.php',
        data: { username: username, password: password },
        success: function (response) {
            if (response === 'success') {
                window.location.href = 'dashboard.php';
            } else {
                console.log(response);
                $('#errorMessage').text('Usuario o contraseña incorrectos');
            }
        }
    });
}
function restablecerContra() {
    var username = $('#username').val();
    $.ajax({
        type: 'POST',
        url: 'funciones/recuperarContra.php',
        data: { username: username },
        dataType: 'json',
        success: function (response) {
            if (response.success === 'success') {
                console.log(response.link); // Aquí puedes acceder al valor de 'link'
                $('#errorMessage').text('Correo de recuperacion enviado');
            } else {
                console.log(response.link);
                $('#errorMessage').text('Usuario no encontrado');
            }
        }
    });
}
function comprobar() {
    var url = new URL(window.location.href);

    var token = url.searchParams.get("token");
    $.ajax({
        type: 'POST',
        url: 'funciones/comprobar.php',
        data: { token: token },
        success: function (response) {
            if (response === 'success') {
            } else {
                window.location.href = 'index.html';
            }
        }
    });
}
function cambiarContra() {
    var passwordnew = $('#passwordnew').val();
    var passwordnew2 = $('#passwordnew2').val();
    var url = new URL(window.location.href);

    var token = url.searchParams.get("token");
    $.ajax({
        type: 'POST',
        url: 'funciones/cambiarContra.php',
        data: { passwordnew: passwordnew, passwordnew2: passwordnew2 , token: token},
        success: function (response) {
            if (response === 'success') {
                window.location.href = 'dashboard.php';
            } else {
                console.log(response);
                $('#errorMessage').text(response);
            }
        }
    });
}