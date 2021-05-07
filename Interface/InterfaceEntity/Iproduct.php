<?php

require_once("IbaseRow.php");

interface  Iproduct extends IbaseRow
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
