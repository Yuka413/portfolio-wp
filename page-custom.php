<?php 
/**
 *Template Name: Aboutカスタムページ
 */
?>

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

    <!-- About me ここから -->
    <section class="p-about u-about__bg-color u-top__padding">
      <div class="p-about__inner u-inner">
        <div class="c-title">
          <h1 class="c-title__container u-title__color fade-in-up">
            <span class="c-title__main">
              About me <span class="u-title__marker"></span>
            </span>
            <span class="c-title__sub">わたしについて</span>
          </h1>
        </div>
        <div class="p-about__body">
          <div class="p-about__image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/about-me.png" alt="" />
          </div>
          <div class="p-about__content">
            <div class="p-about__content-top">
              <div class="p-about__content-name">大内 優果</div>
              <a href="https://x.com/__yukke48" class="c-sns-x" target="_blank"
                >𝕏</a
              >
            </div>
            <div class="p-about__content-text">
              2000年生まれ、岐阜県出身。
              web制作を知り、2024年8月よりオンラインスクールを受講しました。<br />
              「もっとコーディングを極めたい!1日中コーディングしても飽きない!」
              と思うくらい、毎日楽しく勉強しています。<br />

              趣味は音楽を聴くこと・料理をすることです。
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About me ここまで -->

    <!-- Strengthここから -->
    <section class="p-strength">
      <div class="p-strength__inner u-inner">
        <div class="c-title">
          <h1 class="c-title__container fade-in-up">
            <span class="c-title__main">Strength</span>
            <span class="c-title__sub u-title-sub__padding">わたしの強み</span>
          </h1>
        </div>
        <ul class="p-strength__lists">
          <li class="p-strength__list">
            <div class="c-strength-content">
              <h2 class="c-strength-content__title">
                <span class="c-strength-content__number">1.</span>
                <span class="c-strength-content__title-text"
                  ><mark class="c-strength-content__mark">他人を優先し、</mark
                  ><br class="u-sp__hidden" /><mark
                    class="c-strength-content__mark"
                    >信頼を築く力</mark
                  ></span
                >
              </h2>
              <p class="c-strength-content__body">
                人のために行動することを大切にしています。相手の気持ちやニーズを考えながらサポートすることで、「大内さんがいる日は安心する」と言って頂けるまでに周囲から信頼を得ることができました。いつでも余裕を持った行動をすることで、頼られた時にすぐ動けるようにしています。
              </p>
            </div>
          </li>
          <li class="p-strength__list">
            <div class="c-strength-content">
              <h2 class="c-strength-content__title">
                <span class="c-strength-content__number">2.</span>
                <span class="c-strength-content__title-text"
                  ><mark class="c-strength-content__mark">地道な努力を</mark
                  ><br class="u-sp__hidden" /><mark
                    class="c-strength-content__mark"
                    >積み重ねる継続力</mark
                  ></span
                >
              </h2>
              <p class="c-strength-content__body">
                仕事終わりに3〜4時間、休日は8時間の勉強を2024年8月から続けています。途中で諦めることなく、目標を達成するために行動し続けられる継続力は私の最大の強みです。成長した自分が必ず未来にいると思うと、何よりワクワクします。
              </p>
            </div>
          </li>
          <li class="p-strength__list">
            <div class="c-strength-content">
              <h2 class="c-strength-content__title">
                <span class="c-strength-content__number">3.</span>
                <span class="c-strength-content__title-text"
                  ><mark class="c-strength-content__mark">計画性と</mark
                  ><br class="u-sp__hidden" /><mark
                    class="c-strength-content__mark"
                    >柔軟な対応力</mark
                  ></span
                >
              </h2>
              <p class="c-strength-content__body">
                タスクの優先順位を見極め、計画を立てて効率的に物事を進めることを得意としています。計画通りにいかないイレギュラーな事態が起きた時は、必要に応じて妥協する点を見極めたり、別の解決策を考えることで、必ずタスクの締切は守ることを大事にしています。
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!-- Strengthここまで -->

    <!-- visionsここから -->
    <section class="p-visions">
      <div class="p-visions__inner u-inner">
        <div class="c-title">
          <h1 class="c-title__container fade-in-up">
            <span class="c-title__main">Vision</span>
            <span class="c-title__sub">将来像</span>
          </h1>
        </div>
        <div class="p-visions__goal">
          <div class="p-visions__goal-text-main">目標</div>
          <div class="p-visions__goal-text-sub">
            UXを意識し、<br />利用者に楽しい時間を提供できる<br
              class="u-sp__hidden--vision"
            />フロントエンドエンジニアになる
          </div>
        </div>
        <div class="p-visions__container">
          <div class="c-timeline p-visions__timeline">
            <div class="c-timeline__wrapper">
              <div class="c-timeline__time">1年後</div>
              <div class="c-timeline__content">
                <div class="c-timeline__content-text">
                  コーダーとしてweb制作会社に転職する。
                </div>
              </div>
            </div>
          </div>
          <div class="c-timeline p-visions__timeline">
            <div class="c-timeline__wrapper c-timeline__wrapper--reverse">
              <div class="c-timeline__time--reverse">2年後</div>
              <div class="c-timeline__content c-timeline__content--reverse">
                <div class="c-timeline__content-text">
                  JavaScript, phpの勉強を進め、デザインの雰囲気にあった動きのあるサイトを作れるようになる。
                </div>
              </div>
            </div>
          </div>
          <div class="c-timeline p-visions__timeline">
            <div class="c-timeline__wrapper">
              <div class="c-timeline__time">3年後</div>
              <div class="c-timeline__content">
                <div class="c-timeline__content-text">
                  UI/UX設計の知識やスキルを身に付け、ユーザーを意識したサイト作成ができるようになる。
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- visionsここまで -->

    <!-- Worksここから -->
    <section class="p-works">
      <div class="p-works__inner u-inner">
        <div class="c-title">
          <h1 class="c-title__container fade-in-up">
            <span class="c-title__main">Works</span>
            <span class="c-title__sub">制作物</span>
          </h1>
        </div>
        <div class="p-works__cards">
          <?php $args = array(
            'post_type' => 'works',
            'post__in' => array(41, 43, 40),
            'orderby' => 'post__in',
          );
          $works_query = new WP_query($args); ?>
          <?php if($works_query->have_posts()): ?>
            <?php while($works_query->have_posts()): ?>
              <?php $works_query->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="p-works__card">
            <div class="p-works__card-wrapper">
              <div class="c-card">
                <?php $circle_image = get_field('circle-image'); ?>
                <img
                  src="<?php echo $circle_image['url']; ?>"
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
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
        <div class="p-works__button-wrapper">
          <a href="<?php echo get_post_type_archive_link('works'); ?>" class="c-button"> すべて見る </a>
        </div>
      </div>
    </section>
    <!-- worksここまで -->

    <!-- footerここから -->
    <?php get_footer(); ?>
    <!-- footerここまで -->