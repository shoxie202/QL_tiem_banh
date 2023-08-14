<?php
require_once "MVC/models/nguoidung.php";
class NguoiDungController
{
    var $nguoidung_model;
    public function __construct()
    {
        $this->nguoidung_model = new nguoidung();
    }
    public function list()
    {
        $data = $this->nguoidung_model->All();
        include_once "MVC/Views/Admin/index.php";
        //require_once("MVC/Views/authors/list.php");
    }
    public function detail()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->nguoidung_model->find($id);
        include_once "MVC/Views/Admin/index.php";
        //require_once("MVC/Views/authors/detail.php");
    }
    public function add()
    {
        include_once "MVC/Views/Admin/index.php";
        //require_once("MVC/Views/authors/add.php");
    }
    public function store()
    {
        $data = array(
            'UserLastname' =>    $_POST['Ho'],
            'UserFirstname'  =>   $_POST['Ten'],
            'UserGender' => $_POST['GioiTinh'],
            'UserPhone' => $_POST['SDT'],
            'Email' =>    $_POST['Email'],
            'UserAddress'  =>   $_POST['DiaChi'],
            'Username' => $_POST['TaiKhoan'],
            'UserPassword' => md5($_POST['MatKhau']),
            'DecentralizationID ' =>  '2',
            'UserStatus'  =>  '1'
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->nguoidung_model->store($data);
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->nguoidung_model->delete($id);
    }
    public function edit()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->nguoidung_model->find($id);
        include_once "MVC/Views/Admin/index.php";
        //require_once("MVC/Views/authors/edit.php");
    }
    public function update()
    {
        $data = array(
            'UserLastname' =>    $_POST['Ho'],
            'UserFirstname'  =>   $_POST['Ten'],
            'UserGender' => $_POST['GioiTinh'],
            'UserPhone' => $_POST['SDT'],
            'Email' =>    $_POST['Email'],
            'UserAddress'  =>   $_POST['DiaChi'],
            'Username' => $_POST['TaiKhoan'],
            'UserPassword' => md5($_POST['MatKhau']),
            'DecentralizationID' =>  $_POST['MaQuyen'],
            'UserStatus'  =>  $_POST['TrangThai'],
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->nguoidung_model->update($data);
    }
}
