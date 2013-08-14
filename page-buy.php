<?php
/*
Template Name: Buy
*/
	
	// javascript
	wp_dequeue_script('jquery');
        wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js');
	wp_enqueue_script( 'buyScript', get_template_directory_uri() . '/js/buy.js', 'jquery');
        // css
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css');
        wp_enqueue_style( 'buyPage', get_template_directory_uri() . '/css/buy.css');


    global $query_string;
    query_posts( 'category_name=buy&order=ASC&posts_per_page=-1' );

    get_header(); ?>

		<div id="primary">
			<div id="container" class="buy">                        
				<div id="item-column"> 
					<?php while ( have_posts() ) : the_post(); ?>
						<?php $color = get_post_meta(get_the_ID(), 'color-image');?>
						<?php $type = get_post_meta(get_the_ID(), 'type'); ?>                                               
                                    
						<div class="item-<?php echo get_the_ID();?> <?php echo $type[0]; ?>">
							<a href="#">
		               	<img class="item-preview" src="<?php echo $color[0];?>" class="Colour" alt="Image Alt tag"/>
							</a>
						</div>
					<?php endwhile; ?>
				</div>
				<div id="single-item-column"> 

					<?php query_posts( 'category_name=buy&order=ASC' ); ?>
					<?php $first = true; $hiddenClass = "show-me";?>
					<?php while ( have_posts() ) : the_post(); ?>
						
                                                <?php $cartCode = ''; ?>
                                                <?php $cartCode = get_post_meta(get_the_ID(), 'cart-code'); ?>
						<?php $template = get_post_meta(get_the_ID(), 'template-image');?>

						<div class="item-box item-<?php echo get_the_ID();?> <?php echo $hiddenClass?>"> 
		            	<img src="<?php echo $template[0];?>" alt="Image Alt tag">
							<div class="item-caption">
								<div class="item-name"><?php the_title(); ?></div>
								<div class="item-description"><?php the_content(); ?></div>
								<div class="item-colors">
									<span class="color-box blue"></span>
									<span class="color-box green"></span>
									<span class="color-box lightGreen"></span>
									<span class="color-box magenta"></span>
									<span class="color-box orange"></span>
                                                                        <span class="color-box pink"></span>
                                                                        <span class="color-box purple"></span>
                                                                        <span class="color-box yellow"></span>
								</div>
                                                                <div class="buy-button">
                                                                    <?php //var_dump($cartCode); ?>
									<?php echo $cartCode[0]; ?>
								</div>
                                                             
							</div>
						</div>
						<?php if($first) { $hiddenClass = "hide-me"; $first = false;} ?>
					<?php endwhile; ?>
				</div> <!-- single-item -->
			</div><!-- #container -->
		</div><!-- #primary -->

<?php get_footer(); ?>
