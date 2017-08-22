<?php
/**
 * Created by PhpStorm.
 * User: Yves Clêuder
 * Date: 21/08/2017
 * Time: 20:18
 */

require_once("Usuarios.php");

$usuarios = new Usuarios();
$users = $usuarios->getUsers();

if($users["success"] === "no") {
    echo $users["result"];
}
else {
    foreach($users["result"] as $user) {
        echo "ID: ".$user["id"]."<br />";
        echo "Nome: ".$user["nome"]."<br />";
        echo "Sobrenome: ".$user["sobrenome"]."<br />";
        echo "Email: ".$user["email"];
        echo "<br />------------------------------------------<br />";
    }
}
