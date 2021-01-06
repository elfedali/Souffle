<?php
extract($data);
?>
<?php if (!$hide) : ?>
    <div class="builder-carousel">


        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php $first = true; ?>
                <?php foreach ($carousel as $item) : ?>
                    <div class="carousel-item<?= $first == true ? ' active' : '' ?>" style="max-height: 500px;">
                        <?php souffle_image($item['image'], '', get_bloginfo('name')) ?>
                    </div>
                    <?php $first = false; ?>
                <?php endforeach; ?>

                <div class="carousel-content-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="carousel-title"><?php echo $headline ?></h1>
                                <div class="carousel-content"><?php echo $content ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
<?php endif; ?>