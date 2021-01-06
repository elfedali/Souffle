<?php
extract($data);
?>
<?php if (!$hide) : ?>
    <div class="builder-horizontal">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-headline text-center">
                        <h2><?php echo $headline; ?></h2>
                    </div>
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col d-flex align-items-center justify-content-center">
                    <?php foreach ($items as $item) : ?>
                        <div class="feat-horizontal">
                            <div>
                                <?php souffle_image($item['icon'], 'large', $item['title']) ?>
                            </div>
                            <h5><?= $item['title'] ?></h5>
                            
                        </div>
                    <?php endforeach; ?>
                </div>
            </div><!-- row-->
        </div>
    </div>
<?php endif; ?>