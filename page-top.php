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





<section id="first-view">
    <div class="container">
        <!-- <h1 class="wow fadeIn" data-wow-duration="6.0s" data-wow-delay=".3s">
            <img class="main-logo" src="<?php bloginfo('template_url'); ?>/images/main-logo.png" alt="手放す経営ラボラトリー">
        </h1> -->
        <?php putRevSlider( 'mainvisual' ); ?>
    </div>
</section>

<section id="top-topics">
    <div class="container wow fadeInUp">
        <div class="top-header">
            <h2 class="top-header-title">
                NEWS
            </h2>
            <!-- <p class="top-header-txt">
                研究員が厳選した話題のニュース
            </p> -->
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
<section id="top-blog">
    <div class="container wow fadeInUp">
        <div class="top-header">
            <h2 class="top-header-title">
                BLOG
            </h2>
        </div>
        <div class="col-4-box-wrap">
            <?php
            $newslist = get_posts( array(
                'category_name' => 'blog', //特定のカテゴリースラッグを指定
                'posts_per_page' => 4 //取得記事件数
            ));
            if( !empty( $newslist ) ) : //もし記事が空でなかったら
            foreach($newslist as $post) :
            setup_postdata($post);
            ?>

            <?php get_template_part( 'template-parts/col-4-box');?>

            <?php endforeach; ?>
            <?php elseif( empty( $newslist ) ):  //もし記事が空だったら　?>
            <p>準備中です。</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <div class="view-more-btn">
            <a href="<?php bloginfo('url'); ?>/category/event/">
                <img src="<?php bloginfo('template_url'); ?>/images/view-more-btn.png">
            </a>
        </div>
    </div>
</section>

<section id="top-sns">
    <div class="container">
        <div class="top-header">
            <h2 class="top-header-title">
                INSTAGRAM
            </h2>
            <p class="top-header-txt">
                お気軽にフォローしてください
            </p>
        </div>

        <div class="insta-box">
            <div class="insta-full">
                <?php echo do_shortcode(' [elfsight_instagram_feed id="2"]'); ?>
            </div>
        </div>
        <div class="view-more-btn">
            <a href="<?php bloginfo('url'); ?>/category/topics/">
                <img src="<?php bloginfo('template_url'); ?>/images/view-more-btn.png">
            </a>
        </div>

    </div>
</section>

<section id="top-slide">
<?php if ( function_exists( "get_placid_slider" ) ) { get_placid_slider($slider_id="2"); } ?>
</section>

<section id="top-sns">
    <div class="container">
        <div class="top-header">
            <h2 class="top-header-title">
                FOLLOW SNS
            </h2>
            <p class="top-header-txt">
                最新情報を SNS で発信しています
            </p>
        </div>

        <div class="top-sns-box">
            <div class="top-fb">
                <div class="fb-page" data-href="https://www.facebook.com/FacebookJapan/" data-tabs="timeline" data-width="500" data-height="478" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/FacebookJapan/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/FacebookJapan/">フェイスブック</a></blockquote></div>
            </div>
            <div class="insta">
                <?php echo do_shortcode(' [elfsight_instagram_feed id="1"]'); ?>
            </div>
        </div>



    </div>
</section>





<?php
get_footer();
