<?php
   require_once 'model/LibrariesModel.php';
   class LibrariesController{ 
    function index(){
        $bdModal = new LibrariesModel();
        $bdonor = $bdModal->getAllUsers();
        require_once 'view/Libraries/index.php';

    }
    function admin(){
        $bdModal = new LibrariesModel();
        $bdonor = $bdModal->getAllUsers();
        require_once 'view/Libraries/admin.php';
    }
    function edit(){
        if (!isset($_GET['madg'])) {
            $_SESSION['error'] = "Tham số không hợp lệ";
            header("Location: index.php?controller=book&action=admin");
            return;
        }
        if (!is_numeric($_GET['madg'])) {
            $_SESSION['error'] = "Id phải là số";
            header("Location: index.php?controller=book&action=admin");
            return;
        }
        $id = $_GET['madg'];
        $bdModal = new LibrariesModel();
        $BD = $bdModal->getBDById($id);
        $error = '';
        if (isset($_POST['submit'])) {
            $hovaten = $_POST['hovaten'];
            $namsinh = $_POST['namsinh'];
            $nghenghiep = $_POST['nghenghiep'];
            $ngaycapthe = $_POST['ngaycapthe'];
            $ngayhethan = $_POST['ngayhethan'];
            $diachi = $_POST['diachi'];
            if(empty($hovaten) || empty($_POST['gioitinh'])|| empty($namsinh) || empty($nghenghiep) || empty($ngaycapthe) || empty($ngayhethan)|| empty($diachi)){
                $error = 'Thông tin chưa đầy đủ!';
            }
            else {
                
                //xử lý update dữ liệu vào hệ thống
                $gioitinh = $_POST['gioitinh'];
                $bdArr = [
                    'madg' => $id,
                    'hovaten' => $hovaten,
                    'gioitinh' => $gioitinh,
                    'namsinh' => $namsinh,
                    'nghenghiep' =>$nghenghiep,
                    'ngaycapthe' => $ngaycapthe,
                    'ngayhethan' => $ngayhethan,
                    'diachi' => $diachi,
                ];
                $isAdd = $bdModal->update($bdArr);

                if ($isAdd) {
                    $TT= "Sửa thành công";
                }
                else {
                    $TT = "Sửa thất bại";
                }
                header("Location: index.php?controller=libraries&action=admin&tt=$TT");
                exit();
            }
        }
        require_once 'view/Libraries/edit.php';
    }
    function add(){
        $error = '';
        if(isset($_POST['submit'])){
            $hovaten = $_POST['hovaten'];
            $namsinh = $_POST['namsinh'];
            $nghenghiep = $_POST['nghenghiep'];
            $ngaycapthe = $_POST['ngaycapthe'];
            $ngayhethan = $_POST['ngayhethan'];
            $diachi = $_POST['diachi'];
            if(empty($hovaten) || empty($_POST['gioitinh'])|| empty($namsinh) || empty($nghenghiep) || empty($ngaycapthe) || empty($ngayhethan) || empty($diachi)){
                $error = 'Thông tin chưa đầy đủ!';
            }else{
                $gioitinh = $_POST['gioitinh'];
                $bdModal = new LibrariesModel();
                $bdArr = [
                    'madg' => $id,
                    'hovaten' => $hovaten,
                    'gioitinh' => $gioitinh,
                    'namsinh' => $namsinh,
                    'nghenghiep' =>$nghenghiep,
                    'ngaycapthe' => $ngaycapthe,
                    'ngayhethan' => $ngayhethan,
                    'diachi' => $diachi,
                ];
                $isAdd = $bdModal->insert($bdArr);
                if ($isAdd) {
                    $TT=  "Thêm mới thành công";
                }
                else {
                    $TT= "Thêm mới thất bại";
                }
                header("Location: index.php?controller=libraries&action=admin&tt=$TT");
                exit();
            }

        }
        require_once 'view/Libraries/add.php';
    }
    function delete(){
        $madg = $_GET['madg'];
        if (!is_numeric($madg)) {
            header("Location: index.php?controller=libraries&action=index");
            exit();
        }
        $bdModal = new LibrariesModel();
        $isDelete = $bdModal->delete($madg);
        if ($isDelete) {
            //chuyển hướng về trang liệt kê danh sách
            //tạo session thông báo mesage
            $TT=  "Xóa bản ghi thành công";
        }
        else {
            //báo lỗi
            $TT = "Xóa bản ghi thất bại";
        }
        header("Location: index.php?controller=libraries&action=admin&tt=$TT");
        exit();
    }
}
?>