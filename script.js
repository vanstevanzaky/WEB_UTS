$(document).ready(function() {
    $("#loginForm").submit(function(e) {
        e.preventDefault();
        $.post('login.php', $(this).serialize())
            .done(function(response) {
                var data = JSON.parse(response);
                if(data.success) {
                    window.location.href = data.redirect;
                } else {
                    alert("Nama pengguna atau kata sandi salah!");
                }
            })
    });
});