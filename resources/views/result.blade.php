<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <header>
        
        </header>
        
        <h2>大会結果</h2>

        <div><img src="img/tournament.png" alt="トーナメント表"></div>

        <div>
            <img src="img/icon.png" alt="top8">
            <img src="img/icon.png" alt="top8">
            <img src="img/icon.png" alt="top8">
            <img src="img/icon.png" alt="top8">
            <img src="img/icon.png" alt="top8">
            <img src="img/icon.png" alt="top8">
            <img src="img/icon.png" alt="top8">
            <img src="img/icon.png" alt="top8">
        </div>

        <div>
            <h2>決勝戦</h2>
            <div>
                <img src="img/icon.png" alt="">
                <p>○○</p>
            </div>
            
            <p>VS</p>

            <div>
                <img src="img/icon.png" alt="">
                <p>△△</p>        
            </div>
        </div>

        <div>
            <h2>準決勝第一試合</h2>
            <div>
                <img src="img/icon.png" alt="">
                <p>○○</p>
            </div>
            
            <p>VS</p>

            <div>
                <img src="img/icon.png" alt="">
                <p>△△</p>        
            </div>
        </div>

        <div>
            <h2>準決勝第二試合</h2>
            <div>
                <img src="img/icon.png" alt="">
                <p>○○</p>
            </div>
            
            <p>VS</p>

            <div>
                <img src="img/icon.png" alt="">
                <p>△△</p>        
            </div>
        </div>

        <div>
            <h2>準々決勝第一試合</h2>
            <div>
                <img src="img/icon.png" alt="">
                <p>○○</p>
            </div>
            
            <p>VS</p>

            <div>
                <img src="img/icon.png" alt="">
                <p>△△</p>        
            </div>
        </div>

        <div>
            <h2>準々決勝第二試合</h2>
            <div>
                <img src="img/icon.png" alt="">
                <p>○○</p>
            </div>
            
            <p>VS</p>

            <div>
                <img src="img/icon.png" alt="">
                <p>△△</p>        
            </div>
        </div>

        <div>
            <h2>準々決勝第三試合</h2>
            <div>
                <img src="img/icon.png" alt="">
                <p>○○</p>
            </div>
            
            <p>VS</p>

            <div>
                <img src="img/icon.png" alt="">
                <p>△△</p>        
            </div>
        </div>

        <div>
            <h2>準々決勝第四試合</h2>
            <div>
                <img src="img/icon.png" alt="">
                <p>○○</p>
            </div>
            
            <p>VS</p>

            <div>
                <img src="img/icon.png" alt="">
                <p>△△</p>        
            </div>
        </div>

        <h2>予選結果</h2>
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
        <h3>{{$group[$i]}}グループ</h3>
        <div>
            @for($n = 0; $n < 8; $n++)
            ほげほげ,
            @endfor
        </div>
        @endfor

        <h2>上位者インタビュー</h2>

        <div>
            <img src="img/icon.png" alt=""><p>ほげほげ</p>
            <p>hoge...................................</p>
        </div>
        <div>
            <img src="img/icon.png" alt=""><p>ほげほげ</p>
            <p>hoge...................................</p>
        </div>
        <div>
            <img src="img/icon.png" alt=""><p>ほげほげ</p>
            <p>hoge...................................</p>
        </div>

        <footer>
        
        </footer>
    </body>
</html>