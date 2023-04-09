<?php

require_once("Database.php");
require_once("header.php");
require_once("Form.php");

class Main
{
    private $konfig = [];
    public function __construct($namaModul)
    {
        $this->konfig = $namaModul;
    }
    public function x($namaUrl)
    {
        if (array_key_exists($namaUrl, $this->konfig)) {
            require($this->konfig[$namaUrl]);
        } else {
            require($this->konfig["home"]);
        }
    }
}

$url = [
    "home" => "home.php",
    "add" => "add.php",
    "update" => "update.php",
    "delete" => "delete.php"
];
$main = new Main($url);
$main->x(@$_REQUEST["mod"]);
require_once("footer.php");
