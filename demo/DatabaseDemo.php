<?php
include "dao/database.php";
class DatabaseDemo{
    function __construct()
    {
        $this->insertTableTest();
        var_dump($this->selectTableTest());
    }

    function insertTableTest(){
        $db = new database();
        $db->insertTable("productTable",1);
        $db->insertTable("productTable",2);
        $db->insertTable("productTable",3);
    }
    function selectTableTest(){
        $db = new database();
        $db->selectTable("productTable");
    }
    function updateTableTest(){
        $db = new database();
        $db->updatable("productTable",1);
    }
    function deleteTableTest(){
        $db = new database();
        $db->deleteTable("productTable",1);
    }
    function trucateTableTest(){
        $db = new database();
        $db->truncateTable("productTable");
    }
    function initDatabase(){
        $db = new database();
        $db->insertTable("productTable",1);
        $db->insertTable("productTable",2);
        $db->insertTable("productTable",3);
        $db->insertTable("productTable",1);
        $db->insertTable("productTable",2);
        $db->insertTable("productTable",3);
        $db->insertTable("productTable",1);
        $db->insertTable("productTable",2);
        $db->insertTable("productTable",3);
        $db->insertTable("productTable",3);

        $db->insertTable("categoryTable",1);
        $db->insertTable("categoryTable",2);
        $db->insertTable("categoryTable",3);
        $db->insertTable("categoryTable",1);
        $db->insertTable("categoryTable",2);
        $db->insertTable("categoryTable",3);
        $db->insertTable("categoryTable",1);
        $db->insertTable("categoryTable",2);
        $db->insertTable("categoryTable",3);
        $db->insertTable("categoryTable",3);

        $db->insertTable("accessoryTable",1);
        $db->insertTable("accessoryTable",2);
        $db->insertTable("accessoryTable",3);
        $db->insertTable("accessoryTable",1);
        $db->insertTable("accessoryTable",2);
        $db->insertTable("accessoryTable",3);
        $db->insertTable("accessoryTable",1);
        $db->insertTable("accessoryTable",2);
        $db->insertTable("accessoryTable",3);
        $db->insertTable("accessoryTable",3);
    }
}