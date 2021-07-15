<!DOCTYPE html>
<html>
    <head>
        <title>
            大会結果
        </title>

        <link rel="stylesheet" href="css/sanitize.css">
        <link rel="stylesheet" href="css/result.css">
        <link rel="stylesheet" href="css/menu.css">
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

        <h1>大会結果</h1>

        <div class="tournament_area"><img src="images/tournament.png" alt="トーナメント表"></div>

        <div class="higher">
            <div>
                <img src="images/icon.png" alt="top8">
                <small></small>
            </div>
            <div>
                <img src="images/icon.png" alt="top8">
                <small></small>
            </div>
            <div>
                <img src="images/icon.png" alt="top8">
                <small></small>
            </div>
            <div>
                <img src="images/icon.png" alt="top8">
                <small></small>
            </div>
            <div>
                <img src="images/icon.png" alt="top8">
                <small></small>
            </div>
            <div>
                <img src="images/icon.png" alt="top8">
                <small></small>
            </div>
            <div>
                <img src="images/icon.png" alt="top8">
                <small></small>
            </div>
            <div>
                <img src="images/icon.png" alt="top8">
                <small></small>
            </div>
        </div>

        

        <h2>決勝戦</h2>
        <div class="tournament_result">
            <div>
            <img src="images/icon.png" alt="top8">
                <p>○○</p>
            </div>
            
            <p>VS</p>

            <div>
            <img src="images/icon.png" alt="top8">
                <p>△△</p>        
            </div>
        </div>

        <h2>準決勝第一試合</h2>
        <div class="tournament_result">
            <div>
            <img src="images/icon.png" alt="top8">
                <p>○○</p>
            </div>
            
            <p>VS</p>

            <div>
            <img src="images/icon.png" alt="top8">
                <p>△△</p>        
            </div>
        </div>

        <h2>準決勝第二試合</h2>
        <div class="tournament_result">
            <div>
            <img src="images/icon.png" alt="top8">
                <p>○○</p>
            </div>
            
            <p>VS</p>

            <div>
            <img src="images/icon.png" alt="top8">
                <p>△△</p>        
            </div>
        </div>

        <h2>準々決勝第一試合</h2>
        <div class="tournament_result">
            <div>
            <img src="images/icon.png" alt="top8">
                <p>○○</p>
            </div>
            
            <p>VS</p>

            <div>
            <img src="images/icon.png" alt="top8">
                <p>△△</p>        
            </div>
        </div>

        <h2>準々決勝第二試合</h2>
        <div class="tournament_result">
            <div>
            <img src="images/icon.png" alt="top8">
                <p>○○</p>
            </div>
            
            <p>VS</p>

            <div>
            <img src="images/icon.png" alt="top8">
                <p>△△</p>        
            </div>
        </div>

        <h2>準々決勝第三試合</h2>
        <div class="tournament_result">
            <div>
            <img src="images/icon.png" alt="top8">
                <p>○○</p>
            </div>
            
            <p>VS</p>

            <div>
            <img src="images/icon.png" alt="top8">
                <p>△△</p>        
            </div>
        </div>

        <h2>準々決勝第四試合</h2>
        <div class="tournament_result">
            <div>
            <img src="images/icon.png" alt="top8">
                <p>○○</p>
            </div>
            
            <p>VS</p>

            <div>
            <img src="images/icon.png" alt="top8">
                <p>△△</p>        
            </div>
        </div>

        <h2 class="">予選結果</h2>
        @php
        $group = [
            1 => 'A',
            2 => 'B',
            3 => 'C',
            4 => 'D',
            5 => 'E',
            6 => 'F',
            7 => 'G',
            8 => 'H',
        ];
        @endphp
        @for($i = 1; $i < 9; $i++)
        <div class="qualifyin_gresult">
            <h3>{{$group[$i]}}グループ</h3>
            <div>
                @for($n = 0; $n < 8; $n++)
                ほげほげ,
                @endfor
            </div>
            @endfor
        </div>

        <h2>上位者インタビュー</h2>

        <div class="interview">
            <p><img src="images/icon.png" alt="top8"></p>
            <p>hoge...................................</p>
        </div>
        <div class="interview">
            <p><img src="images/icon.png" alt="top8"></9>
            <p>hoge...................................</p>
        </div>
        <div class="interview">
            <p><img src="images/icon.png" alt="top8"></p>
            <p>hoge...................................</p>
        </div>

        <footer>
            <nav class="footer-navigation">
                <ul class="left">
                    <li><a href="#">・企業商品紹介</a></li>
                    <li><a href="result">・大会結果</a></li>
                    <li><a href="#">・ギャラリー</a></li>
                    <li><a href="#">・大会ダイジェストムービー</a></li>
                    <li><a href="#">・ニュース</a></li>
                    <li><a href="#">・大会規約</a></li>
                </ul>
                <ul class="right">
                    <li><a href="#">・大会ランディングページ</a></li>
                    <div>
                        <li><a href="#"><img src="images/Twitter social icons - rounded square - blue.png" alt="twitterアイコン"></a></li>
                        <li><a href="#"><img src="images/yt_icon_rgb.png" alt="youtubeアイコン"></a></li>
                    </div>
                </ul>
            </nav>
        </footer>
    </body>
</html>