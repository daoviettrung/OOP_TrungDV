<?php
include "dao/database.php";
$db = new database();
$db->insertTable("productTable",2);
$db->insertTable("productTable",2);
$db->insertTable("productTable",2);
$db->updatable("productTable",1);
$db->deleteTable("productTable",1);
$db->truncateTable("productTable");
$db->selectTable("productTable");
