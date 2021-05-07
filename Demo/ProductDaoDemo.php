<?php

require_once("../Dao/ProductDao.php");
require_once("../Entity/Product.php");

class ProductDaoDemo
{
    /**
     * test function insert in ProductDao class
     * @return boolean
     */
    function insertTest()
    {
        $productDao = new ProductDao();
        $row = new Product(1, "trung662000", "abc");
        return $productDao->insert($row);
    }

    /**
     * test funciton findAll in ProductDao class
     * @return array object
     */
    function selectTest()
    {
        $productDao = new ProductDao();
        return $productDao->findAll();
    }

    /**
     * test funciton update in ProductDao class
     * @return boolean
     */
    function updatetest()
    {
        $productDao = new ProductDao();
        $row = new product(1, "trung", "abc");
        return $productDao->update($row);
    }

    /**
     * test funciton delete in ProductDao class
     * @return boolean
     */
    function delete()
    {
        $productDao = new ProductDao();
        $row = new product(1, "trung", "abc");
        return $productDao->delete($row);
    }

    /**
     * test funciton findById in ProductDao class
     * @return object
     */
    function findByIdTest()
    {
        $productDao = new ProductDao();
        return $productDao->findById(2);
    }

    /**
     * test funciton findByName in ProductDao class
     * @return object
     */
    function findByNameTest()
    {
        $productDao = new ProductDao();
        return $productDao->findByName("trung");
    }
}



