<?php get_header(); ?>
  
<div class="col-lg-12">
    <hr>
        <h2 class="intro-text text-center">Company
            <strong>blog</strong>
        </h2>
    <hr>
</div>

<?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
	 <div class="box">	
		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<h2 class="post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="mini">
	    			<?php echo get_the_post_thumbnail($postnew->ID, 'medium') ;?>
						</div>
							<small><?php the_time('j F Y'); ?></small>
	      				<?php the_author(); ?>
				<?php the_content('Читать далее ...'); ?>
			</div>
		</div>
	<?php } /* конец while */ ?>

	<div class="navigation">
		<div class="next-posts"><?php next_posts_link(); ?></div>
		<div class="prev-posts"><?php previous_posts_link(); ?></div>
	</div>

<?php
} // конец if
else 
	echo "<h2>Записей нет.</h2>";
?>

</div>
    
<?php get_footer(); ?>