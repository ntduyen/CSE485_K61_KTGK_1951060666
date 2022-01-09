<?php
    require_once 'config/dbConfig.php';

    class LibrariesModel{
        private $madg;
        private $hovaten;
        private $namsinh;
        private $nghenghiep;
        private $ngaycapthe;
        private $ngayhethan;
        private $diachi;


        // Định nghĩa các phương thức để sau này nhận các thao tác tương ứng với các action
        public function getAllUsers(){
            // B1. Khởi tạo kết nối
            $conn = $this->connectDb();
            // B2. Định nghĩa và thực hiện truy vấn
            $sql = "SELECT * FROM docgia";
            $result = mysqli_query($conn,$sql);

            // Tôi khai báo biến lưu kết quả trả về (dạng mảng)
            $arr_users = [];
            // B3. Xử lý và (KO PHẢI SHOW KẾT QUẢ) TRẢ VỀ KẾT QUẢ
            if(mysqli_num_rows($result) > 0){
                // Lấy tất cả dùng mysqli_fetch_all
                $arr_users = mysqli_fetch_all($result, MYSQLI_ASSOC); //Sử dụng MYSQLI_ASSOC để chỉ định lấy kết quả dạng MẢNG KẾT HỢP
            }

            return $arr_users;
        }
        public function update($bd = []) {
            $connection = $this->connectDb();
            $queryUpdate = "UPDATE docgia 
            SET hovaten = '{$bd['hovaten']}', gioitinh = '{$bd['gioitinh']}', namsinh = '{$bd['namsinh']}', nghenghiep = '{$bd['nghenghiep']}', ngaycapthe = '{$bd['ngaycapthe']}', ngayhethan = '{$bd['ngayhethan']}', diachi = '{$bd['diachi']}' WHERE madg = {$bd['madg']}";
            $isUpdate = mysqli_query($connection, $queryUpdate);
            $this->closeDb($connection);
            return $isUpdate;
        }
        public function insert($param = []) {
            $connection = $this->connectDb();
            //tạo và thực thi truy vấn
            $queryInsert = "INSERT INTO docgia (hovaten, gioitinh, namsinh, nghenghiep, ngaycapthe, ngayhethan, diachi)
            VALUES ('{$param['hovaten']}', '{$param['gioitinh']}', '{$param['namsinh']}', '{$param['nghenghiep']}', '{$param['ngaycapthe']}', '{$param['ngayhethan']}', '{$param['diachi']}')";
            $isInsert = mysqli_query($connection, $queryInsert);
            $this->closeDb($connection);
    
            return $isInsert;
        }
        public function delete($madg = null) {
            $connection = $this->connectDb();
    
            $queryDelete = "DELETE FROM docgia WHERE madg = {$madg}";
            $isDelete = mysqli_query($connection, $queryDelete);
    
            $this->closeDb($connection);
    
            return $isDelete;
        }

        public function getBDById($madg = null) {
            $connection = $this->connectDb();
            $querySelect = "SELECT * FROM docgia WHERE madg={$madg}";
            $results = mysqli_query($connection, $querySelect);
            $bdArr = [];
            if (mysqli_num_rows($results) > 0) {
                $bds = mysqli_fetch_all($results, MYSQLI_ASSOC);
                $bdArr = $bds[0];
            }
            $this->closeDb($connection);
    
            return $bdArr;
        }

        public function connectDb() {
            $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            if (!$connection) {
                die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            }
    
            return $connection;
        }
    
        public function closeDb($connection = null) {
            mysqli_close($connection);
        }

    }


?>