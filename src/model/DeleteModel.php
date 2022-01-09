<?php
    $madg = $_GET['id'];

    include('../config/db.php');
    $sql = "DELETE FROM docgia WHERE madg = '$madg'";

    $number = mysqli_query($conn,$sql);

    if(!$number){
        $error="Xóa thất bại";
        header("location: ../view/index.php?error=$error");
    }
    else
    {
        $success="Xóa thành công";
        header("location: ../view/index.php?success=$success");
    }
   
    mysqli_close($conn);
?>