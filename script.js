function scrolljs(x) {
    for (var i = 1; i < 4; i++) {
        jQuery( "#nav-"+i ).removeClass( "active" );
    }

    jQuery( "#nav-"+x ).addClass( "active" );
}