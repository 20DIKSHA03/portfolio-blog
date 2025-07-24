<?php
include("config/db.php");
include("includes/header.php");

// Get the post ID from the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $post_id = $_GET['id'];

    $sql = "SELECT * FROM posts WHERE id = $post_id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $post = mysqli_fetch_assoc($result);
    } else {
        echo '<div class="container mt-5"><div class="alert alert-danger">Post not found.</div></div>';
        include("includes/footer.php");
        exit;
    }
} else {
    echo '<div class="container mt-5"><div class="alert alert-danger">Invalid post ID.</div></div>';
    include("includes/footer.php");
    exit;
}
?>

<div class="container mt-3">
    <div class="post-single card shadow p-4">
        <h1 class="post-title mb-3"><?php echo htmlspecialchars($post['title']); ?></h1>
        <p class="post-date text-muted mb-4">📅 <?php echo date("F d, Y | h:i A", strtotime($post['created_at'])); ?></p>
        <div class="post-content">
            <?php echo nl2br(htmlspecialchars($post['content'])); ?>
        </div>
        <a href="index.php" class="btn btn-secondary mt-4">← Back to Home</a>
    </div>
</div>

<?php include("includes/footer.php"); ?>
