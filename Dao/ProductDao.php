<?php

require_once( "../Interface/InterfaceDao/IbaseDao.php");
require_once( "BaseDao.php");
require_once( "../Contans/contans.php");

class ProductDao extends BaseDao implements Ibasedao
{
    protected $nameObject = PRODUCT;
    
}


