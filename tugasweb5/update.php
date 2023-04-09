<?php

$database = new Database();
$id = $_GET["id"];

if (isset($_POST['submit'])) {
    $data = [
        'id' => $_POST['id'],
        'nama_barang' => $_POST['nama_barang'],
        'harga' => $_POST['harga']
    ];
    $database->update("tb_barang", $data, "id=" . $id);
    header("location: home");
}

$data = $database->get("tb_barang", "where id=" . $id);

$form = new Form("", "submit");
$form->addField("id", "Id", $data["id"]);
$form->addField("nama_barang", "Nama Barang", $data["nama_barang"]);
$form->addField("harga", "Harga", $data["harga"]);
$form->displayForm();
