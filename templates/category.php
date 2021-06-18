<div class="container">
    <div class="mt-4">
        <a href="index.html#arbeiten" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Zurück</a>
    </div>

    <h2 class="mt-4 dancing-script"><?php echo htmlentities($title); ?></h2>
    <div>
        <?php echo htmlentities($description); ?>
    </div>

    <div class="row mt-4">
<?php foreach ($items as $id => $item) { ?>
<?php if ($id > 0 and $id % 4 === 0) { ?>    </div><div class="row mt-4"><?php } ?>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="d-block mx-auto mb-4" src="img_256/<?php echo $item['src']; ?>" width="256" alt="<?php echo $item['name']; ?>"/>
                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlentities($item['name']); ?></h5>
                    <p class="card-text"><?php echo htmlentities($item['description']); ?></p>
                </div>
            </div>
        </div>
<?php } ?>
    </div>

    <div class="mt-4">
        <a href="index.html#arbeiten" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Zurück</a>
    </div>
</div>
