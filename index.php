<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex" />
    <meta name="description" content="大内優果のポートフォリオサイトです">
    <meta property="og:title" content="ページのタイトル">
    <meta property="og:url" content="https://yukke-coder.com">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/ogp.png">
    <meta property="og:site_name" content="大内優果のポートフォリオサイトです">
    <meta property="og:description" content="自作のポートフォリオサイトや架空のサイトのコーディング実績を掲載しています">
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
    <div id="js-loading" class="c-loading">
      <div class="c-loading__container">
        <div class="c-loading__circle"></div>
        <div class="c-loading__circle"></div>
        <div class="c-loading__circle"></div>
        <div class="c-loading__shadow"></div>
        <div class="c-loading__shadow"></div>
        <div class="c-loading__shadow"></div>
      <p class="c-loading-text">loading...</p>
      </div>
    </div>
    <!-- loadingここまで -->

    <!-- headerここから -->
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
                  <a href="<?php echo home_url(); ?>" class="l-header-drawer__content-link">Home</a>
                  <a href="<?php echo home_url(); ?>" class="l-header-drawer__content-link-ja">ホーム</a>
                </li>
                <li class="l-header-drawer__content-list">
                  <a href="<?php echo get_permalink(58); ?>" class="l-header-drawer__content-link">About me</a>
                  <a href="<?php echo get_permalink(58); ?>" class="l-header-drawer__content-link-ja"
                    >わたしについて</a
                  >
                </li>
                <li class="l-header-drawer__content-list">
                  <a href="<?php echo get_post_type_archive_link('works'); ?>" class="l-header-drawer__content-link">Works</a>
                  <a href="<?php echo get_post_type_archive_link('works'); ?>" class="l-header-drawer__content-link-ja"
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
                
                <?php $args = array(
                  'post_type' => 'works',
                  'posts_per_page' => -1,
                );
                $all_query = new WP_query($args); ?>
                <?php if ($all_query->have_posts()):?>
                  <?php while($all_query -> have_posts()): ?>
                    <?php $all_query->the_post(); ?>
                    <?php $circle_image = get_field('circle-image'); ?>
                <a  href="<?php echo get_post_permalink(); ?>"class="p-works__card p-mv__card">
                <div class="c-card">
                  <img
                    src="<?php echo $circle_image['url']; ?>"
                    alt=""
                    class="c-card__body-image"
                  />
                  <div class="c-card__modal p-mv-card__modal">
                    <p class="c-card__modal-text p-mv-card__modal-text">
                      詳しく見る
                    </p>
                  </div>
                  </div>
                </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                <a href="<?php echo get_post_type_archive_link('works'); ?>" class="c-button p-mv-button">
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
                <div class="c-link">
                <a
                  href="https://x.com/__yukke48"
                  class="c-sns-x"
                  target="_blank"
                  >𝕏</a
                >
                <a
                  href="https://github.com/Yuka413"
                  class="c-github"
                  target="_blank"
                  ><i class="fa-brands fa-github c-github__icon"></i></a
                >
                </div>
              </div>
              <div class="p-about__content-text">
                名城大学農学部卒業後、ホームセンターで働いています。業務の一環でLINEチラシを作る中で、webの仕事の楽しさに触れました。2024年8月よりスクールでweb制作を学び、現在は転職活動をしています。
              </div>
            </div>
          </div>
          <div class="p-about__body-button">
            <a href="<?php echo get_permalink(58); ?>" class="c-button">
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
                    現場での複数人でのサイト実装の環境にすぐ入り込めるように、普段のコーディングでもGithubで管理をしています。
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
          <div class="p-works__overview">
          <p class="p-works__overview-text">
            2024年8月よりオンラインスクールでの学習を始め、<br
              class="u-sp__hidden"
            />10月中に基本カリキュラムを終えました。
          </p>
          <div class="p-works__overview-monthly">
            <table class="p-works__overview-table">
              <caption class="p-works__overview-table-title">
                <p>学習進捗</p>
              </caption>
              <tbody>
                <tr>
                  <th>11月</th>
                  <td>ポートフォリオ構成決定、サイト1本コーディング・WP化</td>
                </tr>
                <tr>
                  <th>12月</th>
                  <td>ポートフォリオコーディング・WP化</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
          <div class="p-works__cards">
                <?php $args = array(
                    'post__in' => array(41, 43, 40),
                    'post_type' => 'works',
                    'posts_per_page' => 3,
                    'orderby' =>'post__in',
                );
                $works_query = new WP_Query($args);?>
                <?php if ($works_query->have_posts()): ?>
                <?php while($works_query->have_posts()): ?>
                <?php $works_query->the_post(); ?>
            <a href="<?php echo get_post_permalink(); ?>" class="p-works__card">
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
                  <?php $terms = get_the_terms(get_the_ID(), 'skill'); ?>
                  <?php if (!empty($terms) && !is_wp_error($terms)) {
                    $term_names = array_map(function($term) {
                        return $term->name;
                    }, $terms);
                    $term_names_string = implode(' / ', $term_names);
                    echo '<p class="p-works__card-caption">' . $term_names_string . '</p>';
                }
                ?>
              <p class="p-works__card-caption">制作時間：<?php echo get_field('time'); ?></p>
              </div>
            </a>
                <?php endwhile; ?>
                <?php endif; ?>
          </div>
          <div class="p-works__button-wrapper">
            <a href="<?php echo get_post_type_archive_link('works'); ?>" class="c-button"> すべて見る </a>
          </div>
        </div>
      </section>
      <!-- Worksここまで -->

    <!-- footerここから -->
    <?php get_footer(); ?>
    <!-- footerここまで -->
