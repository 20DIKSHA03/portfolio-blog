<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>My Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom CSS (Fixed Path) -->
    <link rel="stylesheet" href="/portfolio-blog/css/style.css" />

    <!-- Dark Mode Toggle Script (Fixed Path) -->
    <script src="/portfolio-blog/js/script.js" defer></script>
</head>
<body id="mainBody">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <!-- Updated: Brand Link -->
        <a class="navbar-brand" href="/portfolio-blog/index.php">📝 My Blog</a>

        <div class="collapse navbar-collapse mt-2 mt-lg-0" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <!-- Updated: Home Link -->
                    <a class="nav-link" href="/portfolio-blog/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <!-- Updated: Add Post Link -->
                    <a class="nav-link" href="/portfolio-blog/admin/add_post.php">Add Post</a>
                </li>
            </ul>

            <form class="d-flex align-items-center me-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search" />

                <!-- DARK MODE TOGGLE BUTTON -->
                <button type="button" id="darkModeToggle" title="Toggle Dark Mode" class="btn btn-outline-light p-2">
                    <span id="darkIcon">🌙</span>
                </button>
            </form>
        </div>
    </div>
</nav>

<!-- Bootstrap Bundle JS (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
