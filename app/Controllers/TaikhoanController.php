<?php

namespace App\Controllers;

use App\Models\TaikhoanModel;
use App\Request;

class TaikhoanController extends Controller
{
    public function admin(){
        return $this->view('admin/home');
    }
    public function taikhoan()
    {
        $taikhoan = TaikhoanModel::taikhoan();
        return $this->view('admin/User/list', ['taikhoan' => $taikhoan]);
    }
    
    public function create()
    {
        $taikhoan = TaikhoanModel::all();
        return $this->view('admin/User/add', ['taikhoan' => $taikhoan]);
    }
    public function store(Request $request)
    {
        $taikhoan = $request->getBody();
        $p = new TaikhoanModel();
        $p->insert($taikhoan);
        header("location:/taikhoan");
        die;
    }

    public function show(Request $request)
    {
        $id = $request->getBody()['id'];
        $taikhoan = TaikhoanModel::findOne($id);

        return $this->view(
            'admin/User/edit',
            [
                'taikhoan' => $taikhoan,
            ]
        );
    }

    public function update(Request $request)
    {
        $data = $request->getBody();
        $p = new TaikhoanModel();
        $p->update($data['id'], $data);
        header("Location:/taikhoan");
        exit;
    }

    public function delete(Request $request)
    {
        $id = $request->getBody()['id'];
        $p = new TaikhoanModel();
        $p->delete($id);
        header("location: /taikhoan");
        exit;
    }
}