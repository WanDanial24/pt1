<?php
ob_start();
?>

<!-- Welcome Section -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body p-4">
        <div class="row align-items-center">
            <div class="col-md-8">
                <p class="text-primary fw-bold mb-2">WELCOME TO OUR STORE</p>
                <h2 class="mb-2">E-Book Recipe Collections</h2>
                <p class="text-muted mb-3">
                    Discover delicious recipes, explore new dishes, and manage
                    your recipe collections all in one place.
                </p>
                <a href="products.php" class="btn btn-primary">
                    <i class="bi bi-book me-1"></i> Explore Products
                </a>
            </div>
            <div class="col-md-4 text-center mt-4 mt-md-0">
                <i class="bi bi-journal-richtext text-primary"
                   style="font-size: 100px;"></i>
            </div>
        </div>
    </div>
</div>

<!-- Summary Cards -->
<div class="row g-3 mb-4">

    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="rounded bg-primary-subtle text-primary p-3 me-3">
                        <i class="bi bi-book-half fs-3"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Products</h6>
                        <h4 class="mb-0">4</h4>
                    </div>
                </div>
                <a href="products.php" class="btn btn-sm btn-outline-primary mt-3">
                    Manage Products
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="rounded bg-success-subtle text-success p-3 me-3">
                        <i class="bi bi-people-fill fs-3"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Customers</h6>
                        <h4 class="mb-0">3</h4>
                    </div>
                </div>
                <a href="customers.php" class="btn btn-sm btn-outline-success mt-3">
                    Manage Customers
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="rounded bg-warning-subtle text-warning p-3 me-3">
                        <i class="bi bi-person-badge-fill fs-3"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Staffs</h6>
                        <h4 class="mb-0">3</h4>
                    </div>
                </div>
                <a href="staffs.php" class="btn btn-sm btn-outline-warning mt-3">
                    Manage Staffs
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="rounded bg-info-subtle text-info p-3 me-3">
                        <i class="bi bi-receipt-cutoff fs-3"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Orders</h6>
                        <h4 class="mb-0">1</h4>
                    </div>
                </div>
                <a href="orders.php" class="btn btn-sm btn-outline-info mt-3">
                    Manage Orders
                </a>
            </div>
        </div>
    </div>

</div>

<!-- Featured Collections -->
<div class="card shadow-sm border-0 mb-4">
    <div class="card-body p-4">
        <h4 class="mb-1">
            <i class="bi bi-stars text-warning me-2"></i>
            Explore Our Collections
        </h4>
        <p class="text-muted mb-4">
            Find inspiration for your next homemade meal.
        </p>

        <div class="row g-3">

            <div class="col-md-6 col-lg-3">
                <div class="p-3 rounded bg-light h-100">
                    <i class="bi bi-egg-fried fs-2 text-primary"></i>
                    <h6 class="mt-3">Malaysian Traditional Recipes</h6>
                    <p class="text-muted small mb-0">
                        Discover traditional Malaysian favourites.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="p-3 rounded bg-light h-100">
                    <i class="bi bi-cake2 fs-2 text-danger"></i>
                    <h6 class="mt-3">Easy Desserts & Baking</h6>
                    <p class="text-muted small mb-0">
                        Explore sweet treats and baking ideas.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="p-3 rounded bg-light h-100">
                    <i class="bi bi-heart-pulse fs-2 text-success"></i>
                    <h6 class="mt-3">Healthy Everyday Meals</h6>
                    <p class="text-muted small mb-0">
                        Get ideas for balanced everyday meals.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="p-3 rounded bg-light h-100">
                    <i class="bi bi-clock fs-2 text-warning"></i>
                    <h6 class="mt-3">Quick & Easy Recipes</h6>
                    <p class="text-muted small mb-0">
                        Find meal ideas for busy days.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="card shadow-sm border-0">
    <div class="card-body p-4">
        <h4 class="mb-3">
            <i class="bi bi-lightning-charge-fill text-warning me-2"></i>
            Quick Actions
        </h4>

        <div class="d-flex flex-wrap gap-2">
            <a href="products.php" class="btn btn-outline-primary">
                <i class="bi bi-book me-1"></i> View Products
            </a>
            <a href="customers.php" class="btn btn-outline-success">
                <i class="bi bi-person-plus me-1"></i> View Customers
            </a>
            <a href="staffs.php" class="btn btn-outline-warning">
                <i class="bi bi-person-badge me-1"></i> View Staffs
            </a>
            <a href="orders.php" class="btn btn-outline-info">
                <i class="bi bi-cart me-1"></i> View Orders
            </a>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>