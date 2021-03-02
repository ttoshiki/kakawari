<?php get_header(); ?>
	<main class="site-main">
		<div class="home__wrapper">
			<div class="home__mv">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/mv_fixed-pc.webp" type="image/webp">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/mv_fixed-pc.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/mv_fixed-pc.jpg 1x, <?php echo get_template_directory_uri(); ?>/dist/images/home/mv_fixed-pc@2x.jpg 2x " alt="" class="home__mv -fixed -pc">
				</picture>
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/mv_a-pc.webp" type="image/webp">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/mv_a-pc.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/mv_a-pc.jpg 1x, <?php echo get_template_directory_uri(); ?>/dist/images/home/mv_a-pc@2x.jpg 2x " alt="" class="home__mv -first -pc">
				</picture>
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/mv_b-pc.webp" type="image/webp">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/mv_b-pc.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/mv_b-pc.jpg 1x, <?php echo get_template_directory_uri(); ?>/dist/images/home/mv_b-pc@2x.jpg 2x " alt="" class="home__mv -second -pc">
				</picture>
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/mv_c-pc.webp" type="image/webp">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/mv_c-pc.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/mv_c-pc.jpg 1x, <?php echo get_template_directory_uri(); ?>/dist/images/home/mv_c-pc@2x.jpg 2x " alt="" class="home__mv -third -pc">
				</picture>
			</div>
			<section class="home__profile">
				<div class="home__profileBlock -left">
					<p class="home__paragraph">
						目の前の笑顔が喜び。大切にしようと思って接すると、さらに大切にしたいと、思える人たちと巡り合える幸せな日々。そして人から人へ、ご縁を循環させるカンパニー。本当に出会ってくださり感謝しています。<br>
						ひとりひとりへ「関わり」が生まれますように。
					</p>
					<a href="<?php echo home_url('/profile/') ?>" class="seemoreLink">
						<div class="seemoreLinkArea">
							<span class="linkText">SEE MORE</span>
							<span class="linkCircle"></span>
						</div>
					</a>
				</div>
				<picture class="home__profileBlock -center">
					<source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/profile.webp" type="image/webp">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/profile.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/profile.jpg 1x, <?php echo get_template_directory_uri(); ?>/dist/images/home/profile@2x.jpg 2x " alt="" class="home__profileImage">
				</picture>
				<div class="home__profileBlock -right -vertical">
					<h2 class="subHeadingEn">Profile</h2>
					<h3 class="subHeadingJp">
						<span class="sr-only">人との関わりに感謝して</span>
            <img
              src="<?php echo get_template_directory_uri(); ?>/dist/images/home/profile_ja.svg"
              alt="人との関わりに感謝して"
            >
					</h3>
				</div>
			</section>
			<section class="home__column">
				<div class="home__columnInner">
					<h2 class="subHeadingEn -vertical">Column</h2>
					<ul class="home__columnList">
						<?php if (have_posts()): ?>
							<?php while (have_posts()) : the_post(); ?>
							<li class="home__columnItem">
								<article id="post-<?php the_ID(); ?>" <?php post_class('archive__article'); ?>>
									<?php
										if (has_post_thumbnail()) {
											the_post_thumbnail('large');
										}
									?>
									<div class="home__columnMeta">
										<time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="home__columnDate"><?php echo get_post_time('Y/m/d'); ?></time>
										<h3 class="home__columnTitle"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
									</div>
								</article>
							</li>
							<?php endwhile; ?>
							<li class="home__columnLink -large seemoreLinkWrapper">
								<a href="<?php echo home_url('/gallery/') ?>" class="seemoreLink">
									<span class="linkCircle"></span>
								</a>
							</li>
						<?php endif; ?>
					</ul>
				</div>
				<div class="home__columnLink -medium">
					<a href="<?php echo home_url('/gallery/') ?>" class="seemoreLink">
						<div class="seemoreLinkArea">
							<span class="linkText">SEE MORE</span>
							<span class="linkCircle"></span>
						</div>
					</a>
				</div>
			</section>
			<section class="home__service">
				<div class="l-doubleCol">
					<div class="l-doubleCol__col">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/service.webp" type="image/webp">
							<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/service.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/service.jpg 1x, <?php echo get_template_directory_uri(); ?>/dist/images/home/service@2x.jpg 2x " alt="">
						</picture>
						<p class="home__paragraph">自分が、自分の言葉で、自分の本心に気づく。表面的な言葉ではなく、自分の深いところからの言葉だと、きっと、どんな言葉でも心から震える。暗闇で手探りするような感覚も溶けて、消えていき、統合された本来の「あなた」で生きるヒントが見つかります。口コミで広まり続ける「人生が変わるセッション」です。</p>
						<a href="<?php echo home_url('/service/') ?>" class="seemoreLink">
							<div class="seemoreLinkArea">
								<span class="linkText">SEE MORE</span>
								<span class="linkCircle"></span>
							</div>
						</a>
					</div>
					<div class="l-doubleCol -vertical">
						<h2 class="subHeadingEn">Service</h2>
						<h3 class="subHeadingJp">
							<span class="sr-only">本当の自分を知りたいあなたへ</span>
							<img
								src="<?php echo get_template_directory_uri(); ?>/dist/images/home/service_ja.svg"
								alt="本当の自分を知りたいあなたへ"
							>
						</h3>
					</div>
				</div>
			</section>
			<section class="home__gallery">
				<div class="l-doubleCol">
					<div class="l-doubleCol -vertical">
						<h3 class="subHeadingJp">
							<span class="sr-only">未来を想像する自由を</span>
							<img
								src="<?php echo get_template_directory_uri(); ?>/dist/images/home/gallery_ja.svg"
								alt="未来を想像する自由を"
							>
						</h3>
						<h2 class="subHeadingEn">Gallery</h2>
					</div>
					<div class="l-doubleCol__col">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/gallery.webp" type="image/webp">
							<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/gallery.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/gallery.jpg 1x, <?php echo get_template_directory_uri(); ?>/dist/images/home/gallery@2x.jpg 2x " alt="">
						</picture>
						<p class="home__paragraph">目の前にある「なんてことない風景」。そこに愛しい何かが映り込めば、それは愛しい風景になる。愛しいという思いは力強い。その瞬間にしかない「いのちの喜び」を、私は一枚だけ写真にする。永遠に続くものはない、ただ、ほんの少しだけ一緒にいさせてもらう。そんな「いのち」に寄り添う感覚でいる。</p>
						<a href="<?php echo home_url('/gallery/') ?>" class="seemoreLink">
							<div class="seemoreLinkArea">
								<span class="linkText">SEE MORE</span>
								<span class="linkCircle"></span>
							</div>
						</a>
					</div>
				</div>
			</section>
			<section class="home__instagram">
				<div class="l-doubleCol">
					<div class="l-doubleCol__col">
						<?php echo do_shortcode('[instagram-feed]'); ?>
						<a href="#" class="seemoreLink">
							<div class="seemoreLinkArea">
								<span class="linkText">SEE MORE</span>
								<span class="linkCircle"></span>
							</div>
						</a>
					</div>
					<div class="l-doubleCol -vertical">
						<h2 class="subHeadingEn">Instagram</h2>
					</div>
				</div>
			</section>
			<section class="home__otherServiceArea">
				<a class="home__serviceLink">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/icons/twitter.png" alt="twitter" class="home__serviceIcon -twitter">
				</a>
				<a class="home__serviceLink">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/icons/note.png" alt="note" class="home__serviceIcon -note">
				</a>
				<a class="home__serviceLink">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/icons/youtube.png" alt="youtube" class="home__serviceIcon -youtube">
				</a>
				<a class="home__serviceLink">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/icons/facebook.png" alt="facebook" class="home__serviceIcon -facebook">
				</a>
			</section>
		</div>
	</main><!-- #main -->

<?php
get_footer();
