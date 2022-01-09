<?php require_once('../view/template/header.php');?>  
        <div id="content-wrapper" class="d-flex flex-column text-muted">        
                <div class="m-3">
                    <div class="mb-3" >
                        <?php  if(isset($_GET['error'])){
                                echo "<h6 style='color:white;background-color:red;height:40px;'>{$_GET['error']}</h6>";
                                }?>
                        <div class="round shadow">
                            <div class="m-4">
                                <h5 class="text-center h3 pt-3 ">Thêm mới Độc giả</h5>
                                <form action="../controller/AddController.php" method="post">
                                   
                                    <div class="form-group mb-3">
                                        <label class="" for="txtHoTen">Họ và tên</label>
                                        <input type="text" class="form-control" id="txtHoTen" name="txtHoTen" placeholder="Nhập họ tên">
                                        <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <div class="col-md-6">
                                            <label for="txtGioitinh">Giới tính</label>
                                            <select class="form-control" name="txtGioitinh"aria-label="Default select example">
                                                <option value="N/N" selected>N/N</option>
                                                <option value="Nam">Nam</option>
                                                <option value="Nữ">Nữ</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="txtNamsinh">Năm sinh</label>
                                            <input type="text" class="form-control"  id="txtNamsinh" name="txtNamsinh" placeholder="Nhập năm sinh">
                                        </div>
                                        
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <div class="col-md-6">
                                            <label for="txtNghenghiep">Nghề nghiệp</label>
                                            <input type="text" class="form-control"  id="txtNghenghiep" name="txtNghenghiep" placeholder="Nhập nghề nghiệp">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="txtDiachi">Địa chỉ</label>
                                            <input type="text" class="form-control"  id="txtDiachi" name="txtDiachi" placeholder="Nhập dịa chỉ">
                                        </div>
                                        
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <div class="col-md-6">
                                            <label for="txtCapthe">Ngày cấp thẻ</label>
                                            <input type="date" class="form-control"  id="txtCapthe" name="txtCapthe" placeholder="">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="txtHethan">Ngày hết hạn</label>
                                            <input type="date" class="form-control"  id="txtHethan" name="txtHethan" placeholder="">
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end p-3">
                                        <button class="btn btn-primary me-md-2" name="btnLuuAdd" type="submit">Lưu</button>
                                    </div>
                                </form> 
                            </div> 
                        </div>  
                    </div> 
                </div>
            </div>
        </div>        
<?php require_once('../view/template/footer.php');?>   