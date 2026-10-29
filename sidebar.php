
<div id="mySidebar" class="col-auto bg-dark text-white offcanvas-lg offcanvas-start">
    <div class="p-4">

        <a href="home.php" class="navbar-brand text-white text-decoration-none">
            <div class="d-flex align-items-center gap-2">
                <i class="bi bi-journal-bookmark-fill text-info fs-3"></i>
                <h5 class="mb-0 fw-bold">RECIPETARY</h5>
            </div>
        </a>

        <hr>

        <ul class="mynav nav nav-pills flex-column">

            <li class="nav-item mb-3 mt-2">
                <a href="home.php" class="nav-link text-white">
                    <i class="bi bi-house-fill me-2"></i>
                    Home
                </a>
            </li>

            <li class="nav-item mb-3">
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-speedometer2 me-2"></i>
                    Dashboard
                </a>
            </li>

            <li class="nav-item mb-3">
                <a href="products.php" class="nav-link text-white">
                    <i class="bi bi-book-half me-2"></i>
                    Products
                </a>
            </li>

            <li class="nav-item mb-3">
                <a href="customers.php" class="nav-link text-white">
                    <i class="bi bi-people-fill me-2"></i>
                    Customers
                </a>
            </li>

            <li class="nav-item mb-3">
                <a href="staffs.php" class="nav-link text-white">
                    <i class="bi bi-person-badge-fill me-2"></i>
                    Staffs
                </a>
            </li>

            <li class="nav-item mb-3">
                <a href="orders.php" class="nav-link text-white">
                    <i class="bi bi-cart-fill me-2"></i>
                    Orders
                </a>
            </li>

        </ul>

        <hr>

        <!-- User Profile -->
        <div class="dropdown">
            <a href="#" class="text-decoration-none text-white dropdown-toggle d-inline-block align-middle"
               data-bs-toggle="dropdown">

                <div class="rounded-circle bg-secondary text-center d-inline-block align-middle"
                     style="width: 50px; height: 50px; line-height: 50px;">
                    <i class="bi bi-person-fill text-white fs-4"></i>
                </div>

                <div class="d-inline-block align-middle ms-2 text-start">
                    <h6 class="mb-0 text-nowrap">Danny</h6>
                    <small class="text-white-50 text-nowrap d-block">a223784@siswa.ukm.edu.my</small>
                </div>

            </a>

            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item" href="home.php">Home</a>
                </li>
            </ul>
        </div>

    </div>
</div>

<style>
    /* Sidebar navigation */
    #mySidebar .nav-link {
        padding: 10px 12px;
        border-radius: 8px;
        transition: background-color 0.2s ease, color 0.2s ease;
    }

    /* Hover effect */
    #mySidebar .nav-link:hover {
        background-color: #6f42c1;
        color: white !important;
    }

    /* Click and keyboard focus effect */
    #mySidebar .nav-link:active {
        background-color: #59359c;
    }

    #mySidebar .nav-link:focus-visible {
        outline: 2px solid #b9a0f5;
        outline-offset: 2px;
    }

    /* Logo hover effect */
    #mySidebar .navbar-brand i {
        transition: color 0.2s ease;
    }

    #mySidebar .navbar-brand:hover i {
        color: #b9a0f5 !important;
    }

    /* Profile hover effect */
    #mySidebar .dropdown > a:hover {
        opacity: 0.8;
    }
</style>
