<?php

class LopController
{
    public function index()
    {
        require "model/Lop.php";
        $arr = (new Lop())->all();
        require "view/lop/index.php";
    }

    public function create()
    {
        require "view/lop/create.php";
    }

    public function store()
    {
        require "model/Lop.php";
        (new Lop())->create($_POST);
    }

    public function edit()
    {
        $ma = $_GET['ma'];
        require "model/Lop.php";
        $each = (new Lop())->find($ma);
        require "view/lop/edit.php";
    }

    public function update()
    {
        require "model/Lop.php";
        (new Lop())->update($_POST);
    }

    public function delete()
    {
        require "model/Lop.php";
        (new Lop())->delete($_GET['ma']);
    }
}