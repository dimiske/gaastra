<?php get_header(); ?>

<div class="clearfix"></div>

<?php if(is_search()){ ?>
    <div class="container gaastra-blog">
        <div class="row">
            <div class="col-md-8">
            
                <h1 class="entry_title list">Rezultatele căutării</h1>
    
<?php } ?>

<?php
if(is_front_page()){
    get_template_part('content', 'front');
}else{
    if(have_posts()){ 
        // Start the Loop.
        $i = 0;
        while(have_posts()){
            the_post();
            if(is_search()){
                 if(get_post_type() == 'gaastrablog'){
                    get_template_part('content', 'search');
                    $i += 1;
                 }
            }else{
                get_template_part('content', get_post_type());
            }
            //get_template_part('content', get_post_type());
        }
    }else{
        if(is_search()){
            get_template_part('content', 'noresult');
            $i = 1;
        }else{
            get_template_part('content', 'front');
        }
    }
    if($i == 0){
        get_template_part('content', 'noresult');
    }
}
?>

<?php if(is_search()){ ?>
            </div>
               
            <div class="col-md-4 side">
                <?php get_sidebar(); ?>
            </div>
            
            <script>
            jQuery('.blogpost-item img').addClass('img-responsive');
            </script>
            
        </div>   
    </div>
<?php } ?>

<?php get_footer(); ?>