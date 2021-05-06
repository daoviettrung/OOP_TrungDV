<?php

interface InterfaceDatabase
{
    public static function getInstance();
    public function insertTable($name,$row);
    public function updatable($name, $row);
    public function deleteTable($name, $row);
    public function selectTable($name);
    public function updatetableById($id, $row);
    public function truncateTable($name);
}
