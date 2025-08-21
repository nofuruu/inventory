<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="Halaman tidak ditemukan - MyInventory. Temukan solusi atau kembali ke halaman utama.">
    <title>404 Not Found | MyInventory</title>
    <?= $this->include('skins/links') ?>

    <style>
        body {
            background-color: #111827;
            font-family: 'Inter', sans-serif;
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .notfound-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 2rem;
            background: #f9fafb;
            color: #111827;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
            padding: 2rem 2.5rem;
            max-width: 960px;
            width: 100%;
            animation: fadeIn 0.9s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Gambar dominan */
        .notfound-illustration {
            flex: 1;
            text-align: center;
        }

        .notfound-illustration img {
            width: 100%;
            max-width: 350px;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-12px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        /* Konten teks */
        .notfound-content {
            flex: 1.2;
            text-align: left;
        }

        .notfound-title {
            font-size: 4rem;
            font-weight: 800;
            color: #04b177;
            margin-bottom: 0.5rem;
            letter-spacing: 2px;
        }

        .notfound-subtitle {
            font-size: 1.5rem;
            color: #374151;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .notfound-desc {
            color: #6b7280;
            margin-bottom: 2rem;
            font-size: 1rem;
            line-height: 1.6;
        }

        /* Tombol */
        .btn-group {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
        }

        .btn-home {
            background: #04b177;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 0.7rem 1.6rem;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.25s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-home:hover {
            background: #039166;
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(4, 177, 119, 0.3);
        }

        /* Mobile responsive */
        @media (max-width: 768px) {
            .notfound-container {
                flex-direction: column;
                text-align: center;
                padding: 2rem 1.5rem;
            }

            .notfound-content {
                text-align: center;
            }

            .notfound-title {
                font-size: 3rem;
            }

            .notfound-subtitle {
                font-size: 1.2rem;
            }
        }
    </style>
</head>

<body>
    <main class="notfound-container" role="main">
        <!-- Gambar dominan -->
        <div class="notfound-illustration">
            <img src="<?= base_url('public/assets/images/404.png') ?>" alt="404 Illustration">
        </div>

        <!-- Konten teks -->
        <div class="notfound-content">
            <div class="notfound-title">404</div>
            <div class="notfound-subtitle">Halaman Tidak Ditemukan</div>
            <div class="notfound-desc">
                Maaf, halaman yang Anda cari tidak tersedia atau sudah dipindahkan.<br>
                Silakan kembali ke halaman utama atau hubungi admin jika Anda merasa ini adalah kesalahan.
            </div>
            <div class="btn-group">
                <button onclick="location.reload()" class="btn-home">
                    <i class="fas fa-sync-alt"></i> Reload
                </button>
                <a href="<?= base_url('/') ?>" class="btn-home"><i class="fas fa-home"></i> Beranda</a>
                <a href="<?= base_url('/') ?>" class="btn-home"><i class="fas fa-headset"></i> Customer Service</a>
            </div>
        </div>
    </main>

    <script>
        // klik kanan tombol reload -> kembali ke halaman sebelumnya
        document.querySelector('.btn-home').addEventListener('contextmenu', function(e) {
            e.preventDefault();
            window.history.back();
        });
    </script>
</body>

</html>