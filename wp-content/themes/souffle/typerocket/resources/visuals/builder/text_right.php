<?php
extract($data);
?>
<?php if (!$hide) : ?>
    <div class="builder-cards">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-headline text-center">
                        <h2><?php echo $headline; ?></h2>
                    </div>
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-md-6">
                    <?php souffle_image($image, 'large', get_bloginfo('name')) ?>
                </div>
                <div class="col-md-6">
                    <?= $content ?>
                </div>
            </div><!-- row-->
        </div>
    </div>
<?php endif; ?>