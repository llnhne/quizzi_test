<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="TVicqmWRm4ymQBW3biLYRWSRxdsz7vTEaRSc-MMQjKc" />
    <title>Test Quiz</title>
    <link rel="stylesheet" href="./assets/css/fonts/fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css">

    <link rel="stylesheet" href="./assets/css/img/">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/css/base.css">

</head>

<body>
    <div class="main">
        <!-- Header -->
        <div class="header">
            <div class="header-logo">
                <a href="" class="header-logo-link">
                    <img src="img/quiz.avif" alt="" class="header-logo-img" width="120px;" height="50px;">
                </a>
            </div>
            <div class="header-navbar ">
                <ul class="header-navbar-list">
                    <li class="header-navbar-item">
                        <a href="/" class="header-navbar-link">
                            Trang chủ
                        </a>
                    </li>
                    <li class="header-navbar-item mega-menu  nav-bridge">
                        <a href="" class="header-navbar-link">
                            Đề thi
                            <i class="header-navbar-icon fa-solid fa-angle-down"></i>
                        </a>
                        <div class="navbar-menu">
                            <div class="navbar-inner">
                                <div class="navbar-inner-item">
                                    <div class="navbar-title">
                                        <a href="" class="navbar-title-link">
                                            PHP
                                        </a>
                                    </div>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="/php">
                                                Cơ bản
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/php">
                                                Trung bình
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/php">
                                                Nâng cao
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="navbar-inner-item">
                                        <a href="" class="navbar-inner-link">
                                            <img src="img/php.png" alt="" class="navbar-inner-img" width="80px">
                                        </a>
                                    </div>
                                </div>
                                <div class="navbar-inner-item">
                                    <div class="navbar-title">
                                        <a href="" class="navbar-title-link">
                                            JAVA
                                        </a>
                                    </div>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="/java">
                                                Cơ bản
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/java">
                                                Trung bình
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/java">
                                                Nâng cao
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="navbar-inner-item">
                                        <a href="" class="navbar-inner-link">
                                            <img src="img/java.svg" alt="" class="navbar-inner-img" width="50px">
                                        </a>
                                    </div>
                                </div>
                                <div class="navbar-inner-item">
                                    <div class="navbar-title">
                                        <a href="" class="navbar-title-link">
                                            SQL
                                        </a>
                                    </div>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="/sql">
                                                Cơ bản
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/sql">
                                                Trung bình
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/sql">
                                                Nâng cao
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="navbar-inner-item">
                                        <a href="" class="navbar-inner-link">
                                            <img src="img/sql.png" alt="" class="navbar-inner-img" width="80px">
                                        </a>
                                    </div>
                                </div>
                                <div class="navbar-inner-item">
                                    <a href="" class="navbar-inner-link">
                                        <img src="img/88.avif" alt="" class="navbar-inner-img" width="380px">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="header-navbar-item">
                        <a href="" class="header-navbar-link">
                            Kết quả thi
                        </a>
                    </li>
                    <li class="header-navbar-item">
                        <a href="" class="header-navbar-link">
                            Bảng xếp hạng
                        </a>
                    </li>
                    <li class="header-navbar-item sup-dropdown">
                        <a href="/contact" class="header-navbar-link">
                            Liên Hệ
                        </a>
                    </li>
                </ul>
            </div>
            <div class="header-group-icon">
                <ul class="header-icon-list">
                    <li class="header-icon-item">
                        <div style="display:flex;align-items:center;">
                            <div class="dropdown">
                                <a class="" href="" role="button" data-toggle="dropdown" aria-expanded="false">
                                    <button class="dropbtn" style="background-color: #fff;border:none;"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#000" width="30px" ;>
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg></button>
                                </a>
                                <?php
                                if (isset($_SESSION['user'])) {
                                    extract($_SESSION['user']);
                                ?>
                                    <div class="" style="color:#000;display:inline-block;">
                                        <label for="">Hello</label><br>
                                        <?= $user ?>
                                    </div>
                                    <div class="dropdown-content">
                                        <a href="/forget">Forgot password</a>
                                        <a href="">Update account</a>
                                        <?php if ($role == 1) { ?>
                                            <a href="/admin">Login admin</a>
                                        <?php } ?>
                                        <a href="">Log out</a>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="dropdown-content">
                                        <a href="/forget">Forgot password</a>
                                        <a href="/login">Log in</a>
                                        <a href="/register">Register</a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Header -->