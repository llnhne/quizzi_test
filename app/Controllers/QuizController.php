<?php

namespace App\Controllers;
use App\Models\CategoryModel;
use App\Models\QuizModel;
use App\Request;

class QuizController extends Controller
{
    public function quiz()
    {
        
        $quiz = QuizModel::quiz();
        return $this->view('admin/Quiz/list', ['quiz' => $quiz]);
    }
    
    public function create()
    {
        $category = CategoryModel::all();
        $quiz = quizModel::all();
        return $this->view('admin/Quiz/add', ['quiz' => $quiz,'category' => $category]);
    }

    public function store(Request $request)
    {
        $product = $request->getBody();
        $product['image'] = $_FILES['image']['name'];

        move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $_FILES['image']['name']);

        $p = new QuizModel();
        $p->insert($product);

        header("location:/quiz");
        die;
    }

    public function show(Request $request)
    {
        $id = $request->getBody()['id'];
        $quiz = QuizModel::findOne($id);
        $category = CategoryModel::all();

        return $this->view(
            'admin/Quiz/edit',
            [
                'quiz' => $quiz,
                'category' => $category
            ]
        );
    }

    public function update(Request $request)
    {
        $data = $request->getBody();
        if ($_FILES['image']['size'] > 0) {
            $data['image'] = $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $data['image']);
        }
        $p = new QuizModel();
        $p->update($data['id'], $data);
        header("Location:/quiz");
        exit;
    }

    public function delete(Request $request)
    {
        $id = $request->getBody()['id'];
        $p = new QuizModel();
        $p->delete($id);
        header("location: /quiz");
        exit;
    }
}