<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Parittran
 */

    $content = get_the_content();
    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 

    if($featured_img_url){
        $thum = $featured_img_url;
    }else{
        $thum = 'https://via.placeholder.com/500x350.png?text=No+Image';
    }
?>

<div class="col-md-6 mb-4">
    <div class="blog-standard-content">
        <div class="news-block-two">
            <div class="inner-box">
                <figure class="image-box">
                    <a href="<?php echo get_the_permalink();?>">
                        <img src="<?php echo $thum;?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>">
                    </a>
                </figure>
                <div class="lower-content">
                    <span class="post-date"><?php echo get_the_date( 'j. M' );?></span>
                    <h3><a href="<?php echo get_the_permalink();?>"><?php echo get_the_title(); ?></a></h3>
                    <ul class="post-info clearfix">
                        <li><i class="icon-15"></i>
                            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                                <?= get_the_author_meta('display_name'); ?>
                            </a>
                        </li>
                        <li>
                            <i class="icon-16"></i>
                            <a href="<?php echo get_comment_link(); ?>">
                                <?php echo get_comments_number();?> Comnt
                            </a>
                        </li>
                    </ul>
                    <p>
                        <?php echo wp_trim_words( $content, $num_words = 20, $more = null ); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>