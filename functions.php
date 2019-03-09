<?php
wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js', array ( 'jquery'), 1.1, true);
register_nav_menu('desktop', 'Desktop navigation menu');

function create_post_type() {
    register_post_type( 'about_type',
      array(
        'labels' => array(
          'name' => __( 'About Page' ),
          'singular_name' => __( 'Pin on About page' )
        ),
        'public' => true,
        'has_archive' => true,
      )
    );
  }
  add_action( 'init', 'create_post_type' );

/**
 * Create HTML list of nav menu items.
 * Replacement for the native Walker, using the description.
 *
 * @see    https://wordpress.stackexchange.com/q/14037/
 * @author fuxia
 */
class Description_Walker extends Walker_Nav_Menu
{
    /**
     * Start the element output.
     *
     * @param  string $output Passed by reference. Used to append additional content.
     * @param  object $item   Menu item data object.
     * @param  int $depth     Depth of menu item. May be used for padding.
     * @param  array|object $args    Additional strings. Actually always an instance of stdClass. But this is WordPress.
     * @return void
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 )
    {
        $classes     = empty ( $item->classes ) ? array () : (array) $item->classes;

        $class_names = join(
            ' '
        ,   apply_filters(
                'nav_menu_css_class'
            ,   array_filter( $classes ), $item
            )
        );
        
        $var = get_the_ID();

        $myclassnames = "nav-item";
        if($item->ID == 30 && $var != 2)
            $myclassnames = "nav-item active";
        
        if($item->ID == 9 && $var == 2)
            $myclassnames = "nav-item active";

        ! empty ( $class_names )
            and $class_names = ' class="'. $myclassnames . '"';
            // esc_attr( $class_names )
        
        
        $x = $item->ID - 8;
        if($item->ID != 30)
            $output .= "<li id='nav-$x' $class_names>";
        else
            $output .= "<li $class_names>";

        $attributes  = '';

        ! empty( $item->attr_title )
            and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
        ! empty( $item->target )
            and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
        ! empty( $item->xfn )
            and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
        ! empty( $item->url )
            and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';

        // insert description for top level elements only
        // you may change this
        $description = ( ! empty ( $item->description ) and 0 == $depth )
            ? '<small class="nav_desc">' . esc_attr( $item->description ) . '</small>' : '';

        $title = apply_filters( 'the_title', $item->title, $item->ID );

        $linkclasses = 'class="nav-link"';

        $item_output = $args->before
            . "<a $linkclasses $attributes>"
            . $args->link_before
            . $title
            . '</a> '
            . $args->link_after
            . $description
            . $args->after;

        // Since $output is called by reference we don't need to return anything.
        $output .= apply_filters(
            'walker_nav_menu_start_el'
        ,   $item_output
        ,   $item
        ,   $depth
        ,   $args
        );
    }
}

function theme_slug_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/icon.png);
            height:75px;
            width:320px;
            background-repeat: no-repeat;
            padding-bottom: 20px;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'theme_slug_login_logo' );

?>

