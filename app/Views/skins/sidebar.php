<!-- Catatan: Untuk menggunakan Font Awesome, pastikan Anda telah menyertakan script atau stylesheet Font Awesome di <head> Anda. -->
<!-- Contoh: <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" /> -->

<style>
    .sidebar-link {
        display: flex;
        align-items: center;
        padding: 0.75rem 1rem;
        color: #a0aec0;
        /* Warna teks yang lebih terang */
        text-decoration: none;
        transition: background-color 0.2s ease;
    }

    .sidebar-link:hover,
    .sidebar-link.active {
        background-color: rgba(255, 255, 255, 0.1);
        /* Latar belakang hover yang sedikit transparan */
        color: #fff;
        /* Warna teks putih saat aktif/hover */
        border-radius: 0.5rem;
    }

    .sidebar-link i {
        font-size: 1.25rem;
        margin-right: 0.75rem;
    }

    @media (min-width: 992px) {
        .offcanvas-lg {
            position: sticky;
            top: 0;
            height: 100vh;
            border-right: 1px solid rgba(0, 0, 0, 0.1);
            width: 280px;
        }

        .offcanvas-lg .offcanvas-body {
            padding-top: 1rem;
        }
    }
</style>

<div class="d-flex flex-column flex-shrink-0 p-3 shadow-sm" style="width: 250px; height: 100vh; background-color: #111827;">
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="#" class="sidebar-link active" aria-current="page">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="#" class="sidebar-link">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#" class="sidebar-link">
                <i class="fas fa-shopping-cart"></i>
                <span>Orders</span>
            </a>
        </li>
        <li>
            <a href="#" class="sidebar-link">
                <i class="fas fa-box-open"></i>
                <span>Products</span>
            </a>
        </li>
        <li>
            <a href="#" class="sidebar-link">
                <i class="fas fa-users"></i>
                <span>Customers</span>
            </a>
        </li>
    </ul>
    <hr class="text-light">
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-light text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://placehold.co/32x32/d1d5db/4b5563?text=JD" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu text-small shadow dropdown-menu-dark" aria-labelledby="dropdownUser">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</div>