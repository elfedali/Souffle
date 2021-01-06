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
                <?php foreach ($cards as $item) : ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <?php souffle_image($item['icon'], 'large', get_bloginfo('name')) ?>
                                </div>
                                <?= $item['description'] ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div><!-- row-->
        </div>
    </div>
<?php endif; ?>