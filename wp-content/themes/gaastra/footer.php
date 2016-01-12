    <div class="push"></div>
    </div><!-- wrapper end -->
    
    <div class="footer-gaastra">
        <div class="container">
            <div class="col-lg-5 col-md-5 footer-1">
                <div><a href="<?php echo site_url(); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/footer/logo-footer.jpg" alt="" /></a></div>
                <div class="footer-menu">
                    <span><a href="<?php echo site_url(); ?>/termeni-si-conditii">Termeni și condiții</a></span>
                    <span><a href="<?php echo site_url(); ?>/contact">Contact</a></span>
                    <span><a href="<?php echo site_url(); ?>/blog">Blog</a></span>
                </div>
            </div>
            
            <div class="col-lg-5 col-md-5 footer-2">
                <div>Fii primul care află noutățile Gaastra</div>
                <?php echo do_shortcode('[mc4wp_form id="255"]'); ?>
                <!--<div><input name="email" placeholder="Adresa de e-mail" class="form-input email-address" /></div>
                <div><input type="button" value="Abonează-te!" class="custom-button-footer"></div>-->
            </div> 
            
            <div class="col-lg-2 col-md-2 footer-3">
                <div>Urmărește-ne</div>
                <div class="logos">
                    <div class="fb"><a href="https://www.facebook.com/gaastra.ro" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/footer/logo-fb.jpg" alt="" /></a></div>
                    <div class="pint"><a href="https://www.pinterest.com/gaastraromania/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/footer/logo-pint.jpg" alt="" /></a></div>
                    <div class="insta"><a href="https://www.instagram.com/gaastra_romania/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/footer/logo-insta.jpg" alt="" /></a></div>
                </div>
                <div class="copyright">Gaastra &copy; <?php echo date('Y'); ?></br>Dezvoltat de <a href="http://fortech.ro" target="_blank">Fortech</a></div>
            </div>
        </div>
    </div>

    
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!--<script src="js/main.js"></script>-->
    <script>
        jQuery('table').addClass('table');
        jQuery('table td img, article.gaastrablog .entry_content img').addClass('img-responsive');
        jQuery('.blogpost-item img').addClass('img-responsive img-fluid');
        jQuery('.blogpost-item.pagination .page-numbers, .gaastra-blog #submit').addClass('button-link');
//        jQuery('a').click(function(){
//            return false;
//        });
    </script>
    <script>
    $jQuery(document).ready(function() {
    $jQuery('#contactCarousel').carousel({
        interval: false,
        pause: true
    })
}); 
    </script>
    <?php wp_footer(); ?>

</body>

</html>