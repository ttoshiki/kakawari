<?php
//カテゴリ情報から関連記事を4個ランダムに呼び出す
$categories = get_the_category($post->ID);
$category_ID = array();
foreach($categories as $category):
array_push( $category_ID, $category -> cat_ID);
endforeach ;
$args = array(
    'post__not_in' => array($post -> ID),
    'posts_per_page'=> 4,
    'category__in' => $category_ID,
    'orderby' => 'rand',
);
$query = new WP_Query($args); ?>
<?php if( $query -> have_posts() ): ?>
<?php while ($query -> have_posts()) : $query -> the_post(); ?>


<div class="col-4-box matchHeight">
    <div class="col-4-box-thumb">
        <a href="<?php the_permalink(); ?>">
            <div class="col-4-box-thumb">

                <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('col-4-thumbnail'); ?>
                <?php else: ?>
                <img src="https://placehold.jp/28/ebebeb/ffffff/530x340.png?text=NO-IMAGE" alt="" />
                <?php endif; ?>
<!--
                <div class="mask">
                    <div class="caption">
                        READ MORE
                    </div>
                </div>
-->
            </div>
        </a>
    </div>
    <div class="col-4-box-date">
        <?php the_time('Y.m.d'); ?>
    </div>
    <h3 class="col-4-box-title">
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h3>
</div>




<?php endwhile;?>

<?php else:?>
<p>記事はありませんでした</p>
<?php
endif;
wp_reset_postdata();
?>
<br style="clear:both;">