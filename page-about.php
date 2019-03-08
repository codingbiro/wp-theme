<?php $counter = 2;?>

<?php get_header(); ?>
<?php query_posts('post_type=post') ?>
<div class="container my-5">
        <div class="card-columns">
        <!-- Start the Loop. -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <!-- Test if the current post is in category 3. -->
        <!-- If it is, the div box is given the CSS class "post-cat-three". -->
        <!-- Otherwise, the div box is given the CSS class "post". -->

        <?php //if ( in_category( '3' ) ) : ?>
            <!-- <div class="post-cat-three"> -->
        <?php //else : ?>
            <!-- <div class="post"> -->
        <?php //endif; ?>


        <!-- Display the Title as a link to the Post's permalink. -->

        <!--<h2><a href="<?php //the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php //the_title_attribute(); ?>"></a></h2>-->

        <!-- Display the Post's content in a div box. -->
        <?php
        $args = array( 
        'post_type' => 'attachment', 

        'post_mime_type' => 'image',
        'numberposts' => -1, 
        'post_status' => null, 
        'post_parent' => $post->ID 
        ); 
        $arrayxx = get_posts( $args );
        ?>
        
        <!-- <pre><?php //print_r($arrayxx); ?></pre> -->

        <!-- Display a comma separated list of the Post's Categories. -->

        <!-- <p class="postmetadata"><?php //_e( 'Posted in' ); ?> <?php //the_category( ', ' ); ?></p> -->
            <?php if(! $arrayxx[0]->guid) : ?>
                <div class="card p-3 <?php if($counter % 3 == 0) echo "mt-5"?>">
                    <blockquote class="blockquote mb-0 card-body">
                        <p><?php the_excerpt(); ?></p>
                        <footer class="blockquote-footer">
                            <small class="text-muted">
                                <?php the_time('F jS, Y'); ?> by <cite title="Source Title"><?php the_author(); ?>
                            </cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>
            <?php else : ?>
                <div class="card <?php if($counter % 3 == 0) echo ""?>">
                    <img src="<?php echo $arrayxx[0]->guid;?>" class="card-img-top" alt="Kitten placeholder">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        
                        <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

                        <p class="card-text"><small class="text-muted"><?php the_time('F jS, Y'); ?> by <?php the_author(); ?></small></p>
                    </div>
                </div>
            <?php endif; ?>
            <!-- <div class="card p-3">
                <blockquote class="blockquote mb-0 card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="blockquote-footer">
                        <small class="text-muted">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                    </footer>
                </blockquote>
            </div>
            <div class="card">
                <img src="http://placekitten.com/200/200" class="card-img-top" alt="Kitten placeholder">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional
                        content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card bg-primary text-white text-center p-3">
                <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                    <footer class="blockquote-footer text-white">
                        <small>
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                    </footer>
                </blockquote>
            </div>
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="http://placekitten.com/240/240" class="card-img-top" alt="Kitten placeholder">
            </div>
            <div class="card p-3 text-right">
                <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="blockquote-footer">
                        <small class="text-muted">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                    </footer>
                </blockquote>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is another card with title and supporting text below. This card has some
                        additional content to make it slightly taller overall.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div> -->
    
    <!-- Stop The Loop (but note the "else:" - see next line). -->

    <?php $counter++; endwhile; else : ?>

        </div>
    </div>
    <!-- The very first "if" tested to see if there were any Posts to -->
    <!-- display.  This "else" part tells what do if there weren't any. -->
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>


    <!-- REALLY stop The Loop. -->
    <?php endif; ?>
<?php get_footer(); ?>