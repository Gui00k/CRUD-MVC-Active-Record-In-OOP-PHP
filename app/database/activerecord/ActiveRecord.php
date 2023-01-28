<?php
namespace app\database\activerecord;

 

use ReflectionClass;

use app\database\interfaces\ActiveRecordInterface;
use app\database\interfaces\ActiveRecordExecuteInterface;

abstract class ActiveRecord implements ActiveRecordInterface{
    protected $table = null;
    protected $attributes = [];


    public function __construct(){
        if(!$this->table){
            $this->table = strtolower((new ReflectionClass($this))->getShortName());
           // var_dump($this->table);
        }
        
    }
    public function getTable(){
        return $this->table;
    }

  
    public function __set($attribute, $value){
        //var_dump($this);
        $this->attributes[$attribute] = $value;
    }

    public function __get($attribute){
      //  var_dump($attribute);
        return $this->attributes[$attribute]; 
    }

    public function getAttributes(){
        // var_dump($this);
         return $this->attributes;
     }

    public function execute(ActiveRecordExecuteInterface $ActiveRecordExecuteInterface){
        return $ActiveRecordExecuteInterface->execute($this);
    }

    // public function update(UpdateInterface $updateInterface){
    //    //var_dump($this);
    //     return $updateInterface->update($this);
    // }
    //  public function insert(InsertInterface $InsertInterface){
    //     return $InsertInterface->Insert($this);
    //  }
    // public function delete(){

    // }
    // public function find(){

    // }
    // public function findBy(){

    // }
    // public function all(){

    // }
}