<?php
require_once("Database.php") ;
require_once("BaseDao.php");
require_once("contans.php");
require_once( "../Interface/InterfaceDao/IbaseDao.php");
class AccessoryDao extends BaseDao implements Ibasedao
{
    protected $nameObject = ACCESSORY;
}

