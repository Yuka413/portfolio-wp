// スキルスワイパー
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

// mv切り替え
document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll(".p-mv__card"); // 全ての投稿を取得
  let currentIndex = 0; // 現在表示中の投稿のインデックス

  function showNextCard() {
    if (cards.length === 0) return;
    // 現在の投稿を非表示
    cards[currentIndex].style.display = "none";

    // 次の投稿にインデックスを更新（最後に到達したら最初に戻る）
    currentIndex = (currentIndex + 1) % cards.length;

    // 次の投稿を表示
    cards[currentIndex].style.display = "block";
  }

  // 最初の投稿を表示
  if (cards.length > 0) {
    cards[currentIndex].style.display = "block";
  } else {
    console.error("投稿が見つかりませんでした。: .p-mv__card");
    return;
  }

  // 投稿の切り替えを開始
  function startSlideshow() {
    intervalId = setInterval(showNextCard, 4000); // 3秒ごとに切り替え
  }

  // 投稿の切り替えを停止
  function stopSlideshow() {
    clearInterval(intervalId);
  }

  // 各投稿にホバーイベントを追加
  cards.forEach((card) => {
    card.addEventListener("mouseover", stopSlideshow); // ホバー時に停止
    card.addEventListener("mouseout", startSlideshow); // ホバー解除時に再開
  });

  // スライドショーを開始
  startSlideshow();
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

// // ローディング画面
const sessionKey = "accesed";
const sessionValue = true; // Boolean型

if (!sessionStorage.getItem(sessionKey)) {
  // 1回だけ実行させたい処理を書く（今回はローディングの処理）
  $(window).on("load", function () {
    setTimeout(function () {
      $("#js-loading").fadeOut();
      splitText();
      GlowAnimeControl();
    }, 1000);
  });

  // sessionStorageにBoolean値を文字列として保存
  sessionStorage.setItem(sessionKey, JSON.stringify(sessionValue));
} else {
  // sessionKey が既に存在する場合は、ローディングを即座に非表示
  $("#js-loading").hide();
  splitText();
  GlowAnimeControl();
}

function splitText() {
  var element = $(".js-glowAnime");
  element.each(function () {
    var text = $(this).html(); // HTMLとして取得する
    var textbox = "";
    var delay = 0; // アニメーションの初期遅延

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
}

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
const sessionKeyMv = "glowAnimeShown";

$(window).scroll(function () {
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
      const slugArray = slug.split(" ");

      if (slugArray.includes(type)) {
        $(this).addClass("is-active");
      } else {
        $(this).removeClass("is-active");
      }
    });
  });
});
