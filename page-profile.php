<?php get_header(); ?>
	<main class="site-main">
		<div class="profile__wrapper">
      <div class="page__header">
        <h1 class="page__heading"><?php echo the_title(); ?></h1>
        <picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/profile/profile_header.webp" type="image/webp">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/profile/profile_header.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/profile/profile_header.jpg 1x, <?php echo get_template_directory_uri(); ?>/dist/images/home/profile_header@2x.jpg 2x " alt="">
				</picture>
        <picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/profile/polka_dot01.webp" type="image/webp">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/profile/polka_dot01.png" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/profile/polka_dot01.png 1x, <?php echo get_template_directory_uri(); ?>/dist/images/home/polka_dot01@2x.png 2x " alt="" class="profile__headerPolkaDot">
				</picture>
      </div>
      <section class="profile__message">
        <div class="profile__messageContents">
          <picture class="profile__messagePicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/profile/message01.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/profile/message01.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/profile/message01.jpg 1x, <?php echo get_template_directory_uri(); ?>/dist/images/profile/message01@2x.jpg 2x " alt="">
          </picture>
          <div class="profile__paragraphWrapper">
            <p class="profile__paragraph">
              これからの時代は、感性を表現する人に惹かれる。知識だけあれば、全員が心からの喜びを体現できるということではないこと。ひとりひとりが気づき始めています。
            </p>
            <p class="profile__paragraph">
              個人の話にはなりますが、病気の経験から、私には価値がないと思い、感情を押し込めた苦しい日々でした。裏表もなく、全てを出した時に、「コンプレックス」と思い込んでいたことも「個性」であることを強烈に体験しました。
            </p>
          </div>
          <picture class="profile__messagePicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/profile/message02.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/profile/message02.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/profile/message02.jpg 1x, <?php echo get_template_directory_uri(); ?>/dist/images/profile/message02@2x.jpg 2x " alt="" class="profile__messageImage">
          </picture>
          <div class="profile__paragraphWrapper">
            <p class="profile__paragraph">
              それは本物の才能に繋がる、ヒントになることを学びました。「やり方」ではなく「あり方」から紐解く「自分らしく」を内面から紡ぎ出すこと。
            </p>
            <p class="profile__paragraph">
              それは「今を生きる」ということを、心と体で愉しめるプロセスに繋がります。是非とも、会いに来てください。
            </p>
            <span class="profile__messageConclusion">関わり</span>
          </div>
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/profile/polka_dot02.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/profile/polka_dot02.png" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/profile/polka_dot02.png 1x, <?php echo get_template_directory_uri(); ?>/dist/images/home/polka_dot02@2x.png 2x " alt="" class="profile__messagePolkaDot">
          </picture>
        </div>
        <div class="profile__messageBlock -vertical">
          <h2 class="subHeadingEn">Message</h2>
          <h3 class="subHeadingJp">
            <span class="sr-only">あるがままで生きる人が価値になる</span>
            <img
              src="<?php echo get_template_directory_uri(); ?>/dist/images/profile/message_ja.svg"
              alt="あるがままで生きる人が価値になる"
            >
          </h3>
        </div>
      </section>
      <section class="profile__profile">
        <div class="profile__profileColumn">
          <div class="profile__profileBlock -vertical">
            <h2 class="subHeadingEn">Profile</h2>
          </div>
          <picture class="profile__profilePicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/profile/profile01.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/profile/profile01.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/profile/profile01.jpg 1x, <?php echo get_template_directory_uri(); ?>/dist/images/profile/profile01@2x.jpg 2x " alt="" class="profile__messageImage">
          </picture>
          <div class="profile__profileRight">
            <h3 class="profile__profileName">
              <span class="sr-only">関 愛子</span>
              <img
                src="<?php echo get_template_directory_uri(); ?>/dist/images/profile/name.svg"
                alt="関愛子"
              >
            </h3>
            <span class="profile__profilePosition">
              <span class="sr-only">株式会社関わり代表</span>
              <img
                src="<?php echo get_template_directory_uri(); ?>/dist/images/profile/position.svg"
                alt="株式会社関わり代表"
              >
            </span>
            <p class="profile__paragraph">
              1986年、静岡県生まれ、埼玉県育ち。 幼少期からアトピーに苦しむ。20代で強制入院を経験。更に30代でうつも併発、ステロイドでさえも効かなくなる。病院へ通院した際に涙が止まらなくなり休職。その葛藤をTwitterで発信したところ 、SNS素人ながら、1年でフォロワー1万人超え。
            </p>
          </div>
        </div>
        <div class="profile__profileColumn -bottom">
          <div class="profile__profileText">
            <p class="profile__paragraph">
              10年勤務した大手金融機関を退職し、令和元年「株式会社 関わり」を創業。過去の経験から「食育」の大切さを実感し医師のセミナー、料理教室などイベントのオーガナイズをスタート。
            </p>
            <p class="profile__paragraph">
              多くの方から、入院、休職、うつ、アトピーの闘病、退職、コロナ渦における起業など、様々な自分の人生経験を聴いてみたいと声をかけられ、 自身の経験が同じような境遇の方に勇気を与えられることに気づき、個別セッションを開始。
            </p>
            <p class="profile__paragraph">
              現在は、ライフコーチとして「ひとりひとりが表現者」をキャッチコピーに、個人で才能開花して生きることをサポートするセッションや講演を行う傍ら、フォトグラファーとしても活動中。また、オーガニック農家、アパレル会社と連携し、環境保全の活動にも取り組む、令和を生きるこれからの経営者。
            </p>
          </div>
          <picture class="profile__profilePicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/profile/profile02.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/profile/profile02.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/profile/profile02.jpg 1x, <?php echo get_template_directory_uri(); ?>/dist/images/profile/profile02@2x.jpg 2x " alt="" class="profile__messageImage">
          </picture>
        </div>
      </section>
      <section class="profile__works">
        <div class="profile__worksContents">
          <h4 class="profile__worksTableHeading">
            <span class="sr-only">講演・セミナー登壇</span>
            <img
              src="<?php echo get_template_directory_uri(); ?>/dist/images/profile/seminar_ja.svg"
              alt="講演・セミナー登壇"
            >
          </h4>
          <div class="profile__worksTable">
            <dl>
              <dt>2020.11</dt>
              <dd>「0→1night SNSを駆使して事業創造を加速させる！」</dd>
            </dl>
            <dl>
              <dt>2020.12</dt>
              <dd>サンクチュアリ出版主催 「アレルギー・うつから学んだ【サスティナブルな生き方】〜あなたの心身から学ぼう〜」</dd>
            </dl>
            <dl>
              <dt>2020.12</dt>
              <dd>COUNTERPART COFFEE GALLERY  写真展「長い旅の途中〜」</dd>
            </dl>
          </div>
        </div>
        <div class="profile__worksBlock -vertical">
          <h2 class="subHeadingEn">Works</h2>
          <h3 class="subHeadingJp">
            <span class="sr-only">実績のご紹介</span>
            <img
              src="<?php echo get_template_directory_uri(); ?>/dist/images/profile/works_ja.svg"
              alt="実績のご紹介"
            >
          </h3>
        </div>
      </section>
      <div class="profile__separation">
        <picture class="profile__separationPicture">
          <source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/profile/separation_image.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/images/profile/separation_image.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/profile/separation_image.jpg 1x, <?php echo get_template_directory_uri(); ?>/dist/images/profile/separation_image@2x.jpg 2x " alt="" class="profile__separationPolkaDot">
        </picture>
        <picture class="profile__separationPolkaDot -front">
          <source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/profile/polka_dot03.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/images/profile/polka_dot03.png" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/profile/polka_dot03.png 1x, <?php echo get_template_directory_uri(); ?>/dist/images/profile/polka_dot03@2x.png 2x " alt="" class="profile__separationPolkaDot">
        </picture>
        <picture class="profile__separationPolkaDot -back">
          <source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/profile/polka_dot04.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/images/profile/polka_dot04.png" srcset="<?php echo get_template_directory_uri(); ?>/dist/images/profile/polka_dot04.png 1x, <?php echo get_template_directory_uri(); ?>/dist/images/profile/polka_dot04@2x.png 2x " alt="" class="profile__separationImage">
        </picture>
      </div>
      <section class="profile__company">
        <div class="profile__companyBlock -vertical">
          <h3 class="subHeadingJp">
            <span class="sr-only">会社概要</span>
            <img
            src="<?php echo get_template_directory_uri(); ?>/dist/images/profile/company_ja.svg"
            alt="会社概要"
            >
          </h3>
          <h2 class="subHeadingEn">Company</h2>
        </div>
        <div class="profile__companyTable">
          <dl>
            <dt>
              <span class="profile__tableDtSpan"><span>会</span><span>社</span><span>名</span></span>
            </dt>
            <dd>
              <span class="profile__tableDdSpan">株式会社 関わり</span>
            </dd>
          </dl>
          <dl>
            <dt>
              <span class="profile__tableDtSpan"><span>代</span><span>表</span><span>者</span></span>
            </dt>
            <dd>
              <span class="profile__tableDdSpan">関 愛子</span>
            </dd>
          </dl>
          <dl>
            <dt>
              <span class="profile__tableDtSpan"><span>所</span><span>在</span><span>地</span></span>
            </dt>
            <dd>
              <span class="profile__tableDdSpan">〒107-0062　東京都港区南青山2-2-15 ウィン青山942</span>
            </dd>
          </dl>
          <dl>
            <dt>
              <span class="profile__tableDtSpan"><span>事</span><span>業</span><span>内</span><span>容</span></span>
            </dt>
            <dd>
              <ul class="profile__tableList">
                <li>講演会、執筆</li>
                <li>個人セッション、コンサル</li>
                <li>イベント企画、販売</li>
                <li>写真撮影</li>
                <li>SNS運用代行、セミナー</li>
              </ul>
            </dd>
          </dl>
          <dl>
            <dt>
              <span class="profile__tableDtSpan"><span>設</span><span>立</span></span>
            </dt>
            <dd>
              <span class="profile__tableDdSpan">令和元年12月17日</span>
            </dd>
          </dl>
          <dl>
            <dt>
              <span class="profile__tableDtSpan"><span>資</span><span>本</span><span>金</span></span>
            </dt>
            <dd>
              <span class="profile__tableDdSpan">100万円</span>
            </dd>
          </dl>
        </div>
      </section>
		</div>
	</main><!-- #main -->

<?php
get_footer();
