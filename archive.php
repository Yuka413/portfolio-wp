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
      href="../public/assets/img/favicon.png"
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
        <a href="#" class="l-header__logo">
          <img
            src="../public/assets/img/logo.png"
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
              <a href="" class="l-header-drawer__content-link-ja">制作実績</a>
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
            <a href="" class="c-skill-tag c-skill-tag__color--html">HTML</a>
            <a href="" class="c-skill-tag c-skill-tag__color--css">CSS</a>
            <a href="" class="c-skill-tag c-skill-tag__color--jquery">jQuery</a>
            <a href="" class="c-skill-tag c-skill-tag__color--wordpress">Wordpress</a>
            <a href="" class="c-skill-tag c-skill-tag__color--figma">Figma</a>
          </div>
        </div>
        <div class="p-works__cards">
          <a class="p-works__card">
            <div class="p-works__card-wrapper">
              <div class="c-card">
                <img
                  src="../public/assets/img/card-daymaga.png"
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
                【架空】 Web系企業のコーポレートサイト
              </p>
              <p class="p-works__card-caption">HTML/CSS/jQUery/Wordpress</p>
              <p class="p-works__card-caption">制作時間：約２週間</p>
            </div>
          </a>
          <a class="p-works__card">
            <div class="p-works__card-wrapper">
              <div class="c-card">
                <img
                  src="../public/assets/img/card-oha.png"
                  alt=""
                  class="c-card__body-image"
                />
                <div class="c-card__modal">
                  <p class="c-card__modal-text">詳しく見る</p>
                </div>
              </div>
            </div>
            <div class="p-works__card-description">
              <p class="p-works__card-title">【架空】スマホアプリOha!のLP</p>
              <p class="p-works__card-caption">HTML/CSS/jQUery/Wordpress</p>
              <p class="p-works__card-caption">制作時間：約20日</p>

            </div>
          </a>
          <a class="p-works__card">
            <div class="p-works__card-wrapper">
              <div class="c-card">
                <img
                  src="../public/assets/img/card-sobolon.png"
                  alt=""
                  class="c-card__body-image"
                />
                <div class="c-card__modal">
                  <p class="c-card__modal-text">詳しく見る</p>
                </div>
              </div>
            </div>
            <div class="p-works__card-description">
              <p class="p-works__card-title">アクセサリーブランドサイトのLP</p>
              <p class="p-works__card-caption">HTML/CSS/jQUery</p>
              <p class="p-works__card-caption">制作時間：約10日</p>

            </div>
          </a>
          <a class="p-works__card">
            <div class="p-works__card-wrapper">
              <div class="c-card">
                <img
                  src="../public/assets/img/card-portfolio.png"
                  alt=""
                  class="c-card__body-image"
                />
                <div class="c-card__modal">
                  <p class="c-card__modal-text">詳しく見る</p>
                </div>
              </div>
            </div>
            <div class="p-works__card-description">
              <p class="p-works__card-title">ポートフォリオサイト</p>
              <p class="p-works__card-caption">
                HTML/CSS/jQUery/Wordpress/Figma
              </p>
              <p class="p-works__card-caption">制作時間：約20日</p>
            </div>
          </a>
        </div>
        <div class="p-works__button-wrapper">
          <a href="" class="c-button"> トップページへ戻る </a>
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
            <a href="#" class="l-footer__logo">
              <img src="../public/assets/img/logo.png" alt="" />
            </a>
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
    <!-- footerここまで -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
