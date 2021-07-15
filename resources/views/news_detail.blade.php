<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>newsdetail</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/menu.css">
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
        <li class="right-first"><a href="/">企業商品紹介</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <!-- ここからニュース詳細 -->
    <div>
      <!-- ニュースサムネ -->
      <div>
        <!-- <img src="{{$news[0]->image_path}}" alt="test"> -->
        <p>{{$news[0]->image_path}}</p>
      </div>
      <!-- ニュース詳細 -->
      <div>
        <h2>{{$news[0]->title}}</h2>
        <p>{{$news[0]->content}}</p>
      </div>
    </div>
    <!-- ここまで -->
    <div class="tamadora-button">
      <p><img src="images/tamadora.png" alt="たまドラ"></p>
      <p><a href="/">トップへ戻る</a></p>
    </div>
  </main>
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
          <li><a href="#"><img src="images/Twitter social icons - rounded square - blue.png" alt="twitterアイコン"></a></li>
          <li><a href="#"><img src="images/yt_icon_rgb.png" alt="youtubeアイコン"></a></li>
        </div>
      </ul>
    </nav>
  </footer>
</body>

</html>