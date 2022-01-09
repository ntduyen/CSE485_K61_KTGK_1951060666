<?php
require 'view/template/header.php'
?>
<main>
    <div class="container">
        <div class="row">
            <div style="color: red">
                <?php echo $error; ?>
            </div>
            <div class="col-md-8 ms-auto me-auto">
                <h4>Sửa thông tin độc giả</h4>
                <form class="row g-3 needs-validation" method="post" action="" novalidate>
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Tên độc giả</label>
                        <input type="text" class="form-control" name="bd_name" id="validationCustom01" value="<?php echo isset($_POST['bd_name']) ? $_POST['bd_name'] : $BD['bd_name']?>" required>
                    </div>
                    <div>
                        <span class="me-3">Giới tính</span>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bd_sex" id="inlineRadio1" value="Nam">
                            <label class="form-check-label" for="inlineRadio1">Nam</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bd_sex" id="inlineRadio2" value="Nữ">
                            <label class="form-check-label" for="inlineRadio2">Nữ</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Năm sinh</label>
                        <input type="text" class="form-control" name="bd_age" id="validationCustom02" value="<?php echo isset($_POST['bd_age']) ? $_POST['bd_age'] : $BD['bd_age']?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Nghề nghiệp</label>
                        <input type="text" class="form-control" name="bd_bgroup" id="validationCustom02" value="<?php echo isset($_POST['bd_bgroup']) ? $_POST['bd_bgroup'] : $BD['bd_bgroup']?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Ngày cấp thẻ</label>
                        <input type="date" class="form-control" name="bd_reg_date" id="validationCustom02" value="<?php echo isset($_POST['bd_reg_date']) ? $_POST['bd_reg_date'] : $BD['bd_reg_date']?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Ngày hết hạn</label>
                        <input type="text" class="form-control" name="bd_phno" id="validationCustom02" value="<?php echo isset($_POST['bd_phno']) ? $_POST['bd_phno'] : $BD['bd_phno']?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" name="bd_phno" id="validationCustom02" value="<?php echo isset($_POST['bd_phno']) ? $_POST['bd_phno'] : $BD['bd_phno']?>" required>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" name="submit" type="submit">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>