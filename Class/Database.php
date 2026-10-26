<?php
Class Database{
    protected $conn;
    public function __construct(){
        $_ENV = parse_ini_file(__DIR__ . "/../.env");
        $host = $_ENV['HOST'];
        $port = 24780;
        $db   = $_ENV['DB'];
        $user = $_ENV['USER'];
        $pass = $_ENV['PASS'];

        $caCertPath = __DIR__ . '/ca.pem'; 
        $this->conn=mysqli_init();//enable ssl

        //private key, public cert, ca cert file, ca path, SSl cipher
        $this->conn->ssl_set(NULL,NULL,$caCertPath,NULL,NULL);

        //NULL is socket
        $this->conn->real_connect($host,$user,$pass,$db,$port,NULL,MYSQLI_CLIENT_SSL);
    }
}
?>