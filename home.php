<?php
ob_start();
?>

<style>
    /* Page animation */
    .home-page {
        animation: fadeIn 0.8s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(15px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Welcome banner */
    .welcome-banner {
        background: linear-gradient(135deg, #f3e8ff, #e0f2fe);
        border-radius: 15px;
        overflow: hidden;
    }

    .welcome-icon {
        font-size: 110px;
        color: #6f42c1;
        animation: floatBook 3s ease-in-out infinite;
    }

    @keyframes floatBook {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-12px);
        }
    }

    /* Summary cards */
    .summary-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .summary-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12) !important;
    }

    /* Recipe carousel */
    .recipe-slide {
        min-height: 250px;
        border-radius: 12px;
        padding: 35px;
        display: flex;
        align-items: center;
        overflow: hidden;
    }

    .recipe-slide h3 {
        font-weight: 700;
    }

    .recipe-slide-icon {
        font-size: 100px;
        animation: floatBook 3s ease-in-out infinite;
    }

    .recipe-malaysian {
        background: linear-gradient(135deg, #fff0d9, #ffd6a5);
        color: #753d12;
    }

    .recipe-dessert {
        background: linear-gradient(135deg, #ffe4ec, #fbc2eb);
        color: #84265c;
    }

    .recipe-healthy {
        background: linear-gradient(135deg, #dcfce7, #bbf7d0);
        color: #166534;
    }

    .recipe-quick {
        background: linear-gradient(135deg, #dbeafe, #c7d2fe);
        color: #3730a3;
    }

    /* Recipe collection cards */
    .collection-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .collection-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .collection-icon {
        transition: transform 0.3s ease;
    }

    .collection-card:hover .collection-icon {
        transform: scale(1.15) rotate(-5deg);
    }

    /* Respect reduced-motion settings */
    @media (prefers-reduced-motion: reduce) {
        .home-page,
        .welcome-icon,
        .recipe-slide-icon {
            animation: none;
        }

        .summary-card,
        .collection-card,
        .collection-icon {
            transition: none;
        }
    }
</style>

<div class="home-page">

    <!-- Welcome Section -->
    <div class="card shadow border-0 mb-4 welcome-banner">
        <div class="card-body p-4 p-lg-5">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <span class="badge bg-primary mb-3">
                        YOUR RECIPE COLLECTION
                    </span>

                    <h2 class="mb-3 fw-bold">
                        Welcome to RECIPETARY!
                    </h2>

                    <p class="text-muted mb-4">
                        From traditional Malaysian favourites to delicious
                        desserts, discover recipes that inspire your next
                        homemade meal.
                    </p>

                    <a href="products.php" class="btn btn-primary btn-lg">
                        <i class="bi bi-book-half me-2"></i>
                        Explore Our E-Books
                    </a>

                    <a href="orders.php" class="btn btn-outline-primary btn-lg ms-2">
                        <i class="bi bi-cart me-2"></i>
                        View Orders
                    </a>
                </div>

                <div class="col-md-4 text-center mt-4 mt-md-0">
                    <i class="bi bi-journal-richtext welcome-icon"></i>
                    <p class="fw-bold text-primary mt-2 mb-0">
                        Cook. Discover. Enjoy.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Summary Cards -->
    <div class="row g-3 mb-4">

        <div class="col-md-6 col-xl-3">
            <div class="card shadow-sm border-0 h-100 summary-card">
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
            <div class="card shadow-sm border-0 h-100 summary-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="rounded bg-success-subtle text-success p-3 me-3">
                            <i class="bi bi-people-fill fs-3"></i>
                        </div>
                        <div>
                            <h6 class="text-muted mb-1">Customers</h6>
                            <h4 class="mb-0">1</h4>
                        </div>
                    </div>
                    <a href="customers.php" class="btn btn-sm btn-outline-success mt-3">
                        Manage Customers
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card shadow-sm border-0 h-100 summary-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="rounded bg-warning-subtle text-warning p-3 me-3">
                            <i class="bi bi-person-badge-fill fs-3"></i>
                        </div>
                        <div>
                            <h6 class="text-muted mb-1">Staffs</h6>
                            <h4 class="mb-0">1</h4>
                        </div>
                    </div>
                    <a href="staffs.php" class="btn btn-sm btn-outline-warning mt-3">
                        Manage Staffs
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card shadow-sm border-0 h-100 summary-card">
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

    <!-- Featured Recipe Carousel -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body p-4">
            <h4 class="mb-1">
                <i class="bi bi-stars text-warning me-2"></i>
                Featured Recipe Collections
            </h4>
            <p class="text-muted mb-4">
                Find your next favourite recipe in our featured collections.
            </p>

            <div id="recipeCarousel"
                 class="carousel slide"
                 data-bs-ride="carousel"
                 data-bs-interval="4000">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#recipeCarousel"
                            data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>

                    <button type="button" data-bs-target="#recipeCarousel"
                            data-bs-slide-to="1"
                            aria-label="Slide 2"></button>

                    <button type="button" data-bs-target="#recipeCarousel"
                            data-bs-slide-to="2"
                            aria-label="Slide 3"></button>

                    <button type="button" data-bs-target="#recipeCarousel"
                            data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                </div>

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="recipe-slide recipe-malaysian">
                            <div class="row align-items-center w-100">
                                <div class="col-8">
                                    <span class="badge bg-dark mb-3">
                                        TRADITIONAL FAVOURITES
                                    </span>
                                    <h3>Malaysian Traditional Recipes</h3>
                                    <p>
                                        Celebrate local flavours with recipes
                                        inspired by Malaysian favourites.
                                    </p>
                                    <a href="products.php"
                                       class="btn btn-dark mt-2">
                                        Explore Collection
                                    </a>
                                </div>
                                <div class="col-4 text-center">
                                    <i class="bi bi-egg-fried recipe-slide-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="recipe-slide recipe-dessert">
                            <div class="row align-items-center w-100">
                                <div class="col-8">
                                    <span class="badge bg-danger mb-3">
                                        SOMETHING SWEET
                                    </span>
                                    <h3>Easy Desserts & Baking</h3>
                                    <p>
                                        Discover sweet treats, baking ideas,
                                        and desserts to share with everyone.
                                    </p>
                                    <a href="products.php"
                                       class="btn btn-danger mt-2">
                                        Explore Collection
                                    </a>
                                </div>
                                <div class="col-4 text-center">
                                    <i class="bi bi-cake2 recipe-slide-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="recipe-slide recipe-healthy">
                            <div class="row align-items-center w-100">
                                <div class="col-8">
                                    <span class="badge bg-success mb-3">
                                        FEEL GOOD FOOD
                                    </span>
                                    <h3>Healthy Everyday Meals</h3>
                                    <p>
                                        Get inspired to prepare balanced meals
                                        for your everyday routine.
                                    </p>
                                    <a href="products.php"
                                       class="btn btn-success mt-2">
                                        Explore Collection
                                    </a>
                                </div>
                                <div class="col-4 text-center">
                                    <i class="bi bi-heart-pulse recipe-slide-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="recipe-slide recipe-quick">
                            <div class="row align-items-center w-100">
                                <div class="col-8">
                                    <span class="badge bg-primary mb-3">
                                        SAVE TIME
                                    </span>
                                    <h3>Quick & Easy Recipes</h3>
                                    <p>
                                        Find simple meal ideas for busy days
                                        without making cooking complicated.
                                    </p>
                                    <a href="products.php"
                                       class="btn btn-primary mt-2">
                                        Explore Collection
                                    </a>
                                </div>
                                <div class="col-4 text-center">
                                    <i class="bi bi-clock recipe-slide-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <button class="carousel-control-prev" type="button"
                        data-bs-target="#recipeCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"
                          aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button"
                        data-bs-target="#recipeCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark rounded-circle p-3"
                          aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
        </div>
    </div>

    <!-- Explore Collections -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body p-4">
            <h4 class="mb-1">
                <i class="bi bi-grid-fill text-primary me-2"></i>
                Explore Our Collections
            </h4>
            <p class="text-muted mb-4">
                There is something for every food lover.
            </p>

            <div class="row g-3">

                <div class="col-md-6 col-lg-3">
                    <div class="p-3 rounded bg-light h-100 collection-card">
                        <i class="bi bi-egg-fried fs-2 text-primary collection-icon"></i>
                        <h6 class="mt-3">Malaysian Traditional Recipes</h6>
                        <p class="text-muted small mb-3">
                            Discover traditional Malaysian favourites.
                        </p>
                        <a href="products.php"
                           class="small text-primary text-decoration-none fw-bold">
                            View Products <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="p-3 rounded bg-light h-100 collection-card">
                        <i class="bi bi-cake2 fs-2 text-danger collection-icon"></i>
                        <h6 class="mt-3">Easy Desserts & Baking</h6>
                        <p class="text-muted small mb-3">
                            Explore sweet treats and baking ideas.
                        </p>
                        <a href="products.php"
                           class="small text-danger text-decoration-none fw-bold">
                            View Products <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="p-3 rounded bg-light h-100 collection-card">
                        <i class="bi bi-heart-pulse fs-2 text-success collection-icon"></i>
                        <h6 class="mt-3">Healthy Everyday Meals</h6>
                        <p class="text-muted small mb-3">
                            Get ideas for balanced everyday meals.
                        </p>
                        <a href="products.php"
                           class="small text-success text-decoration-none fw-bold">
                            View Products <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="p-3 rounded bg-light h-100 collection-card">
                        <i class="bi bi-clock fs-2 text-warning collection-icon"></i>
                        <h6 class="mt-3">Quick & Easy Recipes</h6>
                        <p class="text-muted small mb-3">
                            Find meal ideas for busy days.
                        </p>
                        <a href="products.php"
                           class="small text-warning text-decoration-none fw-bold">
                            View Products <i class="bi bi-arrow-right"></i>
                        </a>
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

            <p class="text-muted">
                Manage your store using the shortcuts below.
            </p>

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

</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>