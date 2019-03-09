function scrolljs(x) {
    for (var i = 1; i < 4; i++) {
        jQuery( "#nav-"+i ).removeClass( "active" );
    }

    jQuery( "#nav-"+x ).addClass( "active" );
}

var needed = $(window).height() - 360;
var arrow = needed + 330;
if(needed<0) needed = 0;

$('#showcase').css("margin-top", `${needed}px`);
$('#showarrow').css("top",`${arrow}px`)