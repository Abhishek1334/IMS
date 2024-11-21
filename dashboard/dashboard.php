<?php
session_start();
$username = $_SESSION['username'] ?? 'Guest';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShelfWise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Header and Navigation Bar -->
    <header class="header">
    <a class="navbar-brand d-flex align-items-center" href="#">
                <i class='bx bx-box text-primary fs-3 me-2'></i>
                <span class="fw-bold">ShelfWise</span>
            </a>
        <nav>
            <button class="nav-button">DASHBOARD</button>
            <a href="../auth/logout.php" class="nav-button">LOGOUT</a>
        </nav>
    </header>

    <!-- Greeting Section -->
    <section class="greeting">
        <h2>Hi,<?= strtoupper(htmlspecialchars($username)) ?></h2>
    </section>

    <!-- Unified box for sidebar and product list -->
    <div class="unified-container">
        <!-- Sidebar -->
        <div class="sidebar">
    <a href="#" onclick="loadContent('productList')">PRODUCT LIST</a>
    <a href="#" onclick="loadContent('suppliersList')">SUPPLIERS LIST</a>
    <a href="#" onclick="loadContent('lowStockItems')">LOW STOCK ITEMS</a>
    <a href="#" onclick="loadContent('outOfStockItems')">OUT OF STOCK ITEMS</a>
    <a href="#" onclick="loadContent('orderHistory')">ORDER HISTORY</a>
</div>


        <div id="product-list-container" class="product-list-container"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   
        <script>
    function loadContent(section) {
        const container = document.getElementById('product-list-container');
        let url = '';

        // Map the section to the respective PHP file
        switch (section) {
            case 'productList':
                url = 'pages/product-list.php';
                break;
            case 'suppliersList':
                url = 'pages/suppliers-list.php';
                break;
            case 'lowStockItems':
                url = 'pages/low-stock-items.php';
                break;
            case 'outOfStockItems':
                url = 'pages/out-of-stock-items.php';
                break;
            case 'orderHistory':
                url = 'pages/order-history.php';
                break;
            default:
                container.innerHTML = '<p>Invalid section.</p>';
                return;
        }

        // Fetch content from the PHP file
        fetch(url)
            .then(response => response.text())
            .then(data => {
                container.innerHTML = data;
            })
            .catch(error => {
                container.innerHTML = '<p>Error loading content.</p>';
                console.error('Error:', error);
            });
    }

    </script>
</body>
</html>
