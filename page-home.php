<?php
/*
Template Name: Home
*/

    loadCustomJSCSS();


    global $query_string;
    query_posts( $query_string . '&category_name=home&order=ASC' );
    
    get_header(); ?>

<ul id="filters">
  <li><a href="#" data-filter="*">All</a></li>
  <li><a href="#" data-filter=".Necklace">Necklace</a></li>
  <li><a href="#" data-filter=".Bracelet">Bracelet</a></li>
  <li><a href="#" data-filter=".Ring">Ring</a></li>
</ul>

		<div id="primary">
			<div id="container" role="main">                        
                            
                                <?php while ( have_posts() ) : the_post(); ?>

                                    <?php $size = get_post_meta(get_the_ID(), 'size'); ?>
                                    <?php $type = get_post_meta(get_the_ID(), 'type'); ?>
                                    <?php $color = get_post_meta(get_the_ID(), 'color-image');?>
                                    <?php $grey = get_post_meta(get_the_ID(), 'grey-image'); ?>
                                    <?php $link = get_post_meta(get_the_ID(), 'link'); ?>
                            
                                    <?php if($link[0] == '') : $link[0] = get_permalink(); endif; ?>
                            
                                    <div class="item <?php echo $size[0];?> white <?php echo $type[0]?>">	
                                        <img onclick="location.href='<?php echo $link[0];?>'" src="<?php echo $color[0];?>" class="Colour" alt="Image Alt tag"/>
                                        <img onclick="location.href='<?php echo $link[0];?>'" src="<?php echo $grey[0];?>" class="Black-White" alt="Image Alt tag"/>
                                    </div>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>
