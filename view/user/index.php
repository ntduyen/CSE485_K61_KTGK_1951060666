<?php
    require 'src/template/header.php'
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center mb-3">
                <h3>Danh Sách Chi Tiết Độc Giả</h3>
            </div>
            <div class="col-md-12 mb-3">
                <a href="index.php?controller=user&action=index"><button class="btn btn-primary">Xem chi tiết</button></a>
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
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($row) {
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
    require 'src/template/footer.php'
?>