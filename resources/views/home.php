<?php include "header.php"; ?>
<!-- Banner -->
<div class="banner">
    <div class="grid wide">
        <div class="slideshow">
            <div class="slideshow-list">
                <div class="slideshow-item active">
                    <a href="" class="slideshow-link">
                        <img class="slideshow-img" src="img/anh4.jpg" alt="">
                        <div class="slideshow-info ">
                        </div>
                    </a>
                </div>
                <div class="slideshow-btn">
                    <span class="slideshow-btn-item btn-prev">
                        <i class="slideshow-btn-left fa-solid fa-angle-left"></i>
                    </span>
                    <span class="slideshow-btn-item btn-next">
                        <i class="slideshow-btn-right fa-solid fa-angle-right"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->
<!-- Content -->
<div class="container">
    <div class="grid wide">
        <div class="top-title">
            <h2 class="title-section">BẢNG XẾP HẠNG TUẦN NÀY</h2>
            <div class="count-time">
                <span class="content-time">Kết thúc trong: </span>
                <ul class="countdown-deal">
                    <li>
                        <span class="day">4</span>
                    </li>
                    <li>
                        <span class="hours">07</span>
                    </li>
                    <li>
                        <span class="minutes">11</span>
                    </li>
                    <li>
                        <span class="seconds">56</span>
                    </li>

                </ul>
            </div>
        </div>
        <div class="row sm-gutter">
            <?php foreach ($quiz as $quizz) : ?>
                <div class="col l-2-4 c-6 m-4">
                    <a href="/php" class="home-product-item">
                        <div class="home-product-item__img">
                            <img class="product-item-img" src="images/<?= $quizz->image ?>" alt="">
                        </div>
                        <h3 class="home-product-item__name">
                            <?= $quizz->name_quiz ?>
                        </h3>
                        <div class="home-product-item__favorite">
                            <span class="home-product__hover-favorite">
                                Yêu thích
                            </span>
                            <i class="home-product-item__favorite-icon fa-solid fa-heart"></i>
                        </div>
                        <div class="home-product-icon-action">
                            <div class="icon-action add-to-cart">
                                <button>Thi nhanh</button>
                            </div>
                            <div class="icon-action icon-action-view">
                                <button>Thi thử</button>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>

        </div>
        <div class="container-banner">
            <div class="container-img ">
                <div class="container-img-item ">
                    <a href="" class="container-img-link">
                        <img class="container-cat-image" src="img/15.avif" alt="" height="400px;">
                    </a>

                    <div class="container-img-content">
                        <h3>TEST FREE</h3>
                        <p>30 days</p>
                    </div>
                </div>

                <div class="container-img-item">
                    <a href="" class="container-img-link">
                        <img class="container-cat-image" src="img/21.avif" alt="" height="400px;">
                    </a>


                    <div class="container-img-content">
                        <h3>BẢNG XẾP HẠNG</h3>
                        <p>THÁNG 2</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-four-banner">
            <div class="container-img">
                <div class="container-img-item ">
                    <a href="" class="container-img-link">
                        <img class="container-cat-image" src="img/13.avif" alt="" height="300px;">
                    </a>


                </div>
                <div class="container-img-item ">
                    <a href="" class="container-img-link">
                        <img class="container-cat-image" src="img/12.avif" alt="" height="300px;">
                    </a>

                    <div class="container-img-content">
                        <h3>RÈN LUYỆN</h3>
                        <p>30 days</p>
                    </div>
                </div>
                <div class="container-img-item ">
                    <a href="" class="container-img-link">
                        <img class="container-cat-image" src="img/11.avif" alt="" height="300px;">
                    </a>

                    <div class="container-img-content">
                        <h3>FREE TEST</h3>
                        <p>30 Days</p>
                    </div>
                </div>
                <div class="container-img-item">
                    <a href="" class="container-img-link">
                        <img class="container-cat-image" src="img/10.avif" alt="" height="300px;">
                    </a>



                </div>
            </div>
        </div>



        <div class="top-title">
            <h2 class="title-section">TIN TỨC THÚ VỊ</h2>



        </div>

        <div class="row row-news">
            <div class="col l-3  home-product-news">
                <a class="home-news-item">
                    <div class="home-new-item__img">
                        <img src="img/5.avif" class="home-new-img" alt="" height="185px;">
                    </div>

                </a>
                <div class="home-news">
                    <h2 class="home-news-heading">
                        Giới thiệu đề 500 câu hỏi Python siêu bổ ích
                    </h2>

                    <p class="home-news-publish">
                        <span class="home-news-date-time">
                            07/02/2023
                        </span>
                    </p>

                    <p class="home-news-content">
                        Rèn luyện kiến thức Python siêu bổ ích từ 500 câu trắc nghiệm Quiz chọn lọc &nbsp;Đề 500 câu hỏi Python chọn lọc Bộ đề 500 câu...
                    </p>
                </div>


            </div>

            <div class="col l-3 home-product-news">
                <a class="home-news-item">
                    <div class="home-new-item__img">
                        <img src="img/4.avif" class="home-new-img" alt="" height="185px;">
                    </div>
                </a>
                <div class="home-news">
                    <h2 class="home-news-heading">
                        Giới thiệu đề 500 câu hỏi C++ cực hay
                    </h2>

                    <p class="home-news-publish">
                        <span class="home-news-date-time">
                            01/02/2023
                        </span>
                    </p>

                    <p class="home-news-content">
                        Trau dồi kiến thức C++ cực hay qua 500 câu hỏi Quiz chọn lọc &nbsp;Đề 500 câu hỏi C++ chọn lọc Bộ đề 500 câu hỏi C++ đã vừa được ra mắt với sự..
                    </p>
                </div>

            </div>
            <div class="col l-3 home-product-news">
                <a class="home-news-item">
                    <div class="home-new-item__img">
                        <img src="img/logo.avif" class="home-new-img" alt="">
                    </div>
                </a>
                <div class="home-news">
                    <h2 class="home-news-heading">
                        Bài hướng dẫn chi tiết cách sử dụng Kquiz
                    </h2>

                    <p class="home-news-publish">
                        <span class="home-news-date-time">
                            01/02/2023
                        </span>
                    </p>

                    <p class="home-news-content">
                        Dẫn nhập Nhân dịp kỷ niệm 5 năm thành lập website. Quyết định mang đến một sân chơi rèn luyện tư duy,các kiến thức từ cơ bản đến..
                    </p>
                </div>

            </div>
            <div class="col l-3 home-product-news">
                <a class="home-news-item">
                    <div class="home-new-item__img">
                        <img src="img/3.jpg" class="home-new-img" alt="" height="185px;">
                    </div>
                </a>
                <div class="home-news">
                    <h2 class="home-news-heading">
                        Cách tăng level lập trình mỗi ngày cùng Quiz
                    </h2>

                    <p class="home-news-publish">
                        <span class="home-news-date-time">
                            02/02.2023
                        </span>
                    </p>

                    <p class="home-news-content">
                        Việc học luôn đi kèm với luyện tập mỗi ngày. Lập trình cũng không ngoại lệ &nbsp;Trong đó việc luyện tập lập trình...
                    </p>
                </div>

            </div>
        </div>

        <div class="top-title">
            <h2 class="title-section title-section-pseudo">@ FOLLOW US ON YOUTUBE</h2>
        </div>
        <div class="container-six-banner">
            <div class="container-img">
                <div class="container-img-item">

                    <a href="" class="container-img-link">

                        <img src="img/5.avif" class="container-cat-image" alt="" height="150px;">

                    </a>
                </div>

                <div class="container-img-item">

                    <a href="" class="container-img-link">

                        <img src="img/6.avif" class="container-cat-image" alt="" height="150px;">

                    </a>
                </div>

                <div class="container-img-item">

                    <a href="" class="container-img-link">

                        <img src="img/7.avif" class="container-cat-image" alt="" height="150px;">

                    </a>
                </div>

                <div class="container-img-item">

                    <a href="" class="container-img-link">

                        <img src="img/8.avif" class="container-cat-image" alt="" height="150px;">

                    </a>
                </div>

                <div class="container-img-item">

                    <a href="" class="container-img-link">

                        <img src="img/9.avif" class="container-cat-image" alt="" height="150px;">

                    </a>
                </div>

                <div class="container-img-item">

                    <a href="" class="container-img-link">

                        <img src="img/1.jpg" class="container-cat-image" alt="" height="150px;">

                    </a>
                </div>

            </div>

        </div>
    </div>


</div>
<!-- End Content -->
<?php include "footer.php"; ?>