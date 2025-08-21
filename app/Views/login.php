<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Login ke sistem Inventaris MyInventory untuk mengelola aset dan barang dengan mudah.">
    <title>Login | MyInventory</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/sweetalert2.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/style.css') ?>">

    <!-- JS -->
    <script src="<?= base_url('public/assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/js/sweetalert2.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/js/main.js') ?>"></script>

    <style>
        body {
            background-color: #111827;
            font-family: 'Inter', sans-serif;
            margin: 0;
        }

        .login-container {
            height: 100vh;
        }

        .card {
            background-color: #f9fafb;
            color: #111827;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 420px;
            border-radius: 12px;
            padding: 2rem;
        }

        .heading {
            border-bottom: 1px solid #e5e7eb;
            margin-bottom: 1.5rem;
        }

        .heading h3 {
            font-weight: 700;
            margin: 0;
            font-size: 1.5rem;
            color: #374151;
            background-color: transparent !important;
        }

        .card-header small {
            color: #6b7280;
        }

        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
            border-bottom: 2px solid #d1d5db;
        }

        .form-group input {
            width: 100%;
            border: none;
            background: transparent;
            outline: none;
            padding: 12px 10px 6px 0;
            font-size: 15px;
            color: #111827;
        }

        .form-group input::placeholder {
            color: transparent;
        }

        .form-group label {
            position: absolute;
            top: 12px;
            left: 0;
            font-size: 15px;
            color: #9ca3af;
            transition: 0.2s ease;
            pointer-events: none;
        }

        .form-group input:focus+label,
        .form-group input:not(:placeholder-shown)+label {
            top: -8px;
            font-size: 12px;
            color: #2563eb;
        }

        .form-check {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
        }

        .form-check-input {
            margin-right: 0.5rem;
            accent-color: #04b177;
        }

        .form-check-label {
            color: #6b7280;
        }

        .btn-login {
            width: 100%;
            padding: 0.75rem;
            background-color: #04b177;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .btn-login:hover {
            background-color: #039166;
        }

        .loadingSaving {
            text-align: center;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <main class="login-container d-flex justify-content-center align-items-center p-4">
        <section class="card">
            <div class="heading">
                <h3>Welcome | <span style="color:#04b177;">myInventory</span></h3>
                <small>Login to start</small>
            </div>

            <div class="loadingSaving"></div>

            <form id="loginForm" novalidate>
                <div class="form-group">
                    <input type="text" id="username" name="username" placeholder="Username" required autocomplete="username"
                        autofocus>
                    <label for="username">Username</label>
                </div>

                <div class="form-group">
                    <input type="password" id="password" name="password" placeholder="Password" required
                        autocomplete="current-password">
                    <label for="password">Password</label>
                </div>

                <div class="form-check">
                    <input type="checkbox" id="showPassword" class="form-check-input" onclick="togglePassword()">
                    <label for="showPassword" class="form-check-label">Tampilkan Password</label>
                </div>

                <button type="submit" class="btn-login" id="loginbtn">Masuk</button>
            </form>
        </section>
    </main>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
        }

        $(document).ready(function() {
            $('#loginForm').on('submit', function(e) {
                e.preventDefault();

                const username = $('#username').val();
                const password = $('#password').val();

                $('.loadingSaving').html('<img src="<?= base_url('public/assets/images/loading.gif') ?>" alt="Loading..." style="height:2rem;">');

                $.ajax({
                    url: '<?= base_url('p_login') ?>',
                    type: 'POST',
                    data: {
                        username,
                        password
                    },
                    dataType: 'json',
                    success: function(response) {
                        $('.loadingSaving').html('');
                        if (response.status === 'success') {
                            showToast('success', 'Login Berhasil');
                            setTimeout(() => {
                                window.location.href = response.redirect;
                            }, 1000);
                        } else {
                            showToast('error', response.message);
                        }
                    },
                    error: function() {
                        $('.loadingSaving').html('');
                        showToast('error', 'Terjadi kesalahan server.');
                    }
                });
            });
        });
    </script>
</body>

</html>