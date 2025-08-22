<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <?= $this->include('skins/links') ?>
    <style>
        .main-container {
            display: flex;
            flex-grow: 1;
            overflow: hidden;
        }

        .page-content {
            flex-grow: 1;
            padding: 1rem;
            overflow-y: auto;
        }

        .page-wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: #f9fafb;
        }

        .page-container {
            width: 100%;
            max-width: 1200px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-top: 1rem;
        }

        @media (max-width: 768px) {
            .page-container {
                padding: 1rem;
            }
        }
    </style>
</head>

<body style="background-color:#ffffff;">
    <div class="d-flex flex-column min-vh-100">
        <div class="d-flex flex-grow-1">
            <!-- Sidebar -->
            <div class="d-none d-lg-block">
                <?= view('skins/sidebar') ?>
            </div>

            <!-- Konten Utama -->
            <div class="page-content">
                <?= view('skins/header') ?>

                <main>
                    <div class="page-container">
                        <?= $this->renderSection('content') ?>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>

</html>