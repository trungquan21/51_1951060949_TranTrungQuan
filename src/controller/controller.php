<?php
    require_once 'model/model.php';
    class controller{
        public function index() {
            //gọi view để hiển thị dữ liệu
            //gọi view thực chất là nhúng file view vào
            //gọi file luôn phải nhớ là đứng tại
    //        vị trí file index gốc của ứng dụng
            $giangvien = new model();
            $giangviens = $giangvien->index();
    //        print_r($books);
            require_once 'view/GiangVien/index.php';
        }
    
        public function add() {
            $error = '';
            //xử lý submit form
            if (isset($_POST['submit'])) {
                $hovaten = $_POST['hovaten'];
                $ngaysinh = $_POST['ngaysinh'];
                $gioitinh = $_POST['gioitinh'];
                $trinhdo = $_POST['trinhdo'];
                $chuyenmon = $_POST['chuyenmon'];
                $hocham = $_POST['hocham'];
                $hocvi = $_POST['hocvi'];
                $coquan = $_POST['coquan'];
    
                //xử lý validate, nếu mà để trống tên sách
    //            thì báo lỗi và không cho submit form
                if (empty($hovaten) && empty($ngaysinh) && empty($gioitinh) && empty($trinhdo) && empty($chuyenmon) && empty($hocham) && empty($hocvi) && empty($coquan)) {
                    $error = "không được để trống";
                }
                else {
                    //gọi model để insert dữ liệu vào database
                    $giangvien = new model();
                    //gọi phương thức để insert dữ liệu
                    //nên tạo 1 mảng tạm để lưu thông tin của
    //                đối tượng dựa theo cấu trúc bảng
                    $giangvienArr = [
                        'hovaten' => $hovaten,
                        'ngaysinh' => $ngaysinh,
                        'gioitinh' => $gioitinh,
                        'trinhdo' => $trinhdo,
                        'chuyenmon' => $chuyenmon,
                        'hocham' => $hocham,
                        'hocvi' => $hocvi,
                        'coquan' => $coquan
    
                    ];
                    $isInsert = $giangvien->insert($giangvienArr);
                    if ($isInsert) {
                        $_SESSION['success'] = "Thêm mới thành công";
                    }
                    else {
                        $_SESSION['error'] = "Thêm mới thất bại";
                    }
                    header("Location: index.php?controller=giangvien&action=index");
                    exit();
                }
            }
            //gọi view
            require_once 'view/GiangVien/add.php';
        }
    
        public function edit() {
            //lấy ra thông tin sách dựa theo id đã gắn trên url
            //xử lý validate cho trường hợp id truyền lên không hợp lệ
            if (!isset($_GET['magv'])) {
                $_SESSION['error'] = "Tham số không hợp lệ";
                header("Location: index.php?controller=giangvien&action=index");
                return;
            }
            if (!is_numeric($_GET['magv'])) {
                $_SESSION['error'] = "Id phải là số";
                header("Location: index.php?controller=giangvien&action=index");
                return;
            }
            $magv = $_GET['magv'];
            //gọi model để lấy ra đối tượng sách theo id
            $giangvienModel = new model();
            $giangvien = $giangvienModel->getgiangvienById($magv);
    
            //xử lý submit form, lặp lại thao tác khi submit lúc thêm mới
            $error = '';
            if (isset($_POST['submit'])) {
                $hovaten = $_POST['hovaten'];
                $ngaysinh = $_POST['ngaysinh'];
                $gioitinh = $_POST['gioitinh'];
                $trinhdo = $_POST['trinhdo'];
                $chuyenmon = $_POST['chuyenmon'];
                $hocham = $_POST['hocham'];
                $hocvi = $_POST['hocvi'];
                $coquan = $_POST['coquan'];
                //check validate dữ liệu
                if (empty($hovaten) && empty($ngaysinh) && empty($gioitinh) && empty($trinhdo) && empty($chuyenmon) && empty($hocham) && empty($hocvi) && empty($coquan)) {
                    $error = "không được để trống";
                }
                else {
                    //xử lý update dữ liệu vào hệ thống
                    $giangvien = new model();
                    //gọi phương thức để insert dữ liệu
                    //nên tạo 1 mảng tạm để lưu thông tin của
    //                đối tượng dựa theo cấu trúc bảng
                    $giangvienArr = [
                        'magv' => $magv,
                        'hovaten' => $hovaten,
                        'ngaysinh' => $ngaysinh,
                        'gioitinh' => $gioitinh,
                        'trinhdo' => $trinhdo,
                        'chuyenmon' => $chuyenmon,
                        'hocham' => $hocham,
                        'hocvi' => $hocvi,
                        'coquan' => $coquan
    
                    ];
                    $isUpdate = $giangvienModel->update($giangvienArr);
                    if ($isUpdate) {
                        $_SESSION['success'] = "Update bản ghi #$magv thành công";
                    }
                    else {
                        $_SESSION['error'] = "Update bản ghi #$magv thất bại";
                    }
                    header("Location: index.php?controller=giangvien&action=index");
                    exit();
                }
            }
            //truyền ra view
            require_once 'view/GiangVien/edit.php';
        }
    
        public function delete() {
            //url trên trình dueyjet sẽ có dạng
    //        ?controller=book&action=delete&id=1
            //bắt id từ trình duyêtj
            $magv = $_GET['magv'];
            if (!is_numeric($magv)) {
                header("Location: index.php?controller=giangvien&action=index");
                exit();
            }
    
            $giangvien = new model();
            $isDelete = $giangvien->delete($magv);
    
            if ($isDelete) {
                //chuyển hướng về trang liệt kê danh sách
                //tạo session thông báo mesage
                $_SESSION['success'] = "Xóa bản ghi #$magv thành công";
            }
            else {
                //báo lỗi
                $_SESSION['error'] = "Xóa bản ghi #$magv thất bại";
            }
    
    
            exit();
    
    
        }
    }
?>