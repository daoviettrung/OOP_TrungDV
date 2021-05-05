<?php
@ini_set('display_startup_errors',1);
@ini_set('display_errors',1);
require_once("database.php") ;
require_once( "../BaseDao.php");
require_once("../entity/product.php");

class ProductDao extends BaseDao implements ibasedao
{

    function findAll()
    {
        $db = database::getInstance();
        $db->selectTable("productTable");
    }

    function findById($id)
    {
        $db = database::getInstance();
        $size = sizeof($db->productTable);
        foreach ($db->productTable as $c) {
            if ($c->getId() == $id) {
                echo "Id:" . $c->getId();
                echo "Name:" . $c->getName();
                echo "Category:" . $c->getCategory();
            }
        }
    }


    function findByName($name){
        $db = database::getInstance();
        $size = sizeof($db->productTable);
        foreach ($db->productTable as $c) {
            if ($c->getName() == $name) {
                echo "Id:" . $c->getId();
                echo "Name:" . $c->getName();
                echo "Category:" . $c->getCategory();
            }
        }

    }
    
}
/*$p = new ProductDao();
$row = new product(1,"trung","fsd");
$p->insert($row);
$p->findAll();*/



