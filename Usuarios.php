<?php
/**
 * Created by PhpStorm.
 * User: Yves Clêuder
 * Date: 21/08/2017
 * Time: 20:14
 */

require_once("Conexao.php");

class Usuarios
{
    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function getUsers() {
        $this->conexao->setDb("crud");
        $conn = $this->conexao->getConnection();
        $users = mysqli_query($conn, "SELECT * FROM usuarios");

        if(!$users) {
            return ["success" => "no", "result" => "Não existe nenhum usuário cadastrado na base de dados"];
        } else {
            $i = 0;
            while($user = mysqli_fetch_assoc($users)) {
                $array[$i] = $user;
                $i++;
            }
            return ["success" => "yes", "result" => $array];
        }
    }
}
