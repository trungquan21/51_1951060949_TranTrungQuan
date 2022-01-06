<?php
    
    require "header.php";
?>

<div style="color: red">
    <?php echo $error; ?>
</div>
<div style = "width:40%" class="container">
    <h1 style="display: flex;align-items: center;justify-content: center;margin-bottom:30px;margin-top:50px;color:green">Chỉnh sửa thông tin giảng viên</h1>
<form action="" method="post">
Họ và tên:
    <input class="form-control" type="text"
           name="hovaten"
           value="<?php
           echo isset($_POST['hovaten']) ? $_POST['hovaten'] : $giangvien['hovaten']?>"
    />
    <br />
    Ngày sinh:
    <input class="form-control" type="date"
           name="ngaysinh"
           value="<?php
           echo isset($_POST['ngaysinh']) ? $_POST['ngaysinh'] : $giangvien['ngaysinh']?>"
    />
    <br />
    Giới tính:
    <input class="form-control" type="text"
           name="gioitinh"
           value="<?php
           echo isset($_POST['gioitinh']) ? $_POST['gioitinh'] : $giangvien['gioitinh']?>"
    />
    <br />
    Trình độ:
    <input class="form-control" type="text"
           name="trinhdo"
           value="<?php
           echo isset($_POST['trinhdo']) ? $_POST['trinhdo'] : $giangvien['trinhdo']?>"
    />
    <br />
    Chuyên môn:
    <input class="form-control" type="text"
           name="chuyenmon"
           value="<?php
           echo isset($_POST['chuyenmon']) ? $_POST['chuyenmon'] : $giangvien['chuyenmon']?>"
    />
    <br />
    Học hàm:
    <input class="form-control" type="text"
           name="hocham"
           value="<?php
           echo isset($_POST['hocham']) ? $_POST['hocham'] : $giangvien['hocham']?>"
    />
    <br />
    Học vị:
    <input class="form-control" type="text"
           name="hocvi"
           value="<?php
           echo isset($_POST['hocvi']) ? $_POST['hocvi'] : $giangvien['hocvi']?>"
    />
    <br />
    Cơ quan:
    <input class="form-control" type="text"
           name="coquan"
           value="<?php
           echo isset($_POST['coquan']) ? $_POST['coquan'] : $giangvien['coquan']?>"
    />
    <br />
    <input type="submit" name="submit" value="Update" />
</form>
</div>