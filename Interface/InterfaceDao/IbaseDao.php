<?php
interface Ibasedao{
    public function insert($row);
    public function update($row);
    public function delete($row);
    public function findAll();
    public function findById($id);

}