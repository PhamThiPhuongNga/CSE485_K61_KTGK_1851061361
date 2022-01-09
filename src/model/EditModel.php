<?php 
    $madg= $_POST['txtMadg'];
    $name= $_POST['txtHoTen'];
    $gioitinh= $_POST['txtGioitinh'];
    $namsinh= $_POST['txtNamsinh'];
    $nghenghiep= $_POST['txtNghenghiep'];
    $diachi= $_POST['txtDiachi'];
    $capthe= $_POST['txtCapthe'];
    $hethan= $_POST['txtHethan'];

    include('../config/db.php');
    $sql="UPDATE `docgia` SET `hovaten`='$name',`gioitinh`='$gioitinh',`namsinh`='$namsinh',`nghenghiep`='$nghenghiep',`ngaycapthe`='$capthe',`ngayhethan`='$hethan',`diachi`='$diachi'
    WHERE madg = '$madg'";
    $truyvan= mysqli_query($conn,$sql);
    if(!$truyvan){
        $error="Sửa thất bại";
        header("location: ../view/index.php?error=$error");
    }
    else
    {
        $success="Sửa thành công";
        header("location: ../view/index.php?success=$success");
    }
    mysqli_close($conn);
    
?>