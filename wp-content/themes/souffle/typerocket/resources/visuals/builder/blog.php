<?php
extract($data);
// WP_Query arguments
$args = array(
    'post_type'              => array('post'),
    'posts_per_page'         => 3,
    'order'                  => 'DESC',
);

// The Query
$query = new WP_Query($args);



?>
<?php if (!$hide) : ?>
    <div class="builder-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-headline text-center">
                        <h2><?php echo $headline; ?></h2>
                    </div>
                </div>
            </div> <!-- row -->
            <div class="row">
                <?php

                // The Loop
                if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post(); ?>

                        <div class="col-md-4" id="post-<?php the_ID(); ?>">
                            <div class="post-title">
                                <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                            </div>
                            <div class="post-title">
                                <h2><?= get_the_title(); ?></h2>
                            </div>
                            <div class="post-content">
                                <?php $trimmed = wp_trim_words(get_the_content(), 20, "..."); ?>
                                <?php echo $trimmed; ?>
                            </div>
                            <div class="post-link">
                                <a href="<?php echo  get_permalink(); ?>"> <?php echo __('Read more', 'souffle') ?></a>
                            </div>
                        </div>
                <?php endwhile;
                endif;  ?>
            </div><!-- row-->
        </div>
    </div>
<?php endif;
// Restore original Post Data
wp_reset_postdata();
