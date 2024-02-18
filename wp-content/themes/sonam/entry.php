<section class="border-top border-color-medium-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 text-center wow animate__fadeIn">
                    <h5 class="section-title wow animate__bounceIn">News & Events</h5>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 blog-content justify-content-center">
                    <ul class="blog-grid blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large justify-content-center d-flex">

                        <li class="grid-sizer"></li>
                        <!-- start blog item -->
    <?php
     $serch_title_data = isset($_GET['s']) ? $_GET['s'] : '';
     $selected_term_id = isset($_GET['term_data']) ? $_GET['term_data'] : '';

     	$arg = array(
	        'post_type' => 'events',
	        'posts_per_page' => -1,
	        'post_status' => 'publish',
	    );
	    
	    if(!empty($serch_title_data)){
	    	$arg['s'] = $serch_title_data;
	    };

	    if(!empty($selected_term_id)){
	    	$arg['tax_query'] = array(
		        	array(
		        		'taxonomy'	=>	'events_tax',
		        		'field'		=>	'term_id',
		        		'terms'		=>	$selected_term_id
		        	),
		        );
	    };

    	$events = new WP_Query($arg);

    if($events->have_posts()){
        while($events->have_posts()) : $events->the_post(); ?>
            <li class="grid-item wow animate__flipInY" data-wow-delay="0.1s">
                <div class="blog-post bg-white box-shadow-medium">
                    <div class="blog-post-image bg-dark-red">
                    	<?php 
                        	if(has_post_thumbnail( $post->ID )){ ?>
                        		<a href="<?php the_permalink(); ?>" title=""><?php echo get_the_post_thumbnail()?></a>
                        	<?php }else{ ?>
                        		<a href="<?php the_permalink(); ?>" title=""><img src="<?php echo get_template_directory_uri().'/images/news3.jpg'?>" alt=""></a>
                        	<?php } 

                            $term_obj_list = get_the_terms( $post->ID, 'events_tax');
                    		//$term_string = join(', ', wp_list_pluck( $term_obj_list, "name"));
                    		
                    		if($term_obj_list){
                    			foreach ($term_obj_list as $term_data) {
                    				$term_url = get_category_link($term_data->term_id);
                    				$term_name = $term_data->name; ?>

                        			<a href="<?php echo $term_url; ?>" class="blog-category alt-font"><?php echo $term_name; ?></a>
                        		<?php }
                        	} ?>                             
                    </div>
                    <div class="news-arrow btn btn-white btn-rounded"><i class="fas fa-arrow-right"></i>
                    </div>
                    <div class="post-details padding-3-rem-lr padding-2-half-rem-tb">
                        <p class="text-large news-date text-center margin-10px-bottom"><?php echo get_the_date( "j F, Y" ); ?></p>
                        <a href="<?php the_permalink(); ?>" class="news-title"><?php the_title(); ?></a>
                    </div>
                </div>
            </li>
	    <?php endwhile; 
	        wp_reset_postdata();
		}else{
	    	echo esc_html('Sorry, no posts matched your criteria.');
	}
?>

                    </ul>
                </div>
            </div>
        </div>
</section>