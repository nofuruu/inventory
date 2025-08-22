<!-- Catatan: Untuk menggunakan Font Awesome, pastikan Anda telah menyertakan script atau stylesheet Font Awesome di <head> Anda. -->
<!-- Contoh: <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" /> -->

<nav class="navbar navbar-expand-lg navbar-dark rounded-3 shadow-sm" style="background-color: #111827;">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-light" href="#">
            <i class="fas fa-cubes me-2"></i>
            Dashboard
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-menu" id="navbarNav">
            <div class="d-flex align-items-center">
                <div class="dropdown p-2">
                    <a class="nav-link dropdown-toggle d-flex align-items-center text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://placehold.co/40x40/d1d5db/4b5563?text=AV" class="rounded-circle me-2" height="40" alt="Avatar" loading="lazy" />
                        <span class="d-none d-md-block">John Doe</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">My profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

