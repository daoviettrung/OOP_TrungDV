<?php
@ini_set('display_startup_errors',1);
@ini_set('display_errors',1);
require_once("Database.php") ;
require_once( "BaseDao.php");
require_once( "contans.php");
require_once( "../Interface/InterfaceDao/IbaseDao.php");
class CategoryDao extends BaseDao implements Ibasedao
{
    protected $nameObject = CATEGORY;
}