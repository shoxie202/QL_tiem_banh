<?php
require_once "Models/checkout.php";
class CheckoutController
{
    var $checkout_model;
    public function __construct()
    {
        $this->checkout_model = new Checkout();
    }
    function list()
    {
        if (isset($_SESSION['login'])) {
            $data_danhmuc = $this->checkout_model->danhmuc();

            $data_chitietDM = array();

            for ($i = 1; $i <= count($data_danhmuc); $i++) {
                $data_chitietDM[$i] = $this->checkout_model->chitietdanhmuc($i);
            }

            $count = 0;
            if (isset($_SESSION['sanpham'])) {
                foreach ($_SESSION['sanpham'] as $value) {
                    $count += $value['ThanhTien'];
                }
            }
            include_once 'Views/index.php';
        } else {
            header('location: ?act=taikhoan');
        }
    }
    function save()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');

        $count = 0;
        if (isset($_SESSION['sanpham'])) {
            foreach ($_SESSION['sanpham'] as $value) {
                $count += $value['ThanhTien'];
            }
        }

        $data = array(
            'UserID' => $_SESSION['login']['UserID'],
            'Billdate' => $ThoiGian,
            'Receiver' =>    $_POST['NguoiNhan'],
            'Phonenumber' => $_POST['SDT'],
            'Address' => $_POST['DiaChi'],
            'Total' => $count,
            'Status'  =>  '0',
        );
        $this->checkout_model->save($data);
    }
    function order_complete()
    {
        $data_danhmuc = $this->checkout_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->checkout_model->chitietdanhmuc($i);
        }
        $count = 0;
        if (isset($_SESSION['sanpham'])) {
            foreach ($_SESSION['sanpham'] as $value) {
                $count += $value['ThanhTien'];
            }
        }
        include_once 'Views/index.php';
    }
}