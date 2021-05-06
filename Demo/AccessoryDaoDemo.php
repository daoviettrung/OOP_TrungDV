<?php

require_once("../Dao/AccessoryDao.php");
require_once("../Entity/Accessory.php");

class CategoryDaoDemo
{
    function insertTest()
    {
        $accessoryDao = new AccessoryDao();
        $row= new Accessory(1, "trung", "abc");
        return $accessoryDao->insert($row);
    }

    function selectTest()
    {
        $accessoryDao = new AccessoryDao();
        return $accessoryDao->findAll();
    }

    function updatetest()
    {
        $accessoryDao = new AccessoryDao();
        $row= new Accessory(1, "trung", "abc");
        return $accessoryDao->update($row);
    }

    function delete()
    {
        $accessoryDao = new AccessoryDao();
        $row= new Accessory(1, "trung", "abc");
        return $accessoryDao->delete($row);
    }

    function findByIdTest()
    {
        $accessoryDao = new AccessoryDao();
        return $accessoryDao->findById(2);
    }

}
