const skills_swiper = new Swiper(".p-skills__swiper", {
  loop: false,
  spaceBetween: 25,
  slidesPerView: 1.6,

  speed: 1000,
  breakpoints: {
    600: {
      slidesPerView: 2.3,
      spaceBetween: 64,
    },
    850: {
      slidesPerView: 3.3,
      spaceBetween: 64,
    },
  },
  // Navigation arrows
  navigation: {
    nextEl: ".p-skills__swiper-button-next",
    prevEl: ".p-skills__swiper-button-prev",
  },
});

// 自作ボタンクリックでスワイプ
const $prevButton = $("#prevButton");
const $nextButton = $("#nextButton");

$prevButton.on("click", function () {
  skills_swiper.slidePrev();
});
$nextButton.on("click", function () {
  skills_swiper.slideNext();
});

// スワイパーのボタンで最初と最後のときにボタンを薄くする。
skills_swiper.on("init", buttonDisabled);
buttonDisabled();

function buttonDisabled() {
  if (skills_swiper.isBeginning) {
    $prevButton.addClass("disabled");
  } else {
    $prevButton.removeClass("disabled");
  }

  if (skills_swiper.isEnd) {
    $nextButton.addClass("disabled");
  } else {
    $nextButton.removeClass("disabled");
  }
}

skills_swiper.on("slideChange", buttonDisabled);
skills_swiper.on("reachBeginning", buttonDisabled);
skills_swiper.on("reachEnd", buttonDisabled);

// スクロールでヘッダーに白透明背景
$(document).ready(function () {
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 100) {
      $(".l-header").addClass("js-header-scroll");
    } else {
      $(".l-header").removeClass("js-header-scroll");
    }
  });
});

//ハンバーガーメニュークリックでばつ印、メニュースライドイン
$(".l-header__drawer").on("click", function () {
  $(this).toggleClass("is-checked");
  $(".l-header-drawer__content").toggleClass("is-checked");
});

// スクロールでふわっと表示
const intersectionObserver = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      entry.target.classList.add("is-in-view");
    }
  });
});

const inViewItems = document.querySelectorAll(".fade-in-up");
inViewItems.forEach(function (inViewItem) {
  intersectionObserver.observe(inViewItem);
});

// ローディング

// セッションストレージからフラグを取得
const isFirstLoad = sessionStorage.getItem("isFirstLoad");

// ページの読み込みが完了したときに実行される関数
window.addEventListener("load", function () {
  // フラグが 'true' でない場合（初回アクセス時またはフラグが削除された場合）
  // ローディング画面を表示
  const loadingElement = document.querySelector(".c-loading");
  loadingElement.classList.add("c-loading__active");

  // 2秒後にローディング画面を非表示にする
  setTimeout(function () {
    // ローディング画面を非表示にする
    loadingElement.classList.remove("c-loading__active");
    // コンテンツ要素を表示
    const contentsElement = document.querySelector(".body-container.hidden");
    contentsElement.classList.remove("hidden"); // hiddenクラスを取り除くことでコンテンツを表示
    // セッションストレージにフラグを保存
    sessionStorage.setItem("isFirstLoad", "true");
  }, 2000);
  setTimeout(function () {
    loadingElement.style.display = "none"; // 非表示にする
  }, 2500);
});

// メインタイトルを光らせて出現
function GlowAnimeControl() {
  $(".js-glowAnime").each(function () {
    var elemPos = $(this).offset().top - 50;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass("glow");
    } else {
      $(this).removeClass("glow");
    }
  });
}
$(window).scroll(function () {
  GlowAnimeControl();
});

$(window).on("load", function () {
  var element = $(".js-glowAnime");
  element.each(function () {
    var text = $(this).html(); // HTMLとして取得する
    var textbox = "";
    var delay = 0.1; // アニメーションの初期遅延

    text.split(/(<br\s*\/?>|.)/).forEach(function (t, i) {
      if (t === "") return; // 空文字はスキップ

      if (t.match(/<br\s*\/?>/)) {
        // <br /> タグの場合はそのまま追加
        textbox += t;
      } else {
        // 文字の場合はアニメーションを付与
        textbox +=
          '<span style="animation-delay:' + delay + 's;">' + t + "</span>";
        delay += 0.1; // 遅延を増やす
      }
    });

    $(this).html(textbox);
  });

  GlowAnimeControl();
});

// skillごとに投稿表示
$(document).ready(function () {
  $(".js-post__works").addClass("is-active");
  $(".c-skill-tag").on("click", function (event) {
    event.preventDefault();
    const type = $(this).data("type");
    $(".js-post__works").each(function () {
      const slug = $(this).data("slug");
      const slugArray = slug.split(' ');

      if (slugArray.includes(type)) {
        $(this).addClass("is-active");
      } else {
        $(this).removeClass("is-active");
      }
    });
  });
});
