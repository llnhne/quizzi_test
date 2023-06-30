<?php

use App\Controllers\HomeController;
use App\Controllers\CategoryController;
use App\Controllers\QuizController;
use App\Controllers\ThongkeController;
use App\Controllers\TaikhoanController;
use App\Controllers\HotroController;
use App\Router;

require_once __DIR__ . "/../vendor/autoload.php";

$router = new Router;

Router::get('/', [HomeController::class, 'index']);
Router::get('/php', [HomeController::class, 'php']);
Router::get('/java', [HomeController::class, 'java']);
Router::get('/sql', [HomeController::class, 'sql']);
Router::get('/contact', [HomeController::class, 'contact']);
Router::get('/create-contact', [HomeController::class, 'createct']);
Router::post('/create-contact', [HomeController::class, 'storect']);
Router::get('/login', [HomeController::class, 'login']);
Router::get('/forget', [HomeController::class, 'forget']);
Router::get('/register', [HomeController::class, 'register']);
Router::get('/create-register', [HomeController::class, 'createtk']);
Router::post('/create-register', [HomeController::class, 'storetk']);
Router::get('/admin', [CategoryController::class, 'admin']);



/* Category */
Router::get('/category', [CategoryController::class, 'category']);
Router::get('/create-category', [CategoryController::class, 'create']);
Router::post('/create-category', [CategoryController::class, 'store']);
Router::get('/update-category', [CategoryController::class, 'show']);
Router::post('/update-category', [CategoryController::class, 'update']);
Router::get('/delete-category', [CategoryController::class, 'delete']);
/* Quiz */
Router::get('/quiz', [QuizController::class, 'quiz']);
Router::get('/create-quiz', [QuizController::class, 'create']);
Router::post('/create-quiz', [QuizController::class, 'store']);
Router::get('/update-quiz', [QuizController::class, 'show']);
Router::post('/update-quiz', [QuizController::class, 'update']);
Router::get('/delete-quiz', [QuizController::class, 'delete']);
/*User*/
Router::get('/taikhoan', [TaikhoanController::class, 'taikhoan']);
Router::get('/create-taikhoan', [TaikhoanController::class, 'create']);
Router::post('/create-taikhoan', [TaikhoanController::class, 'store']);
Router::get('/update-taikhoan', [TaikhoanController::class, 'show']);
Router::post('/update-taikhoan', [TaikhoanController::class, 'update']);
Router::get('/delete-taikhoan', [TaikhoanController::class, 'delete']);
/*Thống kê*/
Router::get('/thongke', [ThongkeController::class, 'thongke']);
Router::get('/create-thongke', [ThongkeController::class, 'create']);
Router::post('/create-thongke', [ThongkeController::class, 'store']);
Router::get('/delete-thongke', [ThongkeController::class, 'delete']);
/*Hỗ trợ*/
Router::get('/hotro', [HotroController::class, 'hotro']);
Router::get('/delete-hotro', [HotroController::class, 'delete']);

$router ->resolve();