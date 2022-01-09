<?php

require_once 'model/DuanModel.php';
class DuanController{
    function index(){
        $daModal = new DuanModal();
        $dan = $daModal->getAllDA();
        require_once 'view/Duan/index.php';
    }
    function add(){
        $error = '';
        if(isset($_POST['submit'])){
            $tenduan = $_POST['tenduan'];
            $namthuchien = $_POST['namthuchien'];
            $linhvuc = $_POST['linhvuc'];
            $nhiemvu = $_POST['nhiemvu'];
            $coquanthuchien = $_POST['coquanthuchien'];
            if(empty($tenduan) || empty($namthuchien)|| empty($linhvuc) || empty($nhiemvu) || empty($coquanthuchien)){
                $error = 'Thông tin chưa đầy đủ!';
            }else{
                $daModal = new DuanModal();
                $daArr = [
                    'tenduan' => $tenduan,
                    'namthuchien' => $namthuchien,
                    'linhvuc' => $linhvuc,
                    'nhiemvu' => $nhiemvu,
                    'coquanthuchien' => $coquanthuchien,
                ];
                $isAdd = $daModal->insert($daArr);
                if ($isAdd) {
                    $TT=  "Thêm mới thành công";
                    header("Location: index.php?controller=duan&action=index&tt=$TT");
                }
                else {
                    $TT= "Thêm mới thất bại";
                    header("Location: index.php?controller=duan&action=error&error=$TT");
                }
                
                exit();
            }

        }
        require_once 'view/Duan/add.php';
    }
    function edit(){
        if (!isset($_GET['daid'])) {
            $_SESSION['error'] = "Tham số không hợp lệ";
            header("Location: index.php?controller=duan&action=index");
            return;
        }
        if (!is_numeric($_GET['daid'])) {
            $_SESSION['error'] = "Id phải là số";
            header("Location: index.php?controller=duan&action=index");
            return;
        }
        $id = $_GET['daid'];
        $daModal = new DuanModal();
        $DA = $daModal->getDAById($id);
        $error = '';
        if (isset($_POST['submit'])) {
            $tenduan = $_POST['tenduan'];
            $namthuchien = $_POST['namthuchien'];
            $linhvuc = $_POST['linhvuc'];
            $nhiemvu = $_POST['nhiemvu'];
            $coquanthuchien = $_POST['coquanthuchien'];
            if(empty($tenduan) || empty($namthuchien)|| empty($linhvuc) || empty($nhiemvu) || empty($coquanthuchien)){
                $error = 'Thông tin chưa đầy đủ!';
            }
            else {
                
                //xử lý update dữ liệu vào hệ thống
                $daArr = [
                    'maduan' => $id,
                    'tenduan' => $tenduan,
                    'namthuchien' => $namthuchien,
                    'linhvuc' => $linhvuc,
                    'nhiemvu' => $nhiemvu,
                    'coquanthuchien' => $coquanthuchien,
                ];
                $isAdd = $daModal->update($daArr);

                if ($isAdd) {
                    $TT= "Sửa thành công";
                    header("Location: index.php?controller=duan&action=index&tt=$TT");
                }
                else {
                    $TT = "Sửa thất bại";
                    header("Location: index.php?controller=duan&action=error&error=$TT");
                }
                
                exit();
            }
        }
        require_once 'view/Duan/edit.php';
    }
    function delete(){
        $id = $_GET['daid'];
        if (!is_numeric($id)) {
            header("Location: index.php?controller=duan&action=index");
            exit();
        }
        $daModal = new DuanModal();
        $isDelete = $daModal->delete($id);
        if ($isDelete) {
            //chuyển hướng về trang liệt kê danh sách
            //tạo session thông báo mesage
            $TT=  "Xóa bản ghi thành công";
            header("Location: index.php?controller=duan&action=index&tt=$TT");
        }
        else {
            //báo lỗi
            $TT = "Xóa bản ghi thất bại";
            header("Location: index.php?controller=duan&action=error&error=$TT");
        }
        exit();
    }
    function error(){
        if(isset($_GET['error'])){
            require_once "view/Duan/error.php";
        }else{
            header("location: index.php?controller=duan&action=index");
        }
    }
}

?>