<?php

require_once("../Dao/CategoryDao.php");
require_once("../Entity/Category.php");

class CategoryDaoDemo
{
    /**
     * test function insert in CategoryDao class
     * @return boolean
     */
    function insertTest()
    {
        $cateDao = new CategoryDao();
        $row = new Category(1, "trung1");
        return $cateDao->insert($row);
    }

    /**
     * test funciton findAll in CategoryDao class
     * @return array object
     */
    function selectTest()
    {
        $cateDao = new CategoryDao();
        return $cateDao->findAll();
    }

    /**
     * test funciton update in CategoryDao class
     * @return boolean
     */
    function updatetest()
    {
        $cateDao = new CategoryDao();
        $row = new Category(1, "trung", " abc");
        return $cateDao->update($row);
    }

    /**
     * test funciton delete in CategoryDao class
     * @return boolean
     */
    function delete()
    {
        $cateDao = new CategoryDao();
        $row = new Category(1, "trung", "abc");
        return $cateDao->delete($row);
    }

    /**
     * test funciton findById in CategoryDao class
     * @return object
     */
    function findByIdTest()
    {
        $cateDao = new CategoryDao();
        return $cateDao->findById(2);
    }
}
