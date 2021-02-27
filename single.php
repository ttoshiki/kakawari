<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package media_wp
 */

get_header();
?>
<div id="right-sidebar">
    <div class="container wow fadeInUp">

        <div class="content-box">

            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

            <div class="single-post-box">

                <div class="single-post-meta">
                    <div class="single-post-cat">
                        <?php
                        $cats = get_the_category();
                        $exclude = array(7); // ピックアップを除外 ピックアップを除外 local 11
                        foreach((array)$cats as $cat)
                            if(!in_array($cat->cat_ID, $exclude))
                                echo '<a href="' . get_category_link($cat->cat_ID) . '">' . $cat->cat_name . '</a>';
                        ?>
                    </div>
                    <div class="single-post-date">
                        <?php the_time('Y.m.d'); ?>
                    </div>
                </div>

                <h2 class="single-post-title">
                    <?php the_title(); ?>
                </h2>
                <div class="single-post-tag">
                    <?php if(has_tag()): ?>
                    <?php the_tags('', ''); ?>
                    <?php endif; ?>
                </div>

                <div class="single-post-content">
                    <?php the_content(); ?>
                </div>
            </div>


            <?php if(!empty(get_the_author_meta('user_description'))) : ?>
            <div id="profile" class="clearfix">
                <div class="profile-box">
                    <h3 id="profile-title">
                        <i class="fa fa-pencil" aria-hidden="true"></i> この記事を書いた人
                    </h3>

                    <div id="profile-info">
                        <div id="profile-thumbnail">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 120 ); ?>
                        </div>
                        <div class="profile-info-box" class="clearfix">
                            <p id="profile-name"><?php the_author(); ?></p>
                            <p><?php the_author_meta('user_description'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <div id="related-post">
                <h3 class="related-box-heading">
                    RELATED POSTS
                </h3>
                <div class="related-box-wrap">
                    <?php get_template_part( 'template-parts/related-post');?>
                </div>
            </div>



            <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>


</div>



<?php
get_footer();
