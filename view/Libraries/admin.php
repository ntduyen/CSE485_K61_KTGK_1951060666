<?php
    require 'view/template/header.php'
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center mb-3">
                <h3>Danh Sách Chi Tiết Độc Giả</h3>
            </div>
            <div class="col-md-12 mb-3">
                <a href="index.php?controller=libraries&action=add"><button class="btn btn-primary">Thêm độc giả</button></a>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Mã độc giả</th>
                            <th scope="col">Họ và têm</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Năm sinh</th>
                            <th scope="col">Nghề nghiệp</th>
                            <th scope="col">Ngày cấp thẻ</th>
                            <th scope="col">Ngày hết hạn</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($bdonor as $row) {
                            $urlEdit =
                            "index.php?controller=libraries&action=edit&madg=" . $row['madg'];
                            $urlDelete =
                            "index.php?controller=libraries&action=delete&madg=" . $row['madg'];
                    ?>
                            <tr>
                                <th scope="row"><?php echo $row['madg'] ?></th>
                                <td><?php echo $row['hovaten'] ?></td>
                                <td><?php echo $row['gioitinh'] ?></td>
                                <td><?php echo $row['namsinh'] ?></td>
                                <td><?php echo $row['nghenghiep'] ?></td>
                                <td><?php echo $row['ngaycapthe'] ?></td>
                                <td><?php echo $row['ngayhethan'] ?></td>
                                <td><?php echo $row['diachi'] ?></td>
                                <td><a href="<?php echo $urlEdit ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="<?php echo $urlDelete ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
    require 'view/template/footer.php'
?>