                </main>
            </div>

            <div id="colophon">
                <div class="box">
                    <div class="container">
                        <div class="footer-widgets">
                            <?php get_template_part( 'template-parts/footer/footer' , 'widgets' ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p><?php echo sprintf( '%s %s', esc_html__( '&copy; 2020 All rights reserved.', 'winterchiropractor' ), get_bloginfo( 'title' ) ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .content-wrapper -->

    </div><!-- .container-wrapper -->

    <?php wp_footer(); ?>
</body>
</html>