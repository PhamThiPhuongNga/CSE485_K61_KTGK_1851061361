<?php require_once('../view/template/header.php');?>  
<?php 

    $madg = $_GET['id'];
    include('../config/db.php');
    $sqll="SELECT * FROM `docgia` where madg='$madg'";
    // where madg='".$_GET['id']."'"
    $query= mysqli_query($conn,$sqll);
    if(mysqli_num_rows($query)){
        while($row = mysqli_fetch_assoc($query)){

?>
        <div id="content-wrapper" class="d-flex flex-column text-muted">        
                <div class="m-3">
                    <div class="mb-3" >
                        <?php  if(isset($_GET['error'])){
                                echo "<h6 style='color:white;background-color:red;height:40px;'>{$_GET['error']}</h6>";
                                }?>
                        <div class="round shadow">
                            <div class="m-4">
                                <h5 class="text-center h3 pt-3 ">Sửa thông tin Độc giả</h5>
                                <form action="../controller/EditController.php" method="post">
                                    <div class="form-group mb-3">
                                        <label class="" for="txtMadg">Mã độc giả</label>
                                        <input type="text" class="form-control"  readonly id="txtMadg" value="<?php echo $row['madg'];?>" name="txtMadg" >
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="" for="txtHoTen">Họ và tên</label>
                                        <input type="text" class="form-control" id="txtHoTen" value="<?php echo $row['hovaten'];?>" name="txtHoTen" placeholder="Nhập họ tên">
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <div class="col-md-6">
                                            <label for="txtGioitinh">Giới tính</label>
                                            <select class="form-control" name="txtGioitinh"aria-label="Default select example">
                                               
                                                <option value="<?php echo $row['gioitinh'];?>" selected><?php echo $row['gioitinh'];?></option>
                                            
                                                <option value="N/N" >N/N</option>
                                                <option value="Nam">Nam</option>
                                                <option value="Nữ">Nữ</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="txtNamsinh">Năm sinh</label>
                                            <input type="text" class="form-control" value="<?php echo $row['namsinh'];?>" id="txtNamsinh" name="txtNamsinh" placeholder="Nhập năm sinh">
                                        </div>
                                        
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <div class="col-md-6">
                                            <label for="txtNghenghiep">Nghề nghiệp</label>
                                            <input type="text" class="form-control" value="<?php echo $row['nghenghiep'];?>" id="txtNghenghiep" name="txtNghenghiep" placeholder="Nhập nghề nghiệp">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="txtDiachi">Địa chỉ</label>
                                            <input type="text" class="form-control" value="<?php echo $row['diachi'];?>" id="txtDiachi" name="txtDiachi" placeholder="Nhập dịa chỉ">
                                        </div>
                                        
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <div class="col-md-6">
                                            <label for="txtCapthe">Ngày cấp thẻ</label>
                                            <input type="date" class="form-control" value="<?php echo $row['ngaycapthe'];?>" id="txtCapthe" name="txtCapthe" placeholder="">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="txtHethan">Ngày hết hạn</label>
                                            <input type="date" class="form-control" value="<?php echo $row['ngayhethan'];?>" id="txtHethan" name="txtHethan" placeholder="">
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end p-3">
                                        <button class="btn btn-primary me-md-2" name="btnLuuEdit" type="submit">Lưu</button>
                                    </div>
                                </form> 
                            </div> 
                        </div>  
                    </div> 
                </div>
            </div>
        </div>   
<?php }} ?>     
<?php require_once('../view/template/footer.php');?>   