<?php 

// the beers

?>

<?php get_header(); ?>

    <div class="l-sidebar">
        <ul class="l-int-nav">
        	
        	<?php
        		$args = array(
        				'post_type' => 'beer',
        				'orderby' => 'menu_order'
        			);
        		$beers = new WP_Query( $args ); 
        	?>

        	<?php if ( $beers->have_posts() ) : ?>
        		<?php while ( $beers->have_posts() ) : $beers->the_post(); ?>
	        		<li>
	        			<a href="#<?php echo $post->post_name; ?>" class="int-nav-item">
	        				<?php the_title(); ?>
	        			</a>
	        		</li>
        	  	<?php endwhile; ?>
      
        	<?php else:  ?>
 
        	<?php endif; ?>
        </ul>
		<?php get_template_part('location-panel'); ?>
    <div class="l-main-content">
    	<?php if ( $beers->have_posts() ) : ?>
    		<?php while ( $beers->have_posts() ) : $beers->the_post(); ?>
        	<article  id="<?php echo $post->post_name; ?>" class="beer-panel clearfix">
            	<section class="beer-info">
            		<div class="beer-title-con">
            			<p class="beer-title-intro">
            				Beer Name:
            			</p>
            			<h1 class="beer-title">
            				<?php the_title(); ?>
            			</h1>
            		</div>
            		<div class="badge-abv-con clearfix">
            			<div class="badge-con">
            				<?php
            					$image = get_field('badge');
            					if( !empty($image) ): ?>
            						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            					<?php endif;
            				?>
            			</div>
            			<div class="abv-con">
            				<div class="abv-con-inner clearfix">
            					<p class="abv-intro">
            						ABV:
            					</p>
            					<p class="abv">
									<?php
										if ( get_field('abv') ) {
											the_field('abv');
										}
									?><span class="small">%</span>
            					</p>
            				</div>
            			</div>
            		</div>
            		<section class="beer-style">
            			<h2>Style:</h2> 
            			<p><?php
            				if ( get_field('style') ) {
            					the_field('style');
            				}
            			?></p>
            		</section>
            		<section class="beer-what-like">
            			<h2>What's it like?:</h2> 
            			<p><?php
            				if ( get_field('whats_it_like') ) {
            					the_field('whats_it_like');
            				}
            			?></p>
            		</section>
            		<section class="beer-tell-me-more">
            			<h2>Tell me more:</h2> 
            			<?php
            				if ( get_field('tell_me_moore') ) {
            					the_field('tell_me_moore');
            				}
            			?>
            		</section>
            	</section>
            	<figure class="beer-main-image">
            		<?php
	            		if ( has_post_thumbnail() ) {
	            			the_post_thumbnail('full');
	            		} 
	            	?>
            	</figure>
            	<div class="beer-musical-pairing">
            		<div class="beer-musical-pairing-inner clearfix">
            			<h2>Musical Pairing:</h2> 
            			<p><?php
            				if ( get_field('musical_pairings') ) {
            					the_field('musical_pairings');
            				}
            			?></p>	
            		</div>
            	</div>
	        </article>	
    	  	<?php endwhile; ?>
  
    	<?php else:  ?>

    	<?php endif; ?>
        
    </div>    
<?php get_footer(); ?>