<?php
/**
 * Template Name: Home Page
 * 
 * Custom page template for Home Page
 */
get_header();

// Variables

/** About Andrew Hull */
$ajh_header = ( get_field( 'ajh_heading' ) !== '' ) ? get_field( 'ajh_heading' ) : 'Your Title Here';
$ajh_description = get_field( 'ajh_description' );

/** Our Services */
$os_heading = ( get_field( 'os_heading' ) !== '' ) ? get_field( 'os_heading' ) : 'Your Title Here';
$os_services = get_field( 'os_services' );

/** What People Are Saying */
$wpas_heading = ( get_field( 'wpas_heading' ) !== '' ) ? get_field( 'wpas_heading' ) : 'Your Title Here';
$wpas_testimonials = get_field( 'wpas_testimonials' );

/** Our Trusted Partners */
$otp_heading = ( get_field( 'otp_heading' ) !== '' ) ? get_field( 'otp_heading' ) : 'Your Title Here';
$otp_partners = get_field( 'otp_partners' );

?>

<?php if ( $ajh_description !== '' ) : // check if the desciprtion is not empty ?>
    <!-- Output the ACF Values -->
    <div id="about-andrew">
        <div class="container">
            <div class="boxed">
                <div class="row">
                    <div class="col-12">
                        <div class="heading">
                            <h2><?php echo $ajh_header; ?></h2>
                        </div>
                        <div class="content">
                            <?php echo $ajh_description; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if ( $os_services ) : // Check if the ACF Field is empty or not (Boolean) ?>
    <!-- Output the ACF Values -->
    <div id="our-services">
        <div class="container">
            <div class="boxed">
                <div class="row">
                    <div class="col-12">
                        <div class="heading">
                            <h2><?php echo $os_heading ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach( $os_services as $service ) : ?>
                        <div class="col-6">
                            <div class="image-title">
                                <div class="service-image">
                                    <img src="<?php echo $service['image']['url'] ?>" alt="<?php echo $service['image']['alt'] ?>">
                                </div>
                                <div class="title">
                                    <h3><?php echo $service['title'] ?></h3>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
<?php endif; ?>

<?php if ( $wpas_testimonials ) : // Check if the ACF Field is empty or not (Boolean) ?>
    <!-- Output the ACF Values -->
    <div id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2><?php echo $wpas_heading; ?></h2>
                    </div>
                </div>
            </div>
            <div class="slider-container">
                <?php foreach( $wpas_testimonials as $testimonial ) : ?>
                    <div class="slides">
                        <div class="stars">
                            <img src="<?php echo $testimonial['stars']['url']; ?>" alt="<?php echo $testimonial['image']['alt']; ?>">
                        </div>
                        <div class="testimony">
                            <?php echo $testimonial['description']; ?>
                        </div>
                        <div class="name">
                            <span><?php echo $testimonial['name']; ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="paginator">
                <div class="slick-slider-dots"></div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if ( $otp_partners ) : // Check if the ACF Field is empty or not (Boolean) ?>
    <!-- Output the ACF Values -->
    <div id="our-partners">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2><?php echo $otp_heading ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach( $otp_partners as $partner ) : ?>
                    <div class="col-3">
                        <div class="partner-image">
                            <img src="<?php echo $partner['url']; ?>" alt="<?php echo $partner['alt']; ?>">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php get_footer(); ?>