<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Request;

class CategoryController extends Controller
{
    public function admin(){
        return $this->view('admin/home');
    }
    public function category()
    {
        $category = CategoryModel::danhmuc();
        return $this->view('admin/Category/list', ['category' => $category]);
    }
    
    public function create()
    {
        $category = CategoryModel::all();
        return $this->view('admin/Category/add', ['category' => $category]);
    }

    public function store(Request $request)
    {
        $category = $request->getBody();

        $p = new CategoryModel();
        $p->insert($category);

        header("location:/category");
        die;
    }

    public function show(Request $request)
    {
        $id = $request->getBody()['id'];
        $category = CategoryModel::findOne($id);

        return $this->view(
            'admin/Category/edit',
            [
                'category' => $category,
            ]
        );
    }

    public function update(Request $request)
    {
        $data = $request->getBody();
        $p = new CategoryModel();
        $p->update($data['id'], $data);
        header("Location:/category");
        exit;
    }

    public function delete(Request $request)
    {
        $id = $request->getBody()['id'];
        $p = new CategoryModel();
        $p->delete($id);
        header("location: /category");
        exit;
    }
}