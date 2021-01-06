<?php
extract($data);
?>
<?php if (!$hide) : ?>
    <div class="builder-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-headline text-center">
                        <h2><?php echo $headline; ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <?php foreach ($left_items as $item) : ?>
                        <div class="feat feat-left mb-4">
                            <h3><?= $item['title'] ?></h3>
                            <div><?= $item['description'] ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- col-lg-4 -->
                <div class="col-lg-4 text-center">
                    <?php souffle_image($image, 'large', get_bloginfo('name')) ?>
                </div>
                <!-- col-lg-4 -->
                <div class="col-lg-4">
                    <?php foreach ($right_items as $item) : ?>
                        <div class="feat feat-right mb-4">
                            <h3><?= $item['title'] ?></h3>
                            <div><?= $item['description'] ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- col-lg-4 -->

            </div><!-- block content-->
        </div>
    </div>
<?php endif; ?>