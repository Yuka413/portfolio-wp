<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex" />
    <meta name="description" content="大内優果のポートフォリオサイトです。">
    <title>Yuka's Portfolio</title>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&family=Noto+Sans+JP:wght@100..900&display=swap"
      rel="stylesheet"
    />

    <!-- favicon -->
    <link
      rel="shortcut icon"
      href="<?php echo get_template_directory_uri(); ?>/img/favicon.png"
      type="image/x-icon"
    />

    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />

    <!-- swiper -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <?php wp_head(); ?>
  </head>
  <body>
    <!-- loadingここから -->
    <div class="c-loading">
      <div class="c-loading__circle"></div>
      <div class="c-loading__circle"></div>
      <div class="c-loading__circle"></div>
      <div class="c-loading__shadow"></div>
      <div class="c-loading__shadow"></div>
      <div class="c-loading__shadow"></div>
      <p class="c-loading-text">loading...</p>
    </div>
    <!-- loadingここまで -->

    <!-- headerここから -->
    <div class="body-container hidden">
      <div class="c-background__wave">
        <header class="l-header">
          <div class="l-header__inner">
            <h1 class="l-header__logo">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
                alt="Yuka's Portfolio"
                class="l-header__logo-image"
              />
            </h1>
            <button class="l-header__drawer">
              <span class="l-header__drawer-icon-bar"></span>
              <span class="l-header__drawer-icon-bar--short"></span>
            </button>
            <div class="l-header-drawer__content">
              <ul class="l-header-drawer__content-lists">
                <li class="l-header-drawer__content-list">
                  <a href="" class="l-header-drawer__content-link">Home</a>
                  <a href="" class="l-header-drawer__content-link-ja">ホーム</a>
                </li>
                <li class="l-header-drawer__content-list">
                  <a href="" class="l-header-drawer__content-link">About me</a>
                  <a href="" class="l-header-drawer__content-link-ja"
                    >わたしについて</a
                  >
                </li>
                <li class="l-header-drawer__content-list">
                  <a href="" class="l-header-drawer__content-link">Works</a>
                  <a href="" class="l-header-drawer__content-link-ja"
                    >制作実績</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </header>

        <!-- headerここまで -->

        <!-- mvここから -->
        <div class="p-mv">
          <div class="p-mv__inner">
            <div class="p-mv__text-container">
              <p class="p-mv__text-main js-glowAnime">あなたの幸せが、<br />私の原動力に。</p>
              <p class="p-mv__text-sab">心に響くサイトを一緒に作り上げます</p>
            </div>
            <div class="p-mv__work">
              <div class="p-mv__work-card">
                <a class="c-card p-mv__card">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/card-daymaga.png"
                    alt=""
                    class="c-card__body-image"
                  />
                  <div class="c-card__modal p-mv-card__modal">
                    <p class="c-card__modal-text p-mv-card__modal-text">
                      詳しく見る
                    </p>
                  </div>
                </a>
                <a href="" class="c-button">
                  <p class="c-button__text">制作実績をすべて見る</p>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- mvここまで -->
      </div>

      <!-- About me ここから -->
      <section class="p-about">
        <div class="p-about__inner u-inner">
          <div class="c-title">
            <h2 class="c-title__container fade-in-up">
              <span class="c-title__main">About me</span>
              <span class="c-title__sub">わたしについて</span>
            </h2>
          </div>
          <div class="p-about__body">
            <div class="p-about__image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/about-me.png" alt="" />
            </div>
            <div class="p-about__content">
              <div class="p-about__content-top">
                <div class="p-about__content-name">大内 優果</div>
                <a
                  href="https://x.com/__yukke48"
                  class="c-sns-x"
                  target="_blank"
                  >𝕏</a
                >
              </div>
              <div class="p-about__content-text">
                名城大学農学部卒業後、ホームセンターで働いています。業務の一環でLINEチラシを作る中で、webの仕事の楽しさに触れました。2024年8月よりスクールでweb制作を学び、現在は転職活動をしています。
              </div>
            </div>
          </div>
          <div class="p-about__body-button">
            <a href="" class="c-button">
              <p class="c-button__text">詳しく見る</p>
            </a>
          </div>
        </div>
      </section>
      <!-- About me ここまで -->

      <!-- Skillsここから -->
      <section class="p-skills">
        <div class="p-skills__inner">
          <div class="c-title">
            <h2 class="c-title__container fade-in-up">
              <span class="c-title__main">Skills</span>
              <span class="c-title__sub">できること</span>
            </h2>
          </div>
          <!-- Slider main container -->
          <div class="swiper p-skills__swiper">
            <div class="p-skills__swiper-button-wrapper">
              <button
                id="prevButton"
                class="p-skills__swiper-button p-skills__swiper-button--left"
              ></button>
              <button
                id="nextButton"
                class="p-skills__swiper-button p-skills__swiper-button--right"
              ></button>
            </div>
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper p-skills__swiper-cards">
              <!-- Slides -->
              <div class="swiper-slide">
                <div class="p-skills__swiper-card">
                  <div class="p-skills__swiper-card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/html.png" alt="" />
                    <div class="p-skills__swiper-card-category">
                      HTML/CSS/SASS
                    </div>
                  </div>
                  <p class="p-skills__swiper-card-description">
                    デザインカンプを元に、PerfectPixcelを使用し忠実なコーディングを行います。
                    誰もが見やすいコードを作成するために、FROCSSを用いたコーディングを取り入れています。
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="p-skills__swiper-card">
                  <div class="p-skills__swiper-card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/js.png" alt="" />
                    <div class="p-skills__swiper-card-category">
                      Javascript/jQuery
                    </div>
                  </div>
                  <p class="p-skills__swiper-card-description">
                    スワイパー、アコーディオンメニューなどwebサイトに簡単な動きがつけられます。何回もスクロールしたくなるようなサイトを目指したく、今後力を入れて習得したいスキルの1つです。
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="p-skills__swiper-card">
                  <div class="p-skills__swiper-card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/wordpress.png" alt="" />
                    <div class="p-skills__swiper-card-category">WordPress</div>
                  </div>
                  <p class="p-skills__swiper-card-description">
                    クライアント様が簡単に管理できるようなサイトを目指し、WordPress化の基礎を習得しました。
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="p-skills__swiper-card">
                  <div class="p-skills__swiper-card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gulp.png" alt="" />
                    <div class="p-skills__swiper-card-category">Gulp</div>
                  </div>
                  <p class="p-skills__swiper-card-description">
                    制作現場で複数人での作業を視野に入れ、gulpの導入、基礎の理解を進めました。
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="p-skills__swiper-card">
                  <div class="p-skills__swiper-card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/github.png" alt="" />
                    <div class="p-skills__swiper-card-category">Github</div>
                  </div>
                  <p class="p-skills__swiper-card-description">
                    現場での複数人でのサイト実装の環境にすぐ入り込めるように、普段のコーディング練習でもGithubで管理をしています。
                  </p>
                </div>
              </div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev p-skills__swiper-button-prev"></div>
            <div class="swiper-button-next p-skills__swiper-button-next"></div>
          </div>
        </div>
      </section>
      <!-- Skillsここまで -->

      <!-- Worksここから -->
      <section class="p-works">
        <div class="p-works__inner u-inner">
          <div class="c-title">
            <h2 class="c-title__container fade-in-up">
              <span class="c-title__main">Works</span>
              <span class="c-title__sub">制作物</span>
            </h2>
          </div>
          <div class="p-works__cards">
                <?php $args = array(
                    'post__in' => array(10, 31, 33),
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'order' =>'ASC',
                );
                $works_query = new WP_Query($args);?>
                <?php if ($works_query->have_posts()): ?>
                <?php while($works_query->have_posts()): ?>
                <?php $works_query->the_post(); ?>
            <a class="p-works__card">
              <div class="p-works__card-wrapper">
                <div class="c-card">
                    <?php $circle_image= get_field('circle-image');?>
                  <img
                    src="<?php echo $circle_image['url'];?>"
                    alt=""
                    class="c-card__body-image"
                  />
                  <div class="c-card__modal">
                    <p class="c-card__modal-text">詳しく見る</p>
                  </div>
                </div>
              </div>
              <div class="p-works__card-description">
                <p class="p-works__card-title">
                  <?php the_title();?>
                </p>
                <?php
                    $categories = get_the_category();
                    if (!empty($categories)) {
                        // カテゴリー名を配列に格納
                        $category_names = array_map(function($category) {
                            return esc_html($category->name); // エスケープ処理
                        }, $categories);

                        // カテゴリー名をスラッシュで結合
                        $category_list = implode(' / ', $category_names);

                        // 表示
                        echo '<p class="p-works__card-caption">' . $category_list . '</p>';
                    } ?>
                <p class="p-works__card-caption">制作時間：<?php echo get_the_excerpt(); ?></p>
              </div>
            </a>
                <?php endwhile; ?>
                <?php endif; ?>
          </div>
          <div class="p-works__button-wrapper">
            <a href="<?php echo get_post_type_archive_link('/'); ?>all" class="c-button"> すべて見る </a>
          </div>
        </div>
      </section>
      <!-- Worksここまで -->

     <!-- footerここから -->
     <div class="c-background__wave c-background__wave--reverse">
        <footer class="l-footer">
          <div class="l-footer__inner u-inner">
            <div class="l-footer__contents">
              <span class="l-footer__text">
                ご覧いただき、<wbr />ありがとうございました！
              </span>
              <div class="l-footer__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" />
              </div>
            </div>
            <div class="l-footer__copyright">
              <small class="l-footer__copyright-text"
                >&copy;2024 Yuka's Portfolio</small
              >
              <a
                href="https://x.com/__yukke48"
                class="c-sns-x c-sns-x__small"
                target="_blank"
                >𝕏
              </a>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- footerここまで -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php wp_footer();?>
  </body>
</html>