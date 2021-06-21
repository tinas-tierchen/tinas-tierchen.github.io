<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<div class="container">
    <div class="mt-4">
        <a href="index.html#arbeiten" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Zurück</a>
    </div>

    <h2 class="my-4 dancing-script"><?php echo htmlentities($title); ?></h2>
    <div class="my-4">
        <?php echo htmlentities($description); ?>
    </div>

    <div class="row">
<?php foreach ($items as $id => $item) { ?>
<?php if ($id > 0 and $id % 4 === 0) { ?>    </div><div class="row mt-4"><?php } ?>
        <div class="col mb-3">
            <div class="card">

                <?php if (is_array($item['src'])) { ?>

                <div id="carousel<?php echo $id; ?>" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php foreach($item['src'] as $imgId => $src) { ?>
                        <div class="carousel-item<?php if (0 === $imgId) echo ' active'; ?>">
                            <img class="d-block mx-auto mb-4" src="img_256/<?php echo $src; ?>" width="256" alt="<?php echo $item['name']; ?> - Bild <?php echo ($imgId + 1); ?>"/>
                        </div>
                        <?php } ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?php echo $id; ?>" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel<?php echo $id; ?>" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <?php } else { ?>
                <img class="d-block mx-auto mb-4" src="img_256/<?php echo $item['src']; ?>" width="256" alt="<?php echo $item['name']; ?>"/>
                <?php } ?>

                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlentities($item['name']); ?></h5>
                    <?php if (isset($item['description'])) { ?><p class="card-text"><?php echo htmlentities($item['description']); ?></p><?php } ?>
                </div>
            </div>
        </div>
<?php } ?>
    </div>

    <div class="mt-4">
        <a href="index.html#arbeiten" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Zurück</a>
    </div>
</div>
