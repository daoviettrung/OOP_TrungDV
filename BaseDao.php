<?php
abstract class BaseDao
{
    function insert($row)
    {
        $db = new database();
        if (get_class($row) == "product") {
           
            if ($db->insertTable("productTable", $row)) {
                $db->insertTable("productTable", $row);
                return true;
            } else {
                return false;
            }
        }
        if (get_class($row) == "category") {
            if ($db->insertTable("categoryTable", $row)) {
                $db->insertTable("categoryTable", $row);
                return true;
            } else {
                return false;
            }
        }
        if (get_class($row) == "accessory") {
            if ($db->insertTable("accessoryTable", $row)) {
                $db->insertTable("accessoryTable", $row);
                return true;
            } else {
                return false;
            }
        }
    }


    function update($row)
    {
        $db = new database();
        if (get_class($row) == "product") {
            if ($db->updatable("productTable", $row)) {
                $db->updatable("productTable", $row);
                return true;
            } else {
                return false;
            }
        }
        if (get_class($row) == "category") {
            if ($db->updatable("categoryTable", $row)) {
                $db->updatable("categoryTable", $row);
                return true;
            } else {
                return false;
            }
        }
        if (get_class($row) == "accessory") {
            if ($db->updatable("accessoryTable", $row)) {
                $db->updatable("accessoryTable", $row);
                return true;
            } else {
                return false;
            }
        }
    }


    function delete($row){
        $db = new database();
        if (get_class($row) == "product") {
            if ($db->deleteTable("productTable", $row)) {
                $db->deleteTable("productTable", $row);
                return true;
            } else {
                return false;
            }

        }
        if (get_class($row) == "category") {
            if ($db->deleteTable("categoryTable", $row)) {
                $db->deleteTable("categoryTable", $row);
                return true;
            } else {
                return false;
            }

        }
        if (get_class($row) == "accessory") {
            if ($db->deleteTable("accessoryTable", $row)) {
                $db->deleteTable("accessoryTable", $row);
                return true;
            } else {
                return false;
            }
        }

    }
}
