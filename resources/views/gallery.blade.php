<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" /> -->
  <link href="css/gallery.css" rel="stylesheet">
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/menu.css">
  <link href="css/modal.css" rel="stylesheet">
  <script></script>
  <script src="https://unpkg.com/alpinejs" defer></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script type="javascript" href="js/modal.js"></script>
</head>

<body>
  <header>
    <div class="logo">
      <img src="images/aeonxhal_logo.png" alt="サイトロゴ">
    </div>
    <nav class="header-navigation">
      <ul class="left">
        <li class="left-first"><a href="/">HOME</a></li>
        <li>
        </li>
      </ul>
      <ul class="right">
        <li class="right-first"><a href="https://www.aeoncredit.co.jp/" target="_blank" rel=”noopener noreferrer”>企業商品紹介</a></li>
      </ul>
    </nav>
  </header>

  <h1>ギャラリー</h1>
  <div class="gallery swiper-slide">
    @for($i = 0; $i < 9; $i++) <div class="img-box">
      <img src="images/custom.png" alt="sample">
  </div>
  @endfor
  </div>
  <div class="swiper-button-next w-10 h-10 p-2 text-black bg-white rounded-full shadow">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
  </div>
  <div class="swiper-button-prev w-10 h-10 p-2 text-black bg-white rounded-full shadow">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
  </div>
  <div class="swiper-pagination"></div>

  <div class="return-button">
    <button>戻る</button>
  </div>
  <footer>
    <nav class="footer-navigation">
      <ul class="left">
        <li><a href="#">企業商品紹介</a></li>
        <li><a href="#">大会結果</a></li>
        <li><a href="#">ギャラリー</a></li>
        <li><a href="#">大会ダイジェストムービー</a></li>
        <li><a href="#">ニュース</a></li>
        <li><a href="#">大会規約</a></li>
      </ul>
      <ul class="right">
        <li><a href="#">大会ランディングページ</a></li>
        <div>
          <li><a href="#"><img class="twitter" src="images/Twitter social icons - rounded square - blue.png" alt="twitterアイコン"></a></li>
          <li><a href="#"><img class="youtube" src="images/yt_icon_rgb.png" alt="youtubeアイコン"></a></li>
        </div>
      </ul>
    </nav>
  </footer>
</body>

</html>