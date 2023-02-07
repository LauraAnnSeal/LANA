<?php 
/**
Template Name: Featured Artists page
Template Post Type: page
*/
?>


<?php get_header() ?>

<div class="container-fluid" id="header-banner">
    <h3><?php echo get_the_title() ?></h3>
</div>

<div class="container mb-3">
    <div class="row">

        <div class="col-12 col-md-6 col-lg-4">
            <label class="sr-only">Search</label>
            <div class="input-group mb-2 input-search">
                <input type="text" class="form-control shadow-none" placeholder="Search here...">
                <div class="input-group-end">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </div>

    </div>
</div>


<?php 
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
// args
$args = array(
    'numberposts'   => 1,
    'post_type'     => 'people',
    'paged'          => $paged,
);
// query
$the_query = new WP_Query( $args );
?>
<?php if( $the_query->have_posts() ): ?>
    <div class="container gx-5">
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php if(get_field('included_in_featured_artists')): ?>

            <div class="row single-result">
                
                <div class="col-12 col-md-6 col-lg-4 headshot" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">
                </div>
                
                <div class="col-12 col-md-6 col-lg-8 pt-3">
                    <h3><?php echo get_the_title() ?></h3>
                    <div class="location">
                        <h6><i class="fa-regular fa-location-dot"></i> <?php echo get_field('nationality')  ?></h6>
                    </div>
                    <div class="bio mt-3">
                        <!-- 
                                TRIM A WYSIWIG FIELD
                         -->
                        <?php
                        $bio = get_the_content();
                        if( !empty( $bio ) ):
                            $trimmed_text = wp_trim_excerpt_modified( $bio, 35 );
                            $last_space = strrpos( $trimmed_text, ' ' );
                            $modified_trimmed_text = substr( $trimmed_text, 0, $last_space );
                            echo $modified_trimmed_text . '...';
                        endif;                        
                        ?>
                    </div>
                    
                    <div class="links pb-3">
                        
                        <?php  if(get_field('artist_email')): ?>
                            <a href="mailto:<?php echo get_field('artist_email') ?>" target="_blank" class="btn btn-icon btn-sm btn-grey btn-sm"><i class="fa-solid fa-envelope"></i></a>
                        <?php endif; ?>
                        <?php  if(get_field('artist_instagram')): ?>
                            <a href="<?php echo get_field('artist_instagram') ?>" target="_blank" class="btn btn-icon btn-sm btn-grey btn-sm"><i class="fa-brands fa-instagram"></i></a>
                        <?php endif; ?>
                        <?php  if(get_field('artist_website')): ?>
                            <a href="<?php echo get_field('artist_website') ?>" target="_blank" class="btn btn-line btn-sm btn-grey btn-sm"><i class="fa-solid fa-arrow-pointer"></i> WEBSITE</a>
                        <?php endif; ?>
                        <a href="<?php echo get_the_permalink() ?>" class="btn btn-solid btn-orange">View Artist</a>
                        
                    </div>
                </div>
           </div>

            <?php endif; ?>
        <?php endwhile; ?>
            <?php wpbeginner_numeric_posts_nav(); ?>
        
    </div>
<?php endif; ?>
<?php wp_reset_query();   // Restore global post data stomped by the_post(). ?>

<script>
    const bios = document.querySelectorAll('.bio')
    bios.forEach(bio => {
        let contents = bios.innerText;
    })
</script>

<?php get_footer() ?>