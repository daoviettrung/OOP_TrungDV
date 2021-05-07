<?php

require_once("IBaseRow.php");

interface  IProduct extends IBaseRow
{
    /**
     * set categories to objects
     * @param $categoryId
     */
    public function setCategoryId($categoryId);

    /**
     * get categories to objects
     * @return mixed
     */
    public function getCategoryId();
}
