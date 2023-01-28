<?php 

use app\database\models\User;
use app\database\activerecord\Find;
use app\database\activerecord\Delete;
use app\database\activerecord\FindBy;
use app\database\activerecord\Insert;
use app\database\activerecord\Update;
use app\database\activerecord\FindAll;
require '../vendor/autoload.php';

$user = new User;
// $user->firstName = 'Guilherme';
// $user->lastName = 'Machado';
//$user->id = 2;
//var_dump($user);
// var_dump($user->execute(new Insert()));
// var_dump($user->execute(new Update()));
// var_dump($user->execute(new Delete()));

// var_dump($user->execute(new FindBy(where:['id' => 3])));
var_dump($user->execute(new FindAll(where:['id' => 3])));
//echo $user->createQuery(new Update);

//var_dump($user->getAttributes());