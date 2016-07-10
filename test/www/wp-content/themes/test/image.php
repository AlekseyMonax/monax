<?php /* Template Name: Фотогаларея */ ?>
<?php get_header();?>
<div class="row">
<div class="box">
<div class="col-lg-12">	
                  
<?php
	
		$pages = get_pages(array('child_of'=>$post->ID));
		foreach($pages as $postnew){
			setup_postdata($postnew);
			echo '<div class="photo">'.get_the_post_thumbnail($postnew->ID, 'thumbnail').'</div><br><a class="photo" href="'.get_permalink($postnew). '">' . get_the_title($postnew) .'</a><br>';
		}
		wp_reset_postdata();
?>

</div>
</div>
</div>
</div>
<?php get_footer(); ?>
