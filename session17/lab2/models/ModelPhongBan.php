<?php
//Model: phần gần nhất với csdl, chứa các hàm sd để truyền câu lệnh sql vào csdl và lấy kết quả trả về
    trait ModelPhongBan{
        public function listPhongBan(){
            //lấy biến kết nối từ class Connection
            $conn = Connection::getInstance();
            //thực hiện câu lệnh sql, trả kết quả về một biến object
            $query = $conn->query("select * from phongban");
            //duyệt tất cả các bản ghi theo kiểu object
            $result = $query->fetchAll(PDO::FETCH_OBJ);
            //trả về kết quả
            return $result;
        }
    }
?>