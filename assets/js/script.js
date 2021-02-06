( function( $ ) {
    // Initialize the slick slider for Testimonial Section
    $(document).ready( function() {
        $( '.slider-container' ).slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            appendArrows: $('.paginator'),
            appendDots: '.slick-slider-dots',
            nextArrow: '<img class="arrow" src="http://localhost/winterchiropractor_wp/wp-content/uploads/2021/02/next-icon.svg">',
            prevArrow: '<img class="arrow" src="http://localhost/winterchiropractor_wp/wp-content/uploads/2021/02/prev-icon.svg">'
        });

        // Scroll Reveal
        ScrollReveal().reveal('.heading', {
            delay: 500,
            distance: '30px'
        });

        ScrollReveal().reveal('.content', {
            delay: 700,
            distance: '30px'
        });

        ScrollReveal().reveal('#our-services .service-image', {
            delay: 700,
            distance: '30px',
            origin: 'left'
        });

        ScrollReveal().reveal('#our-services .title', {
            delay: 700,
            distance: '30px',
            origin: 'right'
        });

        ScrollReveal().reveal('#testimonials .stars', {
            delay: 700,
            distance: '30px',
        });
        
        ScrollReveal().reveal('#testimonials .testimony', {
            delay: 1200,
            distance: '30px',
        });

        ScrollReveal().reveal('#testimonials .name', {
            delay: 1400,
            distance: '30px',
        });

        ScrollReveal().reveal('#testimonials .paginator', {
            delay: 1600,
            distance: '30px',
        });

        ScrollReveal().reveal('#our-partners .partner-image', {
            delay: 700,
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