<?php

require_once( "BaseDao.php");
require_once( "../Contans/contans.php");
require_once( "../Interface/InterfaceDao/IbaseDao.php");

class CategoryDao extends BaseDao implements Ibasedao
{
    protected $nameObject = CATEGORY;
}