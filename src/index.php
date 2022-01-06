<?php

    $action     = isset($_GET['act']) ? $_GET['act'] : 'index';

    require_once "controller/controller.php";

    $object = new controller(); //Tạo ra đối tượng tương ứng với Class vừa xác định ở trên

    if (!method_exists($object, $action)) {
        die("Phương thức $action không tồn tại trong class controller"); //Kiểm tra action có tồn tại trong Controller ko
    }
    // Nếu có thì gọi action tương ứng tên phương thức
    $object->$action();

?>