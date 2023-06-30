<?php

/* Tên namespace nằm trong thư mục*/

namespace App\Models;

session_start();
ob_start();

use PDO;
use PDOException;
class BaseModel
{
    protected $conn;
    protected $sqlBuilder;
    /* Phương thức khởi tạo*/
    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=ass_php2_we17310;charset=utf8", "root", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw $e;
        }
    }
    /**
     * Lấy ra toàn bộ dữ liệu của bảng
     * prepare: chuẩn bị thực thi câu lệnh
     * thực thi câu lệnh
     */
    public static function danhmuc3()
    {
        $model = new static;
        $model->sqlBuilder = "SELECT *FROM $model->tableName ORDER BY $model->column desc limit 3";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt ->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    public static function quiz5()
    {
        $model = new static;
        $model->sqlBuilder = "SELECT *FROM $model->tableName ORDER BY $model->column asc limit 5";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt ->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    public static function danhmuc()
    {
        $model = new static;
        $model->sqlBuilder = "SELECT *FROM $model->tableName ORDER BY $model->column desc";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt ->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    public static function taikhoan()
    {
        $model = new static;
        $model->sqlBuilder = "SELECT *FROM $model->tableName ORDER BY $model->column desc";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt ->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    public static function thongke()
    {
        $model = new static;
        $model->sqlBuilder = "SELECT *FROM $model->tableName ORDER BY $model->column desc";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt ->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    public static function hotro()
    {
        $model = new static;
        $model->sqlBuilder = "SELECT *FROM $model->tableName ORDER BY $model->column desc";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt ->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    public static function quiz()
    {
        $model = new static;
        $model->sqlBuilder = "SELECT *FROM $model->tableName ORDER BY $model->column desc";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt ->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    public static function all()
    {
        $model = new static;
        $model->sqlBuilder = "SELECT *FROM $model->tableName";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt ->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    public static function findOne($id)
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName WHERE id='$id'";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        if($result){
            return $result[0];
        }
        return false;
    }
    /**
     * Funcion insert: thêm dữ liệu
     * params: $data là 1 mảng dữ liệu có cấu trúc như sau
     * $data = [name=>'lananh',age=>21,address=>'Hà Nội',..]
     */
    public function insert($data=[])
    {
        $this->sqlBuilder = "INSERT INTO $this->tableName(";
        $colName = '';
        $params = '';

        foreach ($data as $key=>$value){
            $colName .= "`$key`, ";
            $params .= ":$key, ";
        }

        /* Xóa dấu ', ' ở bên phải chuỗi */
        $colName = rtrim($colName, ', ');
        $params = rtrim($params, ', ');

        /* Nối vào chuỗi SQL */
        $this->sqlBuilder .= $colName . ") VALUES(" . $params . ")";
        echo $this->sqlBuilder;
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute($data);
    }
    public function update($id,$data=[])
    {
        $this->sqlBuilder = "UPDATE $this->tableName SET";

        foreach ($data as $colName => $value){
            $this->sqlBuilder .= "`$colName`=:$colName, ";
        }

        /* Xóa dấu ', ' ở bên phải chuỗi */
        $this->sqlBuilder = rtrim($this->sqlBuilder, ", ");
        $this->sqlBuilder .= " WHERE id=$id";
        echo $this->sqlBuilder;
        $data['id'] = $id;
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute($data);

    }
    public function delete($id){
        $this->sqlBuilder ="DELETE FROM $this->tableName WHERE id=$id";
        $stmt =$this->conn->prepare($this->sqlBuilder);
        $stmt->execute();
    }

    public function where($colName,$codition,$value){
        $this->sqlBuilder = "SELECT * FROM $this->tableName WHERE `$colName` $codition '$value' ";
        return $this;
    }
    public function andWhere($colName,$condition,$value){
        $this->sqlBuilder .= " AND `$colName` $condition '$value' ";
        return $this;
    }
    public function orWhere($colName,$condition,$value){
        $this->sqlBuilder .= " OR `$colName` $condition '$value' ";
        return $this;
    }
    public function get(){
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute();
        $result=$stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    // function checkUser($name_user, $password){
    //     $sql = "select * from user where name_user ='".$name_user."' AND password = '".$password."'";
    //     $stmt = $this->conn->prepare($this->sqlBuilder);
    //     $stmt->execute();
    //     $result=$stmt->fetchAll(PDO::FETCH_CLASS);
    //     return $result;
    // }
}