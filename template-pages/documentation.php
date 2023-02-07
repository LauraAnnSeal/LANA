<?php 
/**
Template Name: Documentation page
Template Post Type: page
*/
?>


<?php get_header() ?>

<!-- fonts -->
<div class="bg-light py-5">
<div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-lana-grey">Heading 1</h1>
                <h1>Heading 1</h1>
                <h2>Heading 2</h2>
                <h3>Heading 3</h3>
                <h4>Heading 4</h4>
                <h5>Heading 5</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, totam soluta id unde eum assumenda reprehenderit! Asperiores voluptas aut similique modi quas itaque, commodi quam nesciunt quibusdam? A, laudantium quidem?</p>
                <p class="bolder">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, deleniti laborum vero, suscipit voluptatibus corporis odit esse dolorum harum veritatis quidem labore illum quam dignissimos tenetur alias nemo dicta. Totam!</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="region">
                    <h2>Region H2</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi animi voluptatibus eius repudiandae odit molestiae sit incidunt ut tempore reprehenderit? Cumque iusto voluptatum veniam accusamus saepe nulla sapiente, tenetur quas.</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="info region border-lana-teal text-lana-teal">
                    <div class="col-3 d-flex">
                        <div class="btn btn-icon btn-teal"><i class="fa-solid fa-info"></i></div>
                    </div>
                    <div class="col-9">
                        <p class="text-lana-teal bolder">
                            Click on any highlighted Location to view results.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- buttons -->
<div class="py-5">
<div class="container my-5">
        <div class="row my-5">
            <div class="col-12">


                <h2>Clear buttons</h2>
            </div>
            <div class="col-12 col-md-4">
                <a href="" class="btn btn-clear btn-lg btn-blue"><i class="fa-solid fa-circle"></i> blue lg</a>
            </div>
            <div class="col-12 col-md-4">
                <a href="" class="btn btn-clear btn-orange"><i class="fa-solid fa-circle"></i>  orange</a>
            </div>
            
            <div class="col-12 col-md-4">
                <a href="" class="btn btn-clear btn-sm"><i class="fa-solid fa-square-arrow-up-right"></i> neutral sm</a>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-12">


                <h2>Solid buttons</h2>
            </div>
            <div class="col-12 col-md-4">
                <a href="" class="btn btn-solid btn-teal btn-lg"> <i class="fa-solid fa-arrow-pointer"></i>teal lg</a>
            </div>
            <div class="col-12 col-md-4">
                <a href="" class="btn btn-solid btn-white"> <i class="fa-solid fa-arrow-pointer"></i>neutral</a>
            </div>
            <div class="col-12 col-md-4">
                <a href="" class="btn btn-solid btn-sm btn-blue">blue sm</a>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-12">


                <h2>Line buttons</h2>
            </div>
            <div class="col-12 col-md-4">
                <a href="" class="btn btn-line btn-lg"> <i class="fa-solid fa-arrow-pointer"></i>Neutral LG</a>
                <a href="" class="btn btn-icon btn-orange btn-lg"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <div class="col-12 col-md-4">
                <a href="" class="btn btn-line btn-blue"> <i class="fa-solid fa-arrow-pointer"></i>Blue</a>
                <a href="" class="btn btn-icon btn-blue"><i class="fa-solid fa-power-off"></i></a>
            </div>
            <div class="col-12 col-md-4">
                <a href="" class="btn btn-line btn-sm btn-teal">Teal Small</a>
                <a href="" class="btn btn-icon btn-teal btn-sm"><i class="fa-solid fa-check"></i></a>
            </div>

        </div>
    </div>
</div>


<!-- forms -->
<div class="bg-light py-5">
<div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2>Search form</h2>
            </div>
        </div>
        <div class="row">

            <div class="col-10 col-md-6">
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

<hr>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2>Select dropdown</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="dropdown">
                    <button type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Select a Region
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
    </div>

    <hr>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2>Form</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-box">
                    <div class="form-section-1">
                        <h5>Form</h5>
                        <h4 class="text-lana-teal mb-3">Form Type</h4>
                        <div class="dropdown">
                            <button type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Select a form type
                              <i class="fa-solid fa-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li class="active">Form 1</li>
                              <li>Form 2</li>
                              <li>Form 3</li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-section-2">
                        <?php echo do_shortcode('[contact-form-7 id="14" title="Main Contact Form"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php get_footer() ?>