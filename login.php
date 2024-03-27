<?php

?>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<title>Login | </title>
</head>

<body>
<div class="wrapper">
    <form action="">
        <h1>Login</h1>
        <div class="input-box">
            <input type="text" id="username" placeholder="username" required>
            <i class='bx bxs-user'></i>


        </div>
        <div class="input-box">
            <input type="password" id="password" placeholder="password" required>
            <i class='bx bxs-lock-alt'></i>

        </div>

        <div class="remember-forgot">
            <label><input type="checkbox">Remember me</label>
            <a href="#">Forgot password</a>
        </div>

        <button type="button" onclick="login()" class="btn">Login</button>
        <div class="register-lingk"></div>
        <p>Halaman Utama <a href="index.php">Home</a>
        </p>

</div>
</form>
</div>
<script>
    function login() {
        var user = document.getElementById("username").value;
        var pass = document.getElementById("password").value;

        if (user == "ipsak" && pass == "kaspi") {
            Swal.fire({
                title: "Good job!",
                text: "You clicked the button!",
                icon: "success"
            });
            // Menunda window.location menggunakan setInterval
            var intervalID = setInterval(function () {
                clearInterval(intervalID); // Menghentikan interval setelah satu kali eksekusi
                window.location = "index.php";
            }, 2000); // Menunda selama 2 detik (ubah sesuai kebutuhan)
            return false;
        }
        else if (user == "" || pass == "") {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Username atau Password Empty!",
            });
            return false;
        }
        else {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Username atau Password Not Betul! Isi Yang Corect Dung!",
            });
        }
    }
</script>

</body>