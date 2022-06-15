<main class="container">
    <div class="cards d-flex row row-cols-5 justify-content-around">
    
    <?php foreach($discs as $disc) :?>
        <div class="card mx-2 my-4 d-flex ">
            <div class="img-album my-3">
                <img src="<?php echo $disc['poster'] ?>" alt="<?php echo $disc['title'] ?>">
            </div>
            <div class="info-album text-center">
                <p class="album-title my-2"><?php echo $disc['title']?></p>
                <p class="cantante my-1 "><?php echo $disc['author'] ?></p>
                <p class="anno-album"><?php echo $disc['year'] ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</main>