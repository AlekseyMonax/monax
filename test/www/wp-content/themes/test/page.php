<?php get_header(); ?>
    
    <?php if ( is_front_page() ) {?>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <?php dynamic_sidebar( 'text2' ); ?>
                    <hr class="visible-xs">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                   <?php dynamic_sidebar( 'text3' ); ?>
                </div>
            </div>
        </div>
    <?php } ?>

    <?php if (is_page('13') ) {?>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                   <?php dynamic_sidebar( 'text5' ); ?>
                </div>
            </div>
        </div>
    <?php }?>


    <?php  if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if ( is_front_page() ) { ?>
                <?php } ?>
                     <div class="row">
                        <div class="box">
                            <div class="col-lg-12">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </article>
    <?php endwhile; ?>

</div>

<?php get_footer(); ?>