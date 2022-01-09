<?php
require_once 'config/db.php';
class DuanModal{
    private $maduan;
    private $tenduan;
    private $namthuchien;
    private $linhvuc;
    private $nhiemvu;
    private $coquanthuchien;
    public function getAllDA(){
        $conn = $this->connectDb();
        $sql = "SELECT * FROM duan";
        $result = mysqli_query($conn, $sql);
        $arr_da = [];
        if(mysqli_num_rows($result)>0){
            $arr_da = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        return $arr_da;
    }
    public function insert($param = []) {
        $connection = $this->connectDb();
        //tạo và thực thi truy vấn
        $queryInsert = "INSERT INTO duan (tenduan, namthuchien, linhvuc, nhiemvu, coquanthuchien)
        VALUES ('{$param['tenduan']}', '{$param['namthuchien']}', '{$param['linhvuc']}', '{$param['nhiemvu']}', '{$param['coquanthuchien']}')";
        $isInsert = mysqli_query($connection, $queryInsert);
        $this->closeDb($connection);

        return $isInsert;
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
    public function getDAById($da_id = null) {
        $connection = $this->connectDb();
        $querySelect = "SELECT * FROM duan WHERE maduan={$da_id}";
        $results = mysqli_query($connection, $querySelect);
        $daArr = [];
        if (mysqli_num_rows($results) > 0) {
            $das = mysqli_fetch_all($results, MYSQLI_ASSOC);
            $daArr = $das[0];
        }
        $this->closeDb($connection);

        return $daArr;
    }
    public function update($da = []) {
        $connection = $this->connectDb();
        $queryUpdate = "UPDATE duan 
        SET tenduan = '{$da['tenduan']}', namthuchien = '{$da['namthuchien']}', linhvuc = '{$da['linhvuc']}', nhiemvu = '{$da['nhiemvu']}', coquanthuchien = '{$da['coquanthuchien']}'  WHERE maduan = {$da['maduan']}";
        $isUpdate = mysqli_query($connection, $queryUpdate);
        $this->closeDb($connection);

        return $isUpdate;
    }
    public function delete($id = null) {
        $connection = $this->connectDb();

        $queryDelete = "DELETE FROM duan WHERE maduan = {$id}";
        $isDelete = mysqli_query($connection, $queryDelete);

        $this->closeDb($connection);

        return $isDelete;
    }
}

?>