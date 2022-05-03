<?php

class SinhVienController
{
    public function index()
    {
        require "model/SinhVien.php";
        $arr = (new SinhVien())->all();
        require "view/sinh_vien/index.php";
    }

    public function create()
    {
        require "model/Lop.php";
        $lops = (new Lop())->all();
        require "view/sinh_vien/create.php";
    }

    public function store()
    {
        require "model/SinhVien.php";
        (new SinhVien())->create($_POST);
    }

    public function edit()
    {
        $ma = $_GET["ma"];
        require "model/SinhVien.php";
        $each = (new SinhVien())->find($ma);
        require "model/Lop.php";
        $lops = (new Lop())->all();
        require "view/sinh_vien/edit.php";
    }

    public function update()
    {
        require "model/SinhVien.php";
        (new SinhVien())->update($_POST);
    }

    public function delete()
    {
        require "model/SinhVien.php";
        (new SinhVien())->delete($_GET["ma"]);
    }
}