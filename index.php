<?php
require_once'Class/User.php';
$u=new User();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $un=$_POST['un'];
    $pw=$_POST['pw'];
    $data=$u->login($un,$pw);
    $res=[];
    while($row=$data->fetch_assoc()){
        $res[]=$row;
    }
    echo json_encode($res);

}
?>