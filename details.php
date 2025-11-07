<?php include 'inc/header.php'; ?>
<?php include 'inc/data.php'; ?>

<?php
$id = $_GET['id'] ?? null;
if (!$id || !isset($books[$id])) {
    header("Location: index.php");
    exit;
}
$book = $books[$id];
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <img src="images/<?= $book['img']; ?>" class="img-fluid">
        </div>
        <div class="col-md-8">
            <h2><?= $book['title']; ?></h2>
            <p><strong>Author:</strong> <?= $book['author']; ?></p>
            <p><?= $book['desc']; ?></p>
            <a href="index.php" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>

<?php include 'inc/footer.php'; ?>
