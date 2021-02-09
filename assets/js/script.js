( function( $ ) {

    // Initialize the slick slider for Testimonial Section
    $(document).ready( function() {
        $( '.slider-container' ).slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            autoHeight: true,
            appendArrows: $('.paginator'),
            appendDots: '.slick-slider-dots',
            nextArrow: `<img class="arrow" src="${object_name.arrow_next}">`,
            prevArrow: `<img class="arrow" src="${object_name.arrow_prev}">`
        });

        // // Scroll Reveal
        ScrollReveal().reveal('.heading', {
            delay: 500,
            distance: '30px'
        });

        ScrollReveal().reveal('.content', {
            delay: 500,
            distance: '30px'
        });

        ScrollReveal().reveal('#our-services .service-image', {
            delay: 500,
            distance: '30px',
            origin: 'left'
        });

        ScrollReveal().reveal('#our-services .title', {
            delay: 500,
            distance: '30px',
            origin: 'right'
        });

        ScrollReveal().reveal('#our-partners .partner-image', {
            delay: 500,
            distance: '30px',
        });
    })

    // When the hamburger is click, show the menu by adding the class name 'show-menu'
    $( '.side-menu .hamburder-menu a' ).click( function(e) {
        e.preventDefault();
        $( '#primary-menu' ).toggleClass( 'show-menu' );
    });

    // When the close/X is click, hide the menu by removing the class name 'show-menu'
    $( '.close' ).click( function() {
        $( '#primary-menu' ).removeClass( 'show-menu' );
    });

    // When the 'Esc' is pressed in the keyboard, hide the menu by removing the class name 'show-menu'
    $(document).keydown(function (e) { 
        if (e.originalEvent.key === 'Escape') {
            $( '#primary-menu' ).removeClass( 'show-menu' );
        }
    });

})(jQuery)