<?php

namespace App\Controllers;

use App\Models\ThongkeModel;
use App\Request;

class ThongkeController extends Controller
{
    public function thongke()
    {
        $thongke = ThongkeModel::thongke();
        return $this->view('admin/Thongkeketqua/list', ['thongke' => $thongke]);
    }
    public function create()
    {
        $thongke = thongkeModel::all();
        return $this->view('admin/Thongkeketqua/add', ['thongke' => $thongke]);
    }
    public function store(Request $request)
    {
        $thongke = $request->getBody();
        $p = new ThongkeModel();
        $p->insert($thongke);
        header("location:/thongke");
        die;
    }
    public function delete(Request $request)
    {
        $id = $request->getBody()['id'];
        $p = new ThongkeModel();
        $p->delete($id);
        header("location: /thongke");
        exit;
    }
}