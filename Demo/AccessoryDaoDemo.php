<?php

require_once("../Dao/AccessoryDao.php");
require_once("../Entity/Accessory.php");

class CategoryDaoDemo
{
    /**
     * test function insert in AccessoryDao class
     * @return boolean
     */
    function insertTest()
    {
        $accessoryDao = new AccessoryDao();
        $row = new Accessory(1, "trung", "abc");
        return $accessoryDao->insert($row);
    }

    /**
     * test funciton findAll in AccessoryDao class
     * @return array object
     */
    function selectTest()
    {
        $accessoryDao = new AccessoryDao();
        return $accessoryDao->findAll();
    }

    /**
     * test funciton update in AccessoryDao class
     * @return boolean
     */
    function updatetest()
    {
        $accessoryDao = new AccessoryDao();
        $row = new Accessory(1, "trung", "abc");
        return $accessoryDao->update($row);
    }

    /**
     * test funciton delete in AccessoryDao class
     * @return boolean
     */
    function delete()
    {
        $accessoryDao = new AccessoryDao();
        $row = new Accessory(1, "trung", "abc");
        return $accessoryDao->delete($row);
    }

    /**
     * test funciton findById in AccessoryDao class
     * @return object
     */
    function findByIdTest()
    {
        $accessoryDao = new AccessoryDao();
        return $accessoryDao->findById(2);
    }
}
