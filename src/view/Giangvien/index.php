<?php
//file hiển thị thông báo lỗi
require_once 'view/message/message.php';
require "header.php";
?>


<div class="container">
    <h1 style="display: flex;align-items: center;justify-content: center;margin-bottom:30px;margin-top:50px;
    ">Danh sách giảng viên</h1>
    <a href="index.php?act=add">
    <button type="button" class="btn btn-success" style="margin-bottom:20px">Thêm mới giảng viên</button>
    </a>
<table border="1" cellspacing="0" cellpadding="8" style="border: 1px solid #ddd;">
    <tr>
        <th scope="col" style="border: 1px solid #ddd;">Mã giảng viên</th>
        <th scope="col" style="border: 1px solid #ddd;">Họ và tên</th> 
        <th scope="col" style="border: 1px solid #ddd;">Ngày sinh</th> 
        <th scope="col" style="border: 1px solid #ddd;">Giới tính</th> 
        <th scope="col" style="border: 1px solid #ddd;">Trình độ</th>
        <th scope="col" style="border: 1px solid #ddd;">Chuyên môn</th>
        <th scope="col" style="border: 1px solid #ddd;">Học hàm</th>
        <th scope="col" style="border: 1px solid #ddd;">Học vị</th>
        <th scope="col" style="border: 1px solid #ddd;">Cơ quan</th>
        <th scope="col" style="border: 1px solid #ddd;">Manager</th>
        
        
    </tr>
    <?php if (!empty($giangviens)): ?>
        <?php foreach ($giangviens AS $giangvien) : ?>
            <tr>
                <td ><?php echo $giangvien['magv'] ?></td>
                <td><?php echo $giangvien['hovaten'] ?></td>
                <td><?php echo $giangvien['ngaysinh'] ?></td>
                <td><?php echo $giangvien['gioitinh'] ?></td>
                <td><?php echo $giangvien['trinhdo'] ?></td>
                <td><?php echo $giangvien['chuyenmon'] ?></td>
                <td><?php echo $giangvien['hocham'] ?></td>
                <td><?php echo $giangvien['hocvi'] ?></td>
                <td><?php echo $giangvien['coquan'] ?></td>
                <td>
                    <?php
                    //khai báo 2 url  sửa, xóa
                    
                    $urlEdit =
                        "index.php?act=edit&magv=" . $giangvien['magv'];
                    $urlDelete =
                        "index.php?act=delete&magv=" . $giangvien['magv'];
                    ?>
                    <a href="<?php echo $urlDetail?>">Chi tiết</a> &nbsp;
                    <a href="<?php echo $urlEdit?>">Edit</a> &nbsp;
                    <a onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                       href="<?php echo $urlDelete?>">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="2">KHông có dữ liệu</td>
        </tr>
    <?php endif; ?>
</table>
</div>
<div style="margin-top : 20px" class="container">

</div>


<?php 
    require "footer.php";
?>