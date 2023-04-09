<?php

$database = new Database();
$id = $_GET["id"];
echo $id;

if (isset($_GET["id"])) {
    $database->delete("tb_barang", "where id=" . $id);
    header("Location: home");
}
