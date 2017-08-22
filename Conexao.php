<?php
/**
 * Created by PhpStorm.
 * User: Yves Clêuder
 * Date: 21/08/2017
 * Time: 20:00
 */


class Conexao {

    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    protected $con;

    public function __construct() {
        $this->con = mysqli_connect($this->host, $this->user, $this->pass);
    }

    public function setDb($db) {
        mysqli_select_db($this->con, $db);
    }

    public function getConnection() {
        return $this->con;
    }
}

