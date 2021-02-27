<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package media_wp
 */

?>

<div class="col-4-box matchHeight">
    <div class="col-4-box-thumb">
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
    <div class="col-4-box-inner">
        <div class="col-4-box-cat">
            <?php
            $cats = get_the_category();
            $exclude = array(7); // ピックアップを除外 local 11
            foreach((array)$cats as $cat)
                if(!in_array($cat->cat_ID, $exclude))
                    echo '<a href="' . get_category_link($cat->cat_ID) . '">' . $cat->cat_name . '</a>';
            ?>


        </div>
        <h3 class="col-4-box-title matchHeight-title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h3>
        <div class="col-4-box-meta">
            <div class="col-4-box-date">
                <?php the_time('Y.m.d'); ?>
            </div>
            <div class="col-4-box-tag">
                <?php if(has_tag()): ?>
                <?php the_tags('', ' / '); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
