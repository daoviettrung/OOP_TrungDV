<?php

require_once( "BaseDao.php");
require_once( "../Contans/contans.php");
require_once( "../Interface/InterfaceDao/IBaseDao.php");

class CategoryDao extends BaseDao implements IBasedao
{
    protected $tableName = CATEGORY;
}