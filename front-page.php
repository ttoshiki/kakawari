<?php get_header(); ?>

	<main class="site-main">
		<div class="home__wrapper">
			<section class="home__profile">
				<div class="home__profile -left">
					<p class="home__paragraph">
						目の前の笑顔が喜び。大切にしようと思って接すると、さらに大切にしたいと、思える人たちと巡り合える幸せな日々。そして人から人へ、ご縁を循環させるカンパニー。本当に出会ってくださり感謝しています。<br>
						ひとりひとりへ「関わり」が生まれますように。
					</p>
					<a href="<?php echo home_url('/profile/') ?>">
						<span class="linkText">SEE MORE</span>
						<span class="linkCircle"></span>
					</a>
				</div>
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/profile.webp" type="image/webp">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/profile.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/profile.jpg 1x, <?php echo get_template_directory_uri(); ?>/dist/images/home/profile@2x.jpg 2x " alt="">
				</picture>
				<div class="home__profile -right">
					<h2 class="subHeadingJp">人との関わりに感謝して</h2>
					<h2 class="subHeadingEn">Profile</h2>
				</div>
			</section>
			<section class="home__column">
				<h2 class="subHeadingEn">Column</h2>
				<ul class="home__columnList">
					<li class="home__columnItem"></li>
				</ul>
			</section>
			<section class="home__service">
				<div class="l-doubleCol">
					<div class="l-doubleCol__col">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/service.webp" type="image/webp">
							<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/service.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/service.jpg 1x, <?php echo get_template_directory_uri(); ?>/dist/images/home/profile@2x.jpg 2x " alt="">
						</picture>
						<p class="home__paragraph">自分が、自分の言葉で、自分の本心に気づく。表面的な言葉ではなく、自分の深いところからの言葉だと、きっと、どんな言葉でも心から震える。暗闇で手探りするような感覚も溶けて、消えていき、統合された本来の「あなた」で生きるヒントが見つかります。口コミで広まり続ける「人生が変わるセッション」です。</p>
						<a href="<?php echo home_url('/service/') ?>">
							<span class="linkText">SEE MORE</span>
							<span class="linkCircle"></span>
						</a>
					</div>
					<div class="l-doubleCol__vertical">
						<h2 class="subHeadingEn">Service</h2>
						<h2 class="subHeadingJp">本当の自分を知りたいあなたへ</h2>
					</div>
				</div>
			</section>
			<section class="home__gallery">
				<div class="l-doubleCol">
					<div class="l-doubleCol__vertical">
						<h2 class="subHeadingEn">Gallery</h2>
						<h2 class="subHeadingJp">未来を想像する自由を</h2>
					</div>
					<div class="l-doubleCol__col">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/service.webp" type="image/webp">
							<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/service.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/service.jpg 1x, <?php echo get_template_directory_uri(); ?>/dist/images/home/profile@2x.jpg 2x " alt="">
						</picture>
						<p class="home__paragraph">目の前にある「なんてことない風景」。そこに愛しい何かが映り込めば、それは愛しい風景になる。愛しいという思いは力強い。その瞬間にしかない「いのちの喜び」を、私は一枚だけ写真にする。永遠に続くものはない、ただ、ほんの少しだけ一緒にいさせてもらう。そんな「いのち」に寄り添う感覚でいる。</p>
						<a href="<?php echo home_url('/gallery/') ?>">
							<span class="linkText">SEE MORE</span>
							<span class="linkCircle"></span>
						</a>
					</div>
				</div>
			</section>
			<section class="home__instagram">
				<div class="l-doubleCol">
					<div class="l-doubleCol__col">
						<?php do_shortcode('[instagram-feed]'); ?>
						<a href="#">
							<span class="linkText">SEE MORE</span>
							<span class="linkCircle"></span>
						</a>
					</div>
					<div class="l-doubleCol__vertical">
						<h2 class="subHeadingEn">Instagram</h2>
					</div>
				</div>
			</section>
			<section class="home__otherServiceArea">
				<a class="home__serviceLink">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/icons/twitter.png" alt="twitter">
				</a>
				<a class="home__serviceLink">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/icons/note.png" alt="note">
				</a>
				<a class="home__serviceLink">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/icons/youtube.png" alt="youtube">
				</a>
				<a class="home__serviceLink">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/icons/facebook.png" alt="facebook">
				</a>
			</section>
		</div>
	</main><!-- #main -->

<?php
get_footer();
