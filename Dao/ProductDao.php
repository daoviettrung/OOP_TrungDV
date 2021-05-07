<?php

require_once( "../Interface/InterfaceDao/IBaseDao.php");
require_once( "BaseDao.php");
require_once( "../Contans/contans.php");

class ProductDao extends BaseDao implements IBasedao
{
    protected $tableName = PRODUCT;
    
}


