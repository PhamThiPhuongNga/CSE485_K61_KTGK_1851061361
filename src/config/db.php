<?php
    $conn = mysqli_connect('localhost', 'root', '', '1851061361_libraries');
    if (!$conn) {
        die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
    }
?>