<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/login3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Feb 2023 17:18:05 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:wght@100&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Đăng nhập / đăng ký để sử dụng ứng dụng Quiz Test.</h3>
                        <p>Giúp bạn cải thiện rõ hơn về kết quả học tập và nâng cao hiệu quả qua các lần kiểm tra.</p>
                        <div class="page-links">
                            <a href="/login" class="active">Đăng nhập</a><a href="/register">Đăng ký</a>
                        </div>
                        <div class="alert alert-warning alert-dismissible fade show with-icon" role="alert">
                            Vui lòng điền thông tin của bạn vào mẫu sau.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/login" method="post">
                            <input class="form-control" type="text" name="name_user" placeholder="Tên đăng nhập" required>
                            <input class="form-control" type="password" name="password" placeholder="Mật khẩu" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Đăng Nhập</button> <a href="/forget">Quên mật khẩu?</a>
                            </div>
                        </form>
                        <div class="other-links">
                            <span>Hoặc đăng nhập với</span><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-google"></i></a><a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/login3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Feb 2023 17:18:13 GMT -->
</html>