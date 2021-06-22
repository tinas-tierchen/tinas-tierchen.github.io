<script src="bootstrap.min.js"></script>


<div id="page-title" class="position-absolute m-3 dancing-script">Tinas Tierchen</div>


<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/tentakel.jpeg" class="d-block w-100" alt="Purpur &amp; Grün Tentakel"/>
        </div>
        <div class="carousel-item">
            <img src="img/yoshi.jpeg" class="d-block w-100" alt="Yoshi"/>
        </div>
        <div class="carousel-item">
            <img src="img/kakteen.jpeg" class="d-block w-100" alt="Kakteen"/>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="container">
    <h2 id="arbeiten" class="my-4 dancing-script">Meine Arbeiten</h2>

    <div class="row">
        <?php foreach ($items as $id => $item) { ?>
        <?php if ($id > 0 and $id % 4 === 0) { ?>    </div><div class="row mt-4"><?php } ?>
        <div class="col mb-3">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="mt-4 dancing-script"><a href="<?php echo $item['href']; ?>"><?php echo htmlentities($item['name']); ?></a></h3>
                </div>
                <a href="<?php echo $item['href']; ?>"><img class="d-block mx-auto mb-4" src="img_256/<?php echo $item['src']; ?>" width="256" alt="<?php echo htmlentities($item['name']); ?>"/></a>

                <?php if (isset($item['description'])) { ?>
                <div class="card-body">
                    <p class="card-text"><?php echo htmlentities($item['description']); ?></p>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
