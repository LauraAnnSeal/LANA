<?php 
/**
Template Name: Map page
Template Post Type: page
*/
?>


<?php get_header() ?>

<div class="container-fluid" id="header-banner">
    <h3><?php echo get_the_title() ?></h3>
</div>

<div class="container">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi eius dignissimos, hic unde autem, doloribus minus similique ducimus, veritatis eligendi perferendis minima recusandae quasi voluptatibus. Illum natus sed ab dolorum.</p>
</div>

<div class="section"></div>


<!-- start: map bounds -->
<div class="container-fluid" id="map-bounds">




<!-- start: map -->
<div id="map">
    <svg xmlns="http://www.w3.org/2000/svg" width="100vw" height="80vh" viewBox="0 0 1200 1230">
        
        <g id="matrix-group" transform="matrix(1 0 0 1 0 0)">
            <?php echo get_template_part('template-parts/svg', 'map') ?>
        </g>
    </svg>
</div>
<!-- end: map -->




<!-- start: location info div -->
<div id="map-location" class="info region border-lana-teal">
    <div class="col-2 d-flex">
            <div class="btn btn-icon btn-yellow btn-sm">5</div>
    </div>
    <div class="col-10 text-white">
        <h6>Africa whole</h6>
        <a href="" class="btn btn-solid btn-sm btn-teal">view results</a>
    </div>
</div>
<!-- end: location info div -->









<!-- start: category selection div -->
<div id="map-category" class="info region border-lana-teal">
    <div class="col-12 text-white">
        <small-heading>CATEGORY CHOSEN:</small-heading>
        <h6 class="text-lana-yellow">Contemporary Art Network</h6>
        <div class="dropdown">
            <button type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Select a Category
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li class="active">Africa</li>
                <li>America</li>
                <li>South East Asia</li>
            </ul>
        </div>
    </div>
</div>
<!-- end: category selection div -->



</div>
<!-- end map bounds -->


<script src="<?php echo get_template_directory_uri() ?>/js/svg-pan-zoom.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/basic-map.js"></script>
<?php get_footer() ?>