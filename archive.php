<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex" />
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

    <!-- headerここから -->
    <header class="l-header">
      <div class="l-header__inner">
        <a href="<?php echo home_url(''); ?>" class="l-header__logo">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
            alt="Yuka's Portfolio"
            class="l-header__logo-image"
          />
        </a>
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
              <a href="<?php echo get_post_type_archive_link('works'); ?>" class="l-header-drawer__content-link-ja">制作実績</a>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <!-- headerここまで -->

    <!-- Worksここから -->
    <section class="p-works u-top__padding">
      <div class="p-works__inner u-inner">
        <div class="c-title">
          <h1 class="c-title__container u-title__color fade-in-up">
            <span class="c-title__main">
              Works <span class="u-title__marker"></span>
            </span>
            <span class="c-title__sub">すべての制作物</span>
          </h1>
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
        <div class="p-works__tag">
          <div class="p-works__tag-text"><p>スキルで制作物を絞り込む</p></div>
          <div class="p-works__tag-container">
            <?php $terms = get_terms('skill'); ?>
            <?php foreach($terms as $term): ?>
            <a href="" data-type="<?php echo $term->slug; ?>" class="c-skill-tag c-skill-tag__color--<?php echo $term->slug; ?>"><?php echo $term->name ;?></a>
              <?php endforeach; ?>
          </div>
        </div>
        <div class="p-works__cards">
            <?php $args= array(
              'post_type' =>'works',
              'posts_per_page' => -1,
            );
            $all_query = new WP_Query($args); ?>
            <?php if($all_query->have_posts()):?>
              <?php while($all_query->have_posts()):?>
                <?php $all_query->the_post(); ?>
                <?php
                  // 投稿に紐づく 'skill' タクソノミーのタームを取得
                  $terms = get_the_terms(get_the_ID(), 'skill');

                  if (!empty($terms) && !is_wp_error($terms)) {
                      // タームのスラッグを配列に収集
                      $term_slugs = array_map(function($term) {
                          return $term->slug;
                      }, $terms);

                      // スラッグをスペース区切りで結合
                      $term_classes = implode(' ', $term_slugs);}?>
                  <a href="<?php the_permalink(); ?>" data-slug="<?php echo $term_classes; ?>" class="p-works__card js-post__works">
                    <div class="p-works__card-wrapper">
                      <div class="c-card">
                        <img
                          src="<?php echo get_field('circle-image')['url']; ?>"
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
                        <?php the_title(); ?>
                      </p>
                      <p class="p-works__card-caption">
                          <?php $terms = get_the_terms(get_the_ID(), 'skill'); ?>
                            <?php if (!empty($terms) && !is_wp_error($terms)) {
                              $term_names = array_map(function($term) {
                                  return $term->name;
                              }, $terms);
                              $term_names_string = implode(' / ', $term_names);
                              echo '<p class="p-works__card-caption ">使用スキル:' . $term_names_string . '</p>';}?>
                      </p>
                      <p class="p-works__card-caption">制作時間:<?php echo get_field('time'); ?></p>
                    </div>
                  </a>
                  <?php endwhile; ?>
                <?php endif; ?>
        </div>
        <div class="p-works__button-wrapper">
          <a href="<?php echo home_url(); ?>" class="c-button"> トップページへ戻る </a>
        </div>
      </div>
    </section>
    <!-- Worksここまで -->

<?php get_footer(); ?>
