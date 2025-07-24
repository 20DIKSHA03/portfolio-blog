<?php
include("config/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Portfolio Blog</title>

    <!-- Bootstrap CSS CDN (optional, for styling) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Your custom CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Dark mode toggle JS -->
    <script src="js/script.js" defer></script>
</head>
<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>📚 My Blog</h1>
            <!-- Dark mode toggle button -->
            <button id="darkModeToggle" title="Toggle Dark Mode">
                <span id="darkIcon">🌙</span>
            </button>
        </div>

        <?php
        $sql = "SELECT * FROM posts ORDER BY created_at DESC";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0):
        ?>
            <div class="row">
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card post-card h-100">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h5>
                                <p class="card-text post-snippet">
                                    <?php echo substr(strip_tags($row['content']), 0, 100); ?>...
                                </p>
                                <p class="mt-auto post-date"><small>📅 <?php echo date("M d, Y", strtotime($row['created_at'])); ?></small></p>
                                <a href="view_post.php?id=<?php echo $row['id']; ?>" class="btn btn-readmore mt-2">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <div class="alert alert-info text-center">No posts found!</div>
        <?php endif; ?>
    </div>
</body>
</html>