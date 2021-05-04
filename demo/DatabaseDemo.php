<?php
include "dao/database.php";
class DatabaseDemo
{
    function __construct()
    {
        $this->insertTableTest();
        var_dump($this->selectTableTest());
    }

    function insertTableTest()
    {
        $db = new database();
        $row = new product(1, "trung", "ma");
        $row2 = new product(2, "trung2", "ma");
        $row1 = new product(3, "ttttt", "quy");
        $db->insertTable("productTable", $row);
        $db->insertTable("productTable", $row1);
        $db->insertTable("productTable", $row2);
    }
    function selectTableTest()
    {
        $db = new database();
        $db->selectTable("productTable");
    }
    function updateTableTest()
    {
        $db = new database();
        $row = new product(1, "trung", "dep trai");
        $db->updatable("productTable", $row);
    }
    function deleteTableTest()
    {
        $db = new database();
        $row = new product(1, "trung", "dep trai");
        $db->deleteTable("productTable", $row);
    }
    function trucateTableTest()
    {
        $db = new database();

        $db->truncateTable("productTable");
    }
    function initDatabase()
    {
        $db = new database();
        $row = new product(6, "trung", "coder");
        $row1 = new category(1, "trung", "category");
        $row2 = new accessory(1, "trung", "accessory");
        $db->insertTable("productTable", $row);
        $db->insertTable("categoryTable", $row1);
        $db->insertTable("accessory", $row2);
    }
}
