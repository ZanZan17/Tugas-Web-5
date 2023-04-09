<?php

$database = new Database();
if (isset($_POST['submit'])) {
    $data = [
        'id' => $_POST['id'],
        'nama_barang' => $_POST['nama_barang'],
        'harga' => $_POST['harga'],
    ];
    $database->insert("tb_barang", $data);
}

$form = new Form("", "submit");
$form->addField("id", "ID");
$form->addField("nama_barang", "Nama Barang");
$form->addField("harga", "Harga");
$form->displayForm();