
<?php include('../view/template/header.php');?>
<?php 

?>
<style>
    .bnn-1{
        background-color: rgb(65, 65, 65);
    }
</style>
        <!-- <div id="content-wrapper" class="d-flex flex-column text-muted"> -->
            <!-- <div id="content"> -->
                <div class="m-3">
                    <?php 
                            if(isset($_GET['success'])){
                            echo "<h6 style='color:white;background-color:green;height:40px;'>{$_GET['success']}</h6>";
                            }
                            if(isset($_GET['error'])){
                                echo "<h6 style='color:white;background-color:red;height:40px;'>{$_GET['error']}</h6>";
                                }

                        //    include('../error.php');
                        ?>
                    <div class="d-grid gap-2 justify-content-md-end">
                        <a href="add.php">
                            <button  class="btn btn-primary fs-6" type="submit" name="btnThem">Thêm mới +</button>
                        </a>
                    </div>
                   
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    
                    <div class="card shadow mb-4 text-muted">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Hiển thị danh sách</h6>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row mb-3">
                                        <div class="col-sm-12 col-md-6 ">
                                            <div id="dataTable_filter" class="dataTables_filter float-start">
                                                <label class="d-flex">Search:&nbsp;&nbsp;
                                                <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
                                                </label>
                                            </div>
                                        
                                        </div>
                                    </div>
                                    
                                    <div class="row ">
                                        <div class="col-sm-12">
                                            <table class="table table-bordered dataTable text-muted" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                <thead>
                                                    <tr role="row">
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Họ và tên</th>
                                                        <th scope="col">Giới tính</th>
                                                        <th scope="col">Năm sinh</th>
                                                        <th scope="col">Nghề nghiệp</th>
                                                        <th scope="col">Ngày cấp thẻ</th>
                                                        <th scope="col">Ngày hết hạn</th>
                                                        <th scope="col">Địa chỉ</th>
                                                    
                                                        <th scope="col"></th>
                                                        <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                                                    <?php
                                                       include('../config/db.php');
                                                        // Bước 02: Thực hiện truy vấn
                                                        $sql = "SELECT * FROM `docgia`";
                                                        $result = mysqli_query($conn,$sql);
                                                        // Bước 03: Xử lý kết quả truy vấn
                                                        if(mysqli_num_rows($result) > 0){
                                                            while($row = mysqli_fetch_assoc($result)){
                                                    ?>
                                                                <tr>
                                                                    <th scope="row"><?php echo $row['madg']; ?></th>
                                                                    <td><?php echo $row['hovaten']; ?></td>
                                                                    <td><?php echo $row['gioitinh']; ?></td>
                                                                    <td><?php echo $row['namsinh']; ?></td>
                                                                    <td><?php echo $row['nghenghiep']; ?></td>
                                                                    <td><?php echo $row['ngaycapthe']; ?></td>
                                                                    <td><?php echo $row['ngayhethan']; ?></td>
                                                                    <td><?php echo $row['diachi']; ?></td>
                                                                    <td><a href="edit.php?id=<?php echo $row['madg']; ?>" class="h"><button type="submit" name="btnSua"class="btn btn-success">Sửa</button></a></td>
                                                                    <td><a href="../controller/DeleteController.php?id=<?php echo $row['madg']; ?>" class="h"><button type="submit" name="btnXoa" class="btn btn-danger">Xóa</button></a></td>
                                                                </tr>
                                                    <?php
                                                            }
                                                        }
                                                    ?>
                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers float-end" id="dataTable_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                                                        <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                    </li>
                                                    <li class="paginate_button page-item active">
                                                        <a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                                    </li>
                                                    <li class="paginate_button page-item next" id="dataTable_next">
                                                        <a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include('../view/template/footer.php');?>
