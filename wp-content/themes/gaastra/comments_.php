<?php
/**
 * Template for displaying Comments
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to twentyten_comment which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<div id="comments">
<?php 
if ( post_password_required() ) : ?>
    <p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'gaastra' ); ?></p>
    </div>

    <?php
    return;
endif;
?>

<?php
    // You can start editing here -- including this comment!
?>

<?php if ( have_comments() ) : ?>
    <h3 id="comments-title"><?php
    printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number(), 'gaastra' ),
    number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );
    ?></h3>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
    <div class="navigation">
        <div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'gaastra' ) ); ?></div>
        <div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'gaastra' ) ); ?></div>
    </div> <!-- .navigation -->
<?php endif; // check for comment navigation ?>

<ol class="commentlist">
    <?php
        wp_list_comments( array() );
    ?>
</ol>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
    <div class="navigation">
        <div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'gaastra' ) ); ?></div>
        <div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'gaastra' ) ); ?></div>
    </div>
<?php endif; ?>

<?php
/*
 * If there are no comments and comments are closed, let's leave a little note, shall we?
 * But we only want the note on posts and pages that had comments in the first place.
 */
if ( ! comments_open() && get_comments_number() ) : ?>
    <p class="nocomments"><?php _e( 'Comments are closed.' , 'gaastra' ); ?></p>
<?php endif;  ?>

<?php endif; // end have_comments() ?>

<?php comment_form(); ?>

</div>