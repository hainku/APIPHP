<?php
require_once'Database.php';
Class User extends Database{
    public function login($un,$pw){
        $sql="select * from user  where IdNumber=? and Password=?";
        $stmt=$this->conn->prepare($sql);
        $stmt->bind_param('ss',$un,$pw);
        $stmt->execute();
        $res=$stmt->get_result();
        return $res;
    }
}
?>