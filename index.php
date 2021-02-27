<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package media_wp
 */

get_header();
?>




<section id="top-topics">
    <div class="container wow fadeInUp">
        <div class="top-header">
            <h2 class="top-header-title">
                NEWS
            </h2>
        </div>
        <div class="col-4-box-wrap">
            <ul class="news-list">
              <?php
              $newslist = get_posts( array(
                  'category_name' => 'news', //特定のカテゴリースラッグを指定
                  'posts_per_page' => 4 //取得記事件数
              ));
              if( !empty( $newslist ) ) : //もし記事が空でなかったら
              foreach($newslist as $post) :
              setup_postdata($post);
              ?>

              <?php //get_template_part( 'template-parts/col-4-box');?>
              <li>
                <a href="<?php the_permalink(); ?>">
                  <div class="news-list-day"><?php the_time('Y.m.d'); ?></div>
                  <div class="news-list-title"><?php the_title(); ?></div>
                </a>
              </li>

              <?php endforeach; ?>
              <?php elseif( empty( $newslist ) ):  //もし記事が空だったら　?>
              <p>準備中です。</p>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            </ul>
        </div>
        <div class="view-more-btn">
            <a href="<?php bloginfo('url'); ?>/category/topics/">
                <img src="<?php bloginfo('template_url'); ?>/images/view-more-btn.png">
            </a>
        </div>
    </div>
</section>





<?php
get_footer();
