    <div class="footer-gaastra p-a-0">
    
    </div>
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!--<script src="js/main.js"></script>-->
    <script>
        jQuery('table').addClass('table');
        jQuery('table td img').addClass('img-responsive');
        jQuery('.blogpost-item img').addClass('img-responsive img-fluid');
        jQuery('.blogpost-item.pagination .page-numbers').addClass('button-link');
//        jQuery('a').click(function(){
//            return false;
//        });
    </script>
    <script>
    $(document).ready(function() {
    $('#Carousel').carousel({
        interval: false,
        pause: true
    })
}); 
    </script>
    <?php wp_footer(); ?>

</body>

</html>



