<?php include "header.php"; ?>
<!-- Content -->
<div class="container-contact">
    <div class="grid wide">
        <div class="row ">
            <div class="col l-3">
                <nav class="category">
                    <h3 class="category__heading">Danh mục</h3>
                    <ul class="category-list">
                        <?php foreach ($category as $cate) : ?>
                            <li class="category-item">
                                <a href="" class="category-item__link">
                                    <?= $cate->name_category ?>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </nav>
                <div class="banner-left-page">
                    <a href="" class="banner-left-link">
                        <img src="img/88.avif" alt="" class="banner-left-img">
                    </a>
                </div>
            </div>
            <div class="col l-9">
                <div class="heading-page">
                    <h1>LIÊN HỆ</h1>
                </div>
                <div class="container__map">
                    <iframe src="https://www.google.com/maps" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="row page-content">

                    <div class="col l-6 ">
                        <div class="contact-form-wrap">
                            <div class="contact-form-title">
                                <h6>GỬI THẮC MẮC CHO CHÚNG TÔI</h6>
                            </div>
                            <form action="/create-contact" method="post" enctype="multipart/form-data" class="contact-form">
                                <ul class="form-fill">
                                    <li class="form-fill-item">
                                        <label for="">Họ và tên</label>
                                        <input type="text" class="form-input-name" placeholder="Nhập tên của bạn" name="name_user" required>
                                        <span class="form-message"></span>
                                    </li>
                                    <li class="form-fill-item">
                                        <label for="">Số điện thoại</label>
                                        <input type="text" class="form-input-phone" placeholder="Nhập số điện thoại của bạn" name="tel" required>
                                        <span class="form-message"></span>
                                    </li>
                                    <li class="form-fill-item">
                                        <label for="">Email</label>
                                        <input type="text" class="form-input-phone" placeholder="Nhập email của bạn" name="email" required>
                                        <span class="form-message"></span>
                                    </li>
                                    <li class="form-fill-item">
                                        <label for="">Message</label>
                                        <textarea name="message" id="" cols="" rows="5" class="form-textarea" placeholder="Nội dung..."></textarea>
                                        <span class="form-message"></span>
                                    </li>
                                </ul>
                                <div class="contact-submit" style="margin-bottom: 50px;">
                                    <button class="contact-submit-btn" type="submit">
                                        Gửi liên hệ
                                        <i class="contact-submit-icon fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col l-6">
                        <div class="concact-info">
                            <div class="contact-info-title">
                                <h6>THÔNG TIN LIÊN HỆ</h6>
                            </div>
                            <ul class="contact-info-list">
                                <li class="contact-info-item">
                                    <i class="shared-item-icon fa-solid fa-location-dot"></i>
                                    <span>
                                        512 Trần Khát Chân,p.Phố Huế,Quận Hai Bà Trưng,Hà Nội
                                    </span>
                                </li>
                                <li class="contact-info-item">
                                    <i class="shared-item-icon fa-solid fa-phone"></i>
                                    <span>Số điện thoại
                                        : 09838397376</span>
                                </li>
                                <li class="contact-info-item">
                                    <i class="shared-item-icon fa-solid fa-envelope"></i>
                                    <span>anhllph19505@fpt.edu.vn</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Content -->
<?php include "footer.php"; ?>