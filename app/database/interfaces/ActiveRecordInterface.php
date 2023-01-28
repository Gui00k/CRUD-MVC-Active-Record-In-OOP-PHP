<?php 
namespace app\database\interfaces;

//use InsertInterface;
use app\database\interfaces\UpdateInterface;
use app\database\interfaces\InsertInterface;

interface ActiveRecordInterface{
    // public function update(UpdateInterface $updateInterface);
    //  public function insert(InsertInterface $InsertInterface);
     public function execute(ActiveRecordExecuteInterface $activeRecordExecuteInterface);
    // public function find();
    // public function findBy();
    // public function all();
    public function __set($attribute, $value);
    public function __get($attribute);
    public function getTable();
    public function getAttributes();
}

?>