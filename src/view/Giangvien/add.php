<?php
    
    require "header.php";
?>

<div class="container">
            <h5 class="text-center text-primary mt-5">Thêm mới giảng viên</h5>
<div>

<!--</form>-->
<div style="color: red">
    <?php echo $error; ?>
</div>
<div class="container">
<form method="post" action="">
    <div class="form-group">
    Ho va ten :
    <input type="text" class="form-control" name="hovaten" value="" />
    </div>
    <br />
    Ngay Sinh :
    <input type="date" class="form-control" name="ngaysinh" value="" />
    <br />
    Gioi tinh :
    <input type="text" class="form-control" name="gioitinh" value="" />
    <br />
    Trinh do :
    <input type="text" class="form-control" name="trinhdo" value="" />
    <br />
    Chuyen mon :
    <input type="text" class="form-control" name="chuyenmon" value="" />
    <br />
    Hoc ham :
    <input type="text" class="form-control" name="hocham" value="" />
    <br />
    Hoc vi :
    <input type="text" class="form-control" name="hocvi" value="" />
    <br />
    Co quan :
    <input type="text" class="form-control" name="coquan" value="" />
    <br />
    <input type="submit" name="submit" value="Save" />
</form>
</div>
