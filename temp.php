
<?php 
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$posts = get_posts(array(
    'posts_per_page'    => 2,
    'post_type'         => 'people'
));

if( $posts ): ?>
    
<div class="container gx-5">
        
    <?php foreach( $posts as $post ): 
        
        setup_postdata( $post );

        if(get_field('included_in_featured_artists')):
        
        ?>

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

           

           

    
    <?php 
    endif;
endforeach; 
?>
<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
    <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
    
    </div>
    
    <?php wp_reset_postdata(); ?>

<?php endif; ?>