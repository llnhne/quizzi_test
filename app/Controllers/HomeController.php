<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\QuizModel;
use App\Models\HotroModel;
use App\Models\TaikhoanModel;
use App\Request;
use App\Router;
use Closure;

class HomeController extends Controller
{
    private $dbase;
    public function index()
    {
        $quiz = QuizModel::quiz5();
        return $this->view('home', ['quiz' => $quiz]);
    }
    public function php()
    {
        return $this->view('quizPHP');
    }
    public function java()
    {
        return $this->view('quizJAVA');
    }
    public function sql()
    {
        return $this->view('quizSQL');
    }
    public function contact()
    {
        $category = CategoryModel::danhmuc3();
        $hotro = HotroModel::all();
        return $this->view('contact', ['category' => $category, 'hotro' => $hotro]);
    }
    public function createct()
    {
        $hotro = HotroModel::all();
        return $this->view('admin/Hotro/list', ['hotro' => $hotro]);
    }

    public function storect(Request $request)
    {
        $hotro = $request->getBody();
        $p = new HotroModel();
        $p->insert($hotro);
        header("location:/contact");
        // echo "<srcipt>alert('Dữ liệu được gửi thành công');</script>";
        die;
    }

    public function login()
    {
        $name_user = $_POST['name_user'];
        $password = $_POST['password'];
        $checkuser = checkUser($name_user, $password);
        if (is_array($checkuser)) {
            $_SESSION['user'] = $checkuser;
            if ($checkuser['role'] == 1) {
                header("location:/admin");
            } else {
                echo "<srcipt>alert('Đăng nhập thành công !');</script>";
                header("location:/");
            }
        } else {
            echo "<srcipt>alert('Tài khoản không tồn tại.');</script>";
            header("location:/login");
        }
        return $this->view('login');
    }
    public function logout()
    {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            header('location:/');
        }
    }
    public function forget()
    {
        return $this->view('forget');
    }
    public function register()
    {
        return $this->view('register');
    }

    public function createtk()
    {
        $user = TaikhoanModel::all();
        return $this->view('/login', ['user' => $user]);
    }
    public function storetk(Request $request)
    {
        // $checkuser = checkUser($user_name, $password);
        // if (is_array($checkuser)) {
        //     $_SESSION['user'] = $checkuser;
        $user = $request->getBody();
        $p = new TaikhoanModel();
        $p->insert($user);
        echo "<script>alert('Đăng ký thành công.Vui lòng đăng nhập!!!');</script>";
        header("location:/register");
      
        // }else{
        //     echo "<script>alert('Đăng ký thất bại');</script>";
        //     header("location:/register");
        // }
    }
    public function thongke()
    {
        return $this->view('admin\Thongkeketqua\list');
    }
    public function taikhoan()
    {
        return $this->view('admin\User\list');
    }
    public function hotro()
    {
        return $this->view('admin\Hotro\list');
    }
}
