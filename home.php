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
                <i class="bi bi-journal-richtext text-primary display-1"></i>
                <p class="text-muted small mt-2 mb-0">
                    Your Favourite Recipes, All in One Place
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Recipe Carousel -->
<div class="card shadow-sm border-0 mb-4">
    <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">

        <!-- Carousel Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#recipeCarousel"
                    data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>

            <button type="button" data-bs-target="#recipeCarousel"
                    data-bs-slide-to="1" aria-label="Slide 2"></button>

            <button type="button" data-bs-target="#recipeCarousel"
                    data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Carousel Images -->
        <div class="carousel-inner rounded">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1603133872878-684f208fb84b?w=1200"
                     class="d-block w-100"
                     alt="Malaysian traditional food"
                     style="height: 350px; object-fit: cover;">

                <div class="carousel-caption d-block bg-dark bg-opacity-50 rounded p-3">
                    <h3 class="fw-bold">Malaysian Traditional Recipes</h3>
                    <p class="mb-0">
                        Discover the authentic flavours of Malaysian cuisine.
                    </p>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=1200"
                     class="d-block w-100"
                     alt="Delicious chocolate cake"
                     style="height: 350px; object-fit: cover;">

                <div class="carousel-caption d-block bg-dark bg-opacity-50 rounded p-3">
                    <h3 class="fw-bold">Desserts & Baking</h3>
                    <p class="mb-0">
                        Make every moment sweeter with delicious treats.
                    </p>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=1200"
                     class="d-block w-100"
                     alt="Healthy fresh salad"
                     style="height: 350px; object-fit: cover;">

                <div class="carousel-caption d-block bg-dark bg-opacity-50 rounded p-3">
                    <h3 class="fw-bold">Healthy Everyday Meals</h3>
                    <p class="mb-0">
                        Enjoy fresh, nutritious and balanced meals every day.
                    </p>
                </div>
            </div>

        </div>

        <!-- Previous Button -->
        <button class="carousel-control-prev" type="button"
                data-bs-target="#recipeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"
                  aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <!-- Next Button -->
        <button class="carousel-control-next" type="button"
                data-bs-target="#recipeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"
                  aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

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
<div class="card shadow-sm border-0 mb-4">
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
