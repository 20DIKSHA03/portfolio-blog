<?php
// Start session and include DB
session_start();
include("../config/db.php");

$msg = "";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

    if (!empty($title) && !empty($content)) {
        $stmt = $conn->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
        $stmt->bind_param("ss", $title, $content);

        if ($stmt->execute()) {
            $msg = "<div class='alert alert-success'>Post added successfully!</div>";
        } else {
            $msg = "<div class='alert alert-danger'>Error adding post. Please try again.</div>";
        }

        $stmt->close();
    } else {
        $msg = "<div class='alert alert-warning'>Please fill in all fields.</div>";
    }
}
?>

<?php include('../includes/header.php'); ?>

<div class="container py-5">
    <h2 class="mb-4 text-center">Add New Blog Post</h2>

    <?= $msg; ?>

    <form action="add_post.php" method="POST" class="mx-auto" style="max-width: 700px;">
        <div class="mb-3">
            <label for="title" class="form-label">Post Title:</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Enter post title" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Post Content:</label>
            <textarea name="content" id="content" rows="8" class="form-control" placeholder="Write your content here..." required></textarea>
        </div>

        <button type="submit" class="btn btn-primary w-100">Publish Post</button>
        <a href="../index.php" class="btn btn-secondary mt-3 w-100">Back to Home</a>
    </form>
</div>

<?php include('../includes/footer.php'); ?>