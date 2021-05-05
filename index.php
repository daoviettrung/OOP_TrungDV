<?php
require_once("dao/database.php") ;
require_once("entity/product.php");
 $db = new database();
 $row = new product(1,"trung","jjlj");
 $db->insertTable("productTable",$row);
 $db->selectTable("productTable");



