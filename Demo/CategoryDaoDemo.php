<?php

require_once("../Dao/CategoryDao.php");
require_once("../Entity/Category.php");

class CategoryDaoDemo
{
    function insertTest()
    {
        $cateDao = new CategoryDao();
        $row= new Category(1, "trung", "abc");
        return $cateDao->insert($row);
    }

    function selectTest()
    {
        $cateDao = new CategoryDao();
        return $cateDao->findAll();
    }

    function updatetest()
    {
        $cateDao = new CategoryDao();
        $row= new Category(1, "trung"," abc");
        return $cateDao->update($row);
    }

    function delete()
    {
        $cateDao = new CategoryDao();
        $row= new Category(1, "trung", "abc");
        return $cateDao->delete($row);
    }

    function findByIdTest()
    {
        $cateDao = new CategoryDao();
        return $cateDao->findById(2);
    }

}
