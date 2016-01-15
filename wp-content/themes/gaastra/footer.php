    <div class="push"></div>
    </div><!-- wrapper end -->
    
    <div class="footer-gaastra lg">
        <div class="container">
            <div class="col-lg-4 col-md-4 footer-1">
                <div><a href="<?php echo site_url(); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/footer/logo-footer.jpg" alt="" /></a></div>
                <div class="footer-menu">
                    <span><a href="<?php echo site_url(); ?>/termeni-si-conditii">Termeni și condiții</a></span>
                    <span><a href="<?php echo site_url(); ?>/blog">Blog</a></span>
                    <span><a href="<?php echo site_url(); ?>/contact">Contact</a></span>
                </div>
            </div>
            
            <div class="col-lg-5 col-md-4 footer-2">
                <div class="label-input">Fii primul care află noutățile Gaastra!</div>
                <?php echo do_shortcode('[mc4wp_form id="255"]'); ?>
                <!--<input name="email" placeholder="Adresa de e-mail" class="form-input email-address" />
                <input type="button" value="Abonează-te!" class="custom-button-footer">-->
            </div> 
            
            <div class="col-lg-3 col-md-4 footer-3">
                <div class="text-left">Urmărește-ne</div>
                <div class="logos">
                    <div class="fb"><a href="https://www.facebook.com/gaastra.ro" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/facebook-icon.png" alt="" /></a></div>
                    <div class="pint"><a href="https://www.pinterest.com/gaastraromania/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/pinterest-icon.png" alt="" /></a></div>
                    <div class="insta"><a href="https://www.instagram.com/gaastra_romania/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/instagram-icon.png" alt="" /></a></div>
                </div>
                <div class="copyright text-left">Gaastra &copy; <?php echo date('Y'); ?></br>Dezvoltat de <a href="http://fortech.ro" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/footer/fortech-logo.png"  height="10" /></a></div>
            </div>
        </div>
    </div>
    
    <div class="footer-gaastra sm">
        <div class="container">
            <div class="col-sm-7 col-md-7 col-lg-7 footer-1">
                <div class="logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/footer/logo-footer.jpg" alt="" /></a></div>
                <div class="footer-menu">
                    <span><a href="<?php echo site_url(); ?>/termeni-si-conditii">Termeni și condiții</a></span>
                </div>
            </div>
            
            <div class="col-sm-5 col-md-5 col-lg-5 footer-3">
                <div class="logos">
                    <a href="https://www.facebook.com/gaastra.ro" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/facebook-icon.png" alt="" /></a>
                    <a href="https://www.pinterest.com/gaastraromania/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/pinterest-icon.png" alt="" /></a>
                    <a href="https://www.instagram.com/gaastra_romania/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/instagram-icon.png" alt="" /></a>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 footer-2">
                <div class="label-input">Fii primul care află noutățile Gaastra!</div>
                <?php echo do_shortcode('[mc4wp_form id="255"]'); ?>
                <!--<input name="email" placeholder="Adresa de e-mail" class="form-input email-address" />
                <input type="button" value="Abonează-te!" class="custom-button-footer">-->
                <div class="copyright">Gaastra &copy; <?php echo date('Y'); ?></br>Dezvoltat de <a href="http://fortech.ro" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/footer/fortech-logo.png"  height="10" /></a></div>
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
        jQuery('.form-group input, .form-group textarea').addClass('form-input');
        jQuery('.form-group input#submit').removeClass('form-input');
    </script>
    <script>
        $jQuery(document).ready(function() {
            $jQuery('.carousel.slide').carousel({
                interval: false,
                pause: true
            })
        }); 
    </script>
    <?php wp_footer(); ?>

</body>

</html>