<?php
require_once "Models/login.php";
class LoginController
{
    var $login_model;
    public function __construct()
    {
        $this->login_model = new Login();
    }
    function login()
    {
        $data_danhmuc = $this->login_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->login_model->chitietdanhmuc($i);
        }

        include_once 'Views/index.php';
    }
    function login_action()
    {
        $taikhoan = $_POST['taikhoan'];
        $matkhau = md5($_POST['matkhau']);
        if (strpos($taikhoan, "'") != false) {
            $taikhoan = str_replace("'", "\'", $taikhoan);
        }
        $data = array(
            'taikhoan' => $taikhoan,
            'matkhau' => $matkhau,
        );
        $this->login_model->login_action($data);
    }
    function dangky()
    {
        $check1 = 0;
        $check2 = 0;
        $data_check = $this->login_model->check_account();
        foreach ($data_check as $value) {
            if ($value['Email'] == $_POST['Email'] || $value['Username'] == $_POST['TaiKhoan']) {
                $check1 = 1;
            }
        }

        if ($_POST['MatKhau'] != $_POST['check_password']) {
            $check2 = 1;
        }

        $data = array(
            'UserFirstname' =>    $_POST['Ho'],
            'UserLastname'  =>   $_POST['Ten'],
            'UserGender' => "",
            'UserPhone' => $_POST['SĐT'],
            'Email' =>    $_POST['Email'],
            'UserAddress'  =>   "",
            'Username' => $_POST['TaiKhoan'],
            'UserPassword' => md5($_POST['MatKhau']),
            'DecentralizationID ' =>  '1',
            'UserStatus'  =>  '1',
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }

        $this->login_model->dangky_action($data, $check1, $check2);
    }
    function dangxuat()
    {
        $this->login_model->logout();
    }
    function account()
    {
        $data_danhmuc = $this->login_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->login_model->chitietdanhmuc($i);
        }
        $data = $this->login_model->account();

        include_once 'Views/index.php';
    }
    function update()
    {

        if (isset($_POST['Ho'])) {
            $data = array(
                'UserFirstname' =>    $_POST['Ho'],
                'UserLastname'  =>   $_POST['Ten'],
                'UserGender' => $_POST['GioiTinh'],
                'UserPhone' => $_POST['SĐT'],
                'Email' =>    $_POST['Email'],
                'UserAddress'  =>   $_POST['DiaChi'],
            );
            foreach ($data as $key => $value) {
                if (strpos($value, "'") != false) {
                    $value = str_replace("'", "\'", $value);
                    $data[$key] = $value;
                }
            }
            $this->login_model->update_account($data);
        } else {
            if ($_POST['MatKhauMoi'] == $_POST['MatKhauXN']) {
                if (md5($_POST['MatKhau']) == $_SESSION['login']['MatKhau']) {
                    $data = array(
                        'UserPassword' => md5($_POST['MatKhauMoi']),
                    );
                    $this->login_model->update_account($data);
                } else {
                    setcookie('doimk', 'Mật khẩu không đúng', time() + 2);
                }
            } else {
                setcookie('doimk', 'Mật khẩu mới không trùng nhau', time() + 2);
            }
        }
        header('location: ?act=taikhoan&xuli=account#doitk');
    }
}
