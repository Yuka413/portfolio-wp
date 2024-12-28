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

    <!-- 制作実績ここから -->
    <section class="p-site">
      <div class="p-site__inner u-inner">
        <div class="p-site__mv fade-in-up">
        <?php $mockup_image= get_field('mockup');?>
          <img src="<?php echo $mockup_image['url']; ?>" alt="" />
        </div>
        <div class="p-site__body">
          <h1 class="p-site__title"><?php the_title(); ?></h1>

          <table class="p-site__table">
            <tbody>
                <?php if(get_field('url')): ?>
              <tr>
                <th>サイトURL</th>
                <td><a target="_blank" href="<?php echo get_field('url'); ?>" class="p-site__url"><?php echo get_field('url'); ?></a></td>
              </tr>
                <?php endif ?>
                <?php if(get_field('git')):?>
              <tr>
                <th>ソースコード</th>
                <td><a target="_blank" href="<?php echo get_field('git'); ?>" class="p-site__url"><?php echo get_field('git'); ?></a></td>
              </tr>
                <?php endif; ?>
              <tr>
                <th>使用スキル</th>
                <td>
                <?php $terms = get_the_terms(get_the_ID(), 'skill'); ?>
                  <?php if (!empty($terms) && !is_wp_error($terms)) {
                    $term_names = array_map(function($term) {
                        return $term->name;
                    }, $terms);
                    $term_names_string = implode(' / ', $term_names);
                    echo '<div class="c-skill-tag">' . $term_names_string . '</div>';
                }
                ?>
                </td>
              </tr>
              <tr>
                <th>制作時間</th>
                <td><?php echo get_field('time'); ?></td>
              </tr>
              <tr>
                <th>制作概要</th>
                <td>
                  <?php echo get_field('overview'); ?>
                </td>
              </tr>

            </tbody>
          </table>
        </div>

        <div class="p-site__button">
          <a href="<?php echo get_post_type_archive_link('works'); ?>" class="c-button"> 制作実績一覧へ戻る </a>
        </div>
      </div>
    </section>
    <!-- 制作実績ここまで -->

    <!-- footerここから -->
    <?php get_footer(); ?>
    <!-- footerここまで -->
