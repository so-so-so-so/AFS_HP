const swiper = new Swiper('.mySwiper', {
    slidesPerView: 1, // 何枚のスライドを表示するか
    centeredSlides: true, // スライドのアイテムを中心表示にする
    spaceBetween: 30, // スライドとスライドの間を指定
    loop: true, // スライドショーがループする
    // 下のページネーション(小さい丸)を制御する設定
    pagination: {
        // 表示したい箇所のセレクタを指定
        el: '.swiper-pagination',
        // 丸をクリックできるようにする
        clickable: true,
        // ページネーションの表示のタイプを変える
        type: 'bullets', // 'bullets'(小さい丸) | 'fraction'(数字) | 'progressbar'(プログレスバー) | 'custom'
    },
    // ナビゲーション
    navigation: {
        // 次へボタンを表示するセレクタを指定する
        nextEl: '.swiper-button-next',
        // 前へボタンを表示するセレクタを指定する
        prevEl: '.swiper-button-prev',
    },
    // スクロールバーを表示する (ループと相性が悪い)
    /*
    scrollbar: {
        // 表示したい箇所のセレクタを指定
        el: '.swiper-scrollbar',
        // スクロールをドラッグできるようになる
        draggable: true,
    },
    */
    // 自動で次のスライドにする機能
    autoplay: {
        // 5000ミリ秒 (5秒)で次のスライドにする
        delay: 5000,
    },
});
