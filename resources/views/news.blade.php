<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/news.css">
  <link rel="stylesheet" href="css/menu.css">
  <title>news</title>
</head>

<body>
  <header>
    <div class="logo">
      <img src="images/aeonxhal_logo.png" alt="サイトロゴ">
    </div>
    <nav class="header-navigation">
      <ul class="left">
        <li class="left-first"><a href="#">HOME</a></li>
        <li>
          <ul class="left-second">
            <li><a href="#">大会ルール</a></li>
            <li><a href="#">賞品</a></li>
            <li><a href="#">ゲスト</a></li>
            <li><a href="#">大会結果</a></li>
            <li><a href="#">ギャラリー</a></li>
            <li><a href="#">大会ダイジェストムービー</a></li>
            <li><a href="#">ニュース</a></li>
          </ul>
        </li>
      </ul>
      <ul class="right">
        <li><a href="#">企業商品紹介</a></li>
        <li><a href="#"><img src="images/Twitter social icons - rounded square - blue.png" alt="twitterアイコン"></a></li>
        <li><a href="#"><img src="images/yt_icon_rgb.png" alt="youtubeアイコン"></a></li>
      </ul>
    </nav>
  </header>
  <main>
    <div class="news">
      <h1 id="news">ニュース</h1>
      @foreach($news as $val)
      <div class="news-list">
        <small class="date">{{$val->released_at}}</small>
        <div class="titles">
          <p class="thumbnail"><img src="{{$val->image_path}}" alt="image"></p>
          <h2>{{$val->title}}</h2>
        </div>
        <form method="POST" action="/detail">
          @csrf
          <input name="id" type="hidden" value="{{$val->id}}">
          <input type="submit" value="詳細へ">
        </form>
      </div>
      @endforeach
    </div>
    <div class="tamadora-button">
      <p><img src="images/tamadora.png" alt="たまドラ"></p>
      <p><a href="/">トップへ戻る</a></p>
    </div>
  </main>
  <footer>
    <nav class="footer-navigation">
      <ul class="left">
        <li><a href="/">企業商品紹介</a></li>
        <li><a href="/">大会結果</a></li>
        <li><a href="/">ギャラリー</a></li>
        <li><a href="/">大会ダイジェストムービー</a></li>
        <li><a href="/">ニュース</a></li>
        <li><a href="/">大会規約</a></li>
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