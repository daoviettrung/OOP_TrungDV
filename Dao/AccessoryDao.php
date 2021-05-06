<?php

require_once("BaseDao.php");
require_once( "../Contans/contans.php");
require_once( "../Interface/InterfaceDao/IbaseDao.php");

class AccessoryDao extends BaseDao implements Ibasedao
{
    protected $nameObject = ACCESSORY;
}

