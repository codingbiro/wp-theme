<?php get_header(); ?>

    <div id="home" class="container text-center my-5">
        <div class="jumbotron">
            <h1 class="display-4"><?php echo get_field("welcome_text")?></h1>
            <p class="lead"><?php echo get_field("front_page_message")?></p>
            <hr class="my-4">

            <p><?php echo get_field("front_page_text")?></p>
            <a class="btn btn-primary btn-lg" href="/about" role="button"><?php echo get_field("button_text")?></a>
        </div>

        <div id="showarrow" class="d-none d-md-block text-center position-absolute" style="height:30px; width:30px; left: 49%;"><a href="#features" ><img src="https://image.flaticon.com/icons/svg/127/127709.svg" class="img-fluid"></a></div>

        <div id="showcase" class="text-center badge badge-primary text-wrap pt-5" style="height: 2900px; width: 80%;">
            <h1 id="features" class="display-4" style="font-size: 2.2rem!important; padding-top: 60px;">Content goes here</h1>
            
            <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel" style="width: 50%; margin: auto;">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <?php
            $args = array( 
            'post_type' => 'attachment', 

            'post_mime_type' => 'image',
            'numberposts' => -1, 
            'post_status' => null, 
            'post_parent' => $post->ID 
            ); 
            $arrayxx = get_posts( $args );
            $arraysize = sizeof($arrayxx);
            ?>

            <div class="carousel-inner">
                <?php if( $arraysize > 0 ) while($arraysize > 0) :?>
            <div class="carousel-item <?php if($arraysize == sizeof($arrayxx)) : ?>active<?php endif;?>">
                    <img class="d-block w-100" src="<?php echo $arrayxx[$arraysize-1]->guid;?>" alt="Just a slide">
                </div>
                <?php $arraysize--; endwhile;?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
            </div>
    
            <h3 id="pricing" style="margin-top: 800px; padding-top: 60px;">Pricing</h3>
            <div class="spinner-border mt-5" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
<!-- id="<?php //the_ID();?>"
class="<?php //post_class();?>" -->