require('./bootstrap');
window.jQuery = window.$ = jQuery;

jQuery(
    (function($) {

        $(document).ready(() => {
            //call functions
        });

        $(document).ready( function() {
            $('.menu-toggle').click(function(e){
                e.preventDefault();
                $(this).toggleClass('open');
                $(this).text( $(this).text() == 'Menu' ? 'Close' : 'Menu' );
            });
        });

    })(jQuery)
);
