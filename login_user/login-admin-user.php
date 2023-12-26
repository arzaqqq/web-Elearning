<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN TO AEZAQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <link href="asset/style.css" rel="stylesheet"></link>    
</head>
<body>

<div class="container login-container">
    <div class="row">
        <div class="col-md-6 login-form-1">
            <h3>Login Sebagai Admin</h3>
            <form id="adminLoginForm"> <!-- Tambahkan id pada form admin -->
                <div class="form-group">
                    <input type="text" class="form-control" id="adminUsername" placeholder="Username" value="" /> <!-- Tambahkan id pada input username admin -->
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="adminPassword" placeholder="Password" value="" /> <!-- Tambahkan id pada input password admin -->
                </div>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Login" />
                </div>
                <div class="form-group">
                    <a href="#" class="btnForgetPwd text-primary fs-5">Forget Password?</a>
                </div>
            </form>
        </div>
        <div class="col-md-6 login-form-2">
            <div class="login-logo">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            </div>
            <h3 class="text-dark">Login Sebagai User</h3>
            <form id="userLoginForm"> <!-- Tambahkan id pada form user -->
                <div class="form-group">
                    <input type="text" class="form-control" id="userUsername" placeholder="Username" value="" /> <!-- Tambahkan id pada input username user -->
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="userPassword" placeholder="Password" value="" /> <!-- Tambahkan id pada input password user -->
                </div>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Login" />
                </div>
                <div class="form-group">
                    <a href="#" class="btnForgetPwd text-primary fs-5">Forget Password?</a>
                </div>
            </form>
        </div>
    </div>
</div>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
$(document).ready(function() {
    // Formulir login admin
    $('#adminLoginForm').submit(function(e) {
        e.preventDefault();
        var username = $('#adminUsername').val();
        var password = $('#adminPassword').val();
        if (username !== '' && password !== '') {
            if (username === 'admin123' && password === '12345') {
                alert('Login berhasil sebagai admin.');
                // Lakukan tindakan sesuai dengan login yang berhasil
                window.location.href = '../halaman-utama-admin/halaman-utama-admin.php';
            } else {
                alert('Username atau password admin salah.');
            }
        } else {
            alert('Mohon isi username dan password admin.');
        }
    });

    // Formulir login user
    $('#userLoginForm').submit(function(e) {
        e.preventDefault();
        var username = $('#userUsername').val();
        var password = $('#userPassword').val();
        if (username !== '' && password !== '') {
            if (username === 'user123' && password === '1234567') {
                alert('Login berhasil sebagai user.');
                // Lakukan tindakan sesuai dengan login yang berhasil
                window.location.href = '../halaman-utama-user/halaman-utama.php';
            } else {
                alert('Username atau password user salah.');
            }
        } else {
            alert('Mohon isi username dan password user.');
        }
    });

    // Memantau perubahan input username dan password admin
    $('#adminUsername, #adminPassword').on('input', function() {
        toggleAdminSubmitButton();
    });

    // Memantau perubahan input username dan password user
    $('#userUsername, #userPassword').on('input', function() {
        toggleUserSubmitButton();
    });

    // Toggle status tombol submit admin
    function toggleAdminSubmitButton() {
        var username = $('#adminUsername').val();
        var password = $('#adminPassword').val();
        var submitButton = $('#adminLoginForm').find('.btnSubmit');
        if (username !== '' && password !== '') {
            submitButton.prop('disabled', false);
        } else {
            submitButton.prop('disabled', true);
        }
    }

    // Toggle status tombol submit user
    function toggleUserSubmitButton() {
        var username = $('#userUsername').val();
        var password = $('#userPassword').val();
        var submitButton = $('#userLoginForm').find('.btnSubmit');
        if (username !== '' && password !== '') {
            submitButton.prop('disabled', false);
        } else {
            submitButton.prop('disabled', true);
        }
    }
});
</script>
</body>
</html>