<?php include 'inc/header.php'; ?>
<?php include 'inc/data.php'; ?>

<div class="container mt-4">

    <div id="libraryCarousel" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-inner">
            <?php
            $carouselImages = [
                "pexels-technobulka-2908984.jpg",
                "download (1).webp",
                "211785.jpg",
              
            ];
            $active = "active";
            foreach ($carouselImages as $img): ?>
                <div class="carousel-item <?= $active; ?>">
                    <img src="images/<?= $img; ?>" class="d-block w-100" height="400">
                </div>
            <?php $active = ""; endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#libraryCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#libraryCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

  
    <h2 class="mt-5">Featured Books</h2>
    <div class="row">
        <?php foreach ($books as $id => $book): ?>
            <div class="col-md-4 mt-3">
                <div class="card">
                    <img src="images/<?= $book['img']; ?>" class="card-img-top" height="250">
                    <div class="card-body">
                        <h5 class="card-title"><?= $book['title']; ?></h5>
                        <a href="details.php?id=<?= $id; ?>" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>

<?php include 'inc/footer.php'; ?>
