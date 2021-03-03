<?php get_header(); ?>
	<main class="site-main">
		<div class="contact__wrapper">
      <div class="page__header">
        <h1 class="page__heading"><?php echo the_title(); ?></h1>
        <picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/contact/contact_header.webp" type="image/webp">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/contact/contact_header.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/contact/contact_header.jpg 1x, <?php echo get_template_directory_uri(); ?>/dist/images/home/contact_header@2x.jpg 2x " alt="">
				</picture>
      </div>
      <section class="contact__desc">
        <div class="contact__descInner">
          <p class="contact__paragraph">お問い合せありがとうございます。フォームの必要事項にご記入をお願いいたします。ご記入後[ 送信 ] をクリックしてください。送信後に確認メールをお送りしております。確認メールが届かない場合は、お手数ですが<a href="mailto:contact@kakawari.co.jp">contact@kakawari.co.jp</a>までお問い合わせ内容をお送りください。</p>
          <span class="contact__caution"><span class="contact__asterisk">＊</span> の付いた項目は必須事項です。</span>
        </div>
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/contact/polka_dot01.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/images/contact/polka_dot01.png" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/polka_dot01.png 1x, <?php echo get_template_directory_uri(); ?>/dist/images/home/polka_dot01@2x.png 2x " alt="" class="contact__descPolkaDot">
        </picture>
      </section>
      <div class="contact__form">
        <?php while (have_posts()) : ?>
          <?php
            the_post();
            the_content();
            endwhile;
          ?>
      </div>
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/contact/polka_dot02.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/contact/polka_dot02.png" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/polka_dot02.png 1x, <?php echo get_template_directory_uri(); ?>/dist/images/home/polka_dot02@2x.png 2x " alt="" class="contact__polkaDot">
      </picture>
		</div>
	</main><!-- #main -->

<?php
get_footer();
