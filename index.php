<?php get_header(); ?>

    <div id="home" class="container text-center my-5">
        <div class="jumbotron">
            <h1 class="display-4"><?php echo get_field("welcome_text")?></h1>
            <p class="lead"><?php echo get_field("front_page_message")?></p>
            <hr class="my-4">
            <p><?php echo get_field("front_page_text")?></p>
            <a class="btn btn-primary btn-lg" href="/about" role="button"><?php echo get_field("button_text")?></a>
        </div>

        <div class="badge badge-primary text-wrap pt-5" style="height: 2100px; width: 80%;">
            <h1 id="features" class="display-4" style="font-size: 2.2rem!important; padding-top: 60px;">Content goes here</h1>
            <div class="spinner-border mt-5" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <h3 id="pricing" style="margin-top: 800px; padding-top: 60px;">Pricing</h3>
        </div>
    </div>
<?php get_footer(); ?>
<!-- id="<?php //the_ID();?>"
class="<?php //post_class();?>" -->