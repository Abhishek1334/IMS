<?php
session_start();
$username = $_SESSION['username'] ?? 'Guest';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShelfWise - Smart Inventory Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/styles.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <i class='bx bx-box text-primary fs-3 me-2'></i>
                <span class="fw-bold">ShelfWise</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-outline-primary me-2" href="auth/login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="auth/register.php">Get Started</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">
                        Smart Inventory Management
                        <span class="text-primary">Made Simple</span>
                    </h1>
                    <p class="lead mb-4">
                        Transform your inventory management with real-time tracking, automated reordering, and powerful analytics. Start managing your inventory smarter, not harder.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="auth/register.php" class="btn btn-primary btn-lg">
                            Start Free
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&q=80&w=1200" 
                         alt="Inventory Dashboard" 
                         class="img-fluid rounded-4 shadow-lg">
                </div>
            </div>
        </div>
    </header>

    <!-- Features Section -->
    <section id="features" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Why Choose ShelfWise?</h2>
                <p class="lead text-muted">Everything you need to manage your inventory efficiently</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 mb-3">
                                <i class='bx bx-bar-chart text-primary fs-3'></i>
                                <h3 class="h5 fw-bold">Real-time Analytics</h3>

                            </div>
                            <p class="text-muted">Get instant insights into your inventory performance with detailed analytics and reports.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 mb-3">
                                <i class='bx bx-refresh text-primary fs-3'></i>
                                <h3 class="h5 fw-bold">Automated Reordering</h3>
                            </div>
                            
                            <p class="text-muted">Set up automatic reordering when stock levels reach your specified threshold.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 mb-3">
                                <i class='bx bx-mobile-alt text-primary fs-3'></i>
                                <h3 class="h5 fw-bold">Mobile Access</h3>
                            </div>
                            
                            <p class="text-muted">Manage your inventory on the go with our responsive mobile application.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="display-6 fw-bold mb-3">Ready to optimize your inventory?</h2>
                    <p class="lead mb-lg-0">Join thousands of businesses already using ShelfWise.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="auth/register.php" class="btn btn-light btn-lg">Get Started Now</a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/src/main.js"></script>
</body>
</html>
