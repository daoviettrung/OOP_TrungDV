<?php
include "dao/database.php";
$db = new database();
$row= new product(1,"trung","ma");
$row2= new product(2,"trung2","ma");
$row1= new product(1,"ttttt","quy");
$db->insertTable("productTable",$row);
$db->insertTable("productTable",$row2);
/*$db->updatable("productTable",$row1);
$db->deleteTable("productTable",$row1);
$db->selectTable("productTable");*/
$db->updatetableById(1,$row);
