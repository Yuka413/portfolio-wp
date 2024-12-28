     <div class="c-background__wave c-background__wave--reverse">
        <footer class="l-footer">
          <div class="l-footer__inner u-inner">
            <div class="l-footer__contents">
              <span class="l-footer__text">
                ご覧いただき、<wbr />ありがとうございました！
              </span>
              <a href="<?php echo home_url(''); ?>" class="l-footer__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" />
              </a>
            </div>
            <div class="l-footer__copyright">
              <small class="l-footer__copyright-text"
                >&copy;2024 Yuka's Portfolio</small
              >
              <div class="c-link">
                <a
                  href="https://x.com/__yukke48"
                  class="c-sns-x c-sns-x__small"
                  target="_blank"
                  >𝕏</a
                >
                <a
                  href="https://github.com/Yuka413"
                  class="c-github c-github__small"
                  target="_blank"
                  ><i class="fa-brands fa-github c-github__icon c-github__icon--small"></i></a
                >
                </div>
            </div>
          </div>
        </footer>
      </div>
    <!-- footerここまで -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php wp_footer();?>
  </body>
</html>