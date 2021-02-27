<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package media_wp
 */

get_header();
?>



<div id="right-sidebar">
    <div class="container wow fadeInUp">

        <div class="content-box">
            <header class="archive-page-header">
                <h2><?php the_archive_title(); ?></h2>
            </header><!-- .page-header -->


            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

            <div class="archive-post-box">
                <div class="archive-post-thumb">
                    <a href="<?php the_permalink(); ?>">
                        <div>
                            <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('col-4-thumbnail'); ?>
                            <?php else: ?>
                            <img src="https://placehold.jp/28/ebebeb/ffffff/530x340.png?text=NO-IMAGE" alt="" />
                            <?php endif; ?>

                            <div class="mask">
                                <div class="caption">
                                    READ MORE
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="archive-post-info">
                    <div class="archive-post-meta">
                        <div class="archive-post-cat">
                            <?php
                            $cats = get_the_category();
                            $exclude = array(7); // ピックアップを除外 local 11
                            foreach((array)$cats as $cat)
                                if(!in_array($cat->cat_ID, $exclude))
                                    echo '<a href="' . get_category_link($cat->cat_ID) . '">' . $cat->cat_name . '</a>';
                            ?>
                        </div>
                        <div class="archive-post-date">
                            <?php the_time('Y.m.d'); ?>
                        </div>
                    </div>

                    <h3 class="archive-post-title">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                    <div class="archive-post-excerpt">
                        <?php echo mb_substr(strip_tags($post-> post_content),0,80).'...'; ?>
                    </div>

                    <div class="archive-post-tag">
                        <?php if(has_tag()): ?>
                        <?php the_tags('', ' / '); ?>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
            <?php endwhile; ?>
            <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
            <?php endif; ?>
        </div>

        <div class="sidebar">



            <?php get_sidebar(); ?>
        </div>
    </div>


</div>





<?php
get_footer();
