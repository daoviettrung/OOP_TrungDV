<?php
require_once "contans.php";
abstract class BaseDao
{
    function insert($row)
    {
        $db = Database::getInstance();
        if (get_class($row) == PRODUCT) {
            if ($db->insertTable(PRODUCT, $row)) {
                $db->insertTable(PRODUCT, $row);
                return true;
            } else {
                return false;
            }
        }
        if (get_class($row) == CATEGORY) {
            if ($db->insertTable(CATEGORY, $row)) {
                $db->insertTable(CATEGORY, $row);
                return true;
            } else {
                return false;
            }
        }
        if (get_class($row) == ACCESSORY) {
            if ($db->insertTable(ACCESSORY, $row)) {
                $db->insertTable(ACCESSORY, $row);
                return true;
            } else {
                return false;
            }
        }
    }

    function update($row)
    {
        $db = Database::getInstance();
        if (get_class($row) == PRODUCT) {
            if ($db->updatable(PRODUCT, $row)) {
                $db->updatable(PRODUCT, $row);
                return true;
            } else {
                return false;
            }
        }
        if (get_class($row) == CATEGORY) {
            if ($db->updatable(CATEGORY, $row)) {
                $db->updatable(CATEGORY, $row);
                return true;
            } else {
                return false;
            }
        }
        if (get_class($row) == ACCESSORY) {
            if ($db->updatable(ACCESSORY, $row)) {
                $db->updatable(ACCESSORY, $row);
                return true;
            } else {
                return false;
            }
        }
    }

    function delete($row){
        $db = Database::getInstance();
        if (get_class($row) == PRODUCT) {
            if ($db->deleteTable(PRODUCT, $row)) {
                $db->deleteTable(PRODUCT, $row);
                return true;
            } else {
                return false;
            }

        }
        if (get_class($row) == CATEGORY) {
            if ($db->deleteTable(CATEGORY, $row)) {
                $db->deleteTable(CATEGORY, $row);
                return true;
            } else {
                return false;
            }

        }
        if (get_class($row) == ACCESSORY) {
            if ($db->deleteTable(ACCESSORY, $row)) {
                $db->deleteTable(ACCESSORY, $row);
                return true;
            } else {
                return false;
            }
        }

    }
}
