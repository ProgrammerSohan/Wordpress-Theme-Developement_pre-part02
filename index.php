<?php get_header(); ?>
   
   <?php if(have_posts()) {?>
     <?php while(have_posts()) { ?>
    <?php the_post(); ?>
    <h2>
        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute();?>"><?php the_title() ?></a>
    </h2> 
    <!-- h2 cut kore save dibo o pore ctrl+z dia save dia browser check -->
    <div>
        <?php _themename_post_meta(); ?>
    </div>
     <div>
        <?php the_excerpt(); ?>
     </div>
        <?php _themename_readmore_link();?>
        <?php } ?>
         <?php the_posts_pagination(); ?>
        <?php } else {?>
            <p><?php esc_html_e('Sorry, no posts matched on your criteria.', '_themename'); ?></p>
    <?php } ?>
    
    <?php 
        $city = 'london';
        echo esc_html__('Your city is ', '_themename' ) . $city;

        printf(
            esc_html( 'Your city is %s'. '_themename' ),
            $city
        );
    ?>

<?php get_footer(); ?>