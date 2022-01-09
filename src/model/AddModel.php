<?php 
    if(isset($_POST['btnLuuAdd'])){
        $name= $_POST['txtHoTen'];
        $gioitinh= $_POST['txtGioitinh'];
        $namsinh= $_POST['txtNamsinh'];
        $nghenghiep= $_POST['txtNghenghiep'];
        $diachi= $_POST['txtDiachi'];
        $capthe= $_POST['txtCapthe'];
        $hethan= $_POST['txtHethan'];
        if(empty($name) ||empty($gioitinh) ||empty($namsinh) ||empty($nghenghiep) ||empty($diachi) ||empty($capthe) || empty($hethan)){
            $error="Không được để trống một trường nào";
            header("location: ../view/error.php?error=$error");
        }
        else{
            include('../config/db.php');
            $sql="INSERT INTO `docgia`(`hovaten`, `gioitinh`, `namsinh`, `nghenghiep`, `ngaycapthe`, `ngayhethan`, `diachi`) 
            VALUES ('$name','$gioitinh','$namsinh','$nghenghiep','$capthe','$hethan','$diachi')";
            $truyvan= mysqli_query($conn,$sql);
            if(!$truyvan){
                $error="Thêm mới thất bại";
                header("location: ../view/index.php?error=$error");
            }
            else
            {
                $success="Thêm mới thành công";
                header("location: ../view/index.php?success=$success");
            }
            mysqli_close($conn);
        }
        
    }
?>