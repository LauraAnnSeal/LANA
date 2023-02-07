<?php get_header() ?>


<div class="container-fluid" id="header-banner">
    <h3>FEATURED ARTIST</h3>
</div>

<div class="container">
    <div class="row d-flex justify-content-center align-items-start flex-wrap">
        <div class="col-12 text-center">
            <h1 class="pb-2"><?php the_title() ?></h1>
        </div>
        <div id="artist-headshot" class="col-12 col-lg-6  pb-4">
            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
        </div>
        <div class="col-12 col-md-8 col-lg-5 offset-lg-1 mt-5">
            <?php the_content(); ?>
            <div>
            <?php  if(get_field('artist_email')): ?>
                <a href="mailto:<?php echo get_field('artist_email') ?>" target="_blank" class="btn btn-icon btn-sm btn-grey btn-sm"><i class="fa-solid fa-envelope"></i></a>
            <?php endif; ?>
            <?php  if(get_field('artist_instagram')): ?>
                <a href="<?php echo get_field('artist_instagram') ?>" target="_blank" class="btn btn-icon btn-sm btn-grey btn-sm"><i class="fa-brands fa-instagram"></i></a>
            <?php endif; ?>
            <?php  if(get_field('artist_website')): ?>
                <a href="<?php echo get_field('artist_website') ?>" target="_blank" class="btn btn-line btn-sm btn-grey btn-sm"><i class="fa-solid fa-arrow-pointer"></i> Website</a>
            <?php endif;?>
            <?php if( have_rows('other_links') ): ?>
                <?php while( have_rows('other_links') ): the_row(); ?>
                        <a href="<?php the_sub_field('link');?>" target="_blank" class="btn btn-line btn-sm btn-grey btn-sm"><i class="fa-solid fa-arrow-pointer"></i> <?php the_sub_field('link_to_where'); ?></a>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="section"></div>

<div class="container-fluid bg-dark py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-lana-yellow"><h2>Performances</h2></div>
            <div class="col-12">
                <a class="subtle-white" href=""><h4>Totem</h4></a>
                <a class="subtle-white" href=""><h4>Performance name</h4></a>
                <a class="subtle-white" href=""><h4>Performance name</h4></a>
            </div>
        </div>
    </div>
</div>

<div class="section"></div>

<div class="container">
    <div class="text-center"><h3>Image gallery</h3></div>
        <div class="carousel">
            <div class="carousel-slider">
              <div class="carousel-slide"><img src="https://via.placeholder.com/800x350/0bf?text=image1" alt="Image 1"></div>
              <div class="carousel-slide"><img src="https://via.placeholder.com/800x350/fb0?text=image2" alt="Image 2"></div>
              <div class="carousel-slide"><img src="https://via.placeholder.com/800x350/b0f?text=image3" alt="Image 3"></div>
              <div class="carousel-slide"><img src="https://via.placeholder.com/800x350/0bf?text=image4" alt="Image 4"></div>
              <div class="carousel-slide"><img src="https://via.placeholder.com/800x350/0fb?text=image5" alt="Image 5"></div>
              <div class="carousel-slide"><img src="https://via.placeholder.com/800x350/f0b?text=image6" alt="Image 6"></div>
            </div>
          </div>
</div>


<?php get_footer() ?>