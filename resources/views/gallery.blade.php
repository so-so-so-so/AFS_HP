<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" /> -->
        <link href="css/gallery.css" rel="stylesheet" >
        <link href="css/modal.css" rel="stylesheet">
        <script></script>
        <script src="https://unpkg.com/alpinejs" defer></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script type="javascript" href="js/modal.js"></script>  
    </head>
    <body>
        <h1>ギャラリー</h1>
        <div class="gallery swiper-slide">
        @for($i = 0; $i < 9; $i++)
        <div>
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

        <button>戻る</button>
    </body>
</html>