<?php
/*
Plugin Name:XP Property Listings Shortcodes

*/
/* Start Adding Functions Below this Line */


// Create a shortcode for property listing in Sankt-Peterburg */
  

function peterburg_function() {
   ob_start();
  $query = new WP_Query( array(
        'post_type'      => 'nedvishimost',
        'order'          => 'DESC',
        'post_status'    => 'publish',
        'meta_key'       => 'gorod',
	    'meta_value'     => array('Sankt-Peterburg'),
        'posts_per_page' => 3
    ) );


 if ($query->have_posts()) : while ($query->have_posts()): $query->the_post();

 echo

 '<div class="media">
 
	<div class="media-body">
		<h4>
			<a href="' . get_permalink($recent["ID"]) . '">' . get_the_title($post->ID) .'</a>
		</h4>
		<p> '. get_the_content($post->ID) .' </p>
	</div>
</div>' ;

    endwhile;
    endif;

    wp_reset_postdata();
    return ob_get_clean();
}

add_shortcode('peterburg', 'peterburg_function');

// Create a shortcode for property listing in Sankt-Peterburg with thumbs*/
  

function peterburg_full_function() {
   ob_start();
  $query = new WP_Query( array(
        'post_type'      => 'nedvishimost',
        'order'          => 'DESC',
        'post_status'    => 'publish',
        'meta_key'       => 'gorod',
	    'meta_value'     => array('Sankt-Peterburg'),
        'posts_per_page' => 3
    ) );


 if ($query->have_posts()) : while ($query->have_posts()): $query->the_post();

 echo

 '<div class="media">
 ' .get_the_post_thumbnail($post_id, 'thumbnail', array( 'class' => 'align-self-start mr-3' )) . '
  
	<div class="media-body">
		<h4>
			<a href="' . get_permalink($recent["ID"]) . '">' . get_the_title($post->ID) .'</a>
		</h4>
		<p> '. get_the_content($post->ID) .' </p>




               
	</div>
</div>' ;

    endwhile;
    endif;

    wp_reset_postdata();
    return ob_get_clean();
}

add_shortcode('peterburg_full', 'peterburg_full_function');


// Create a shortcode for property listing in Moscow 


function moscow_function() {
    ob_start();

    $query = new WP_Query( array(
        'post_type'      => 'nedvishimost',
        'order'          => 'DESC',
        'post_status'    => ' publish',
        'meta_key'       => 'gorod',
	    'meta_value'     => array('Moscow'),
        'posts_per_page' => 3
    ) );


if ($query->have_posts()) : while ($query->have_posts()): $query->the_post();

 echo

'<div class="media">
 
	<div class="media-body">
		<h4>
			<a href="' . get_permalink($recent["ID"]) . '">' . get_the_title($post->ID) .'</a>
		</h4>
		<p> '. get_the_content($post->ID) .' </p>
	</div>
</div>' ;

    endwhile;
    endif;

    wp_reset_postdata();
    return ob_get_clean();
}
add_shortcode( 'moscow', 'moscow_function' );


// Create a shortcode for property listing in Moscow with thumbs


function moscow_full_function() {
    ob_start();

    $query = new WP_Query( array(
        'post_type'      => 'nedvishimost',
        'order'          => 'DESC',
        'post_status'    => ' publish',
        'meta_key'       => 'gorod',
	    'meta_value'     => array('Moscow'),
        'posts_per_page' => 3
    ) );


if ($query->have_posts()) : while ($query->have_posts()): $query->the_post();

 echo

'<div class="media">
 ' .get_the_post_thumbnail($post_id, 'thumbnail', array( 'class' => 'align-self-start mr-3' )) . '
  
	<div class="media-body">
		<h4>
			<a href="' . get_permalink($recent["ID"]) . '">' . get_the_title($post->ID) .'</a>
		</h4>
		<p> '. get_the_content($post->ID) .' </p>


                
	</div>
</div>' ;

    endwhile;
    endif;

    wp_reset_postdata();
    return ob_get_clean();
}
add_shortcode( 'moscow_full', 'moscow_full_function' );


/* Stop Adding Functions Below this Line */
?>
