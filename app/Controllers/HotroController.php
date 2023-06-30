<?php

namespace App\Controllers;

use App\Models\HotroModel;
use App\Request;

class HotroController extends Controller
{
    public function hotro()
    {
        $hotro = HotroModel::hotro();
        return $this->view('admin/Hotro/list', ['hotro' => $hotro]);
    }
    public function delete(Request $request)
    {
        $id = $request->getBody()['id'];
        $p = new hotroModel();
        $p->delete($id);
        header("location: /hotro");
        exit;
    }
}