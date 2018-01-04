<?php
//http://php.net/manual/zh/errorfunc.constants.php
/*
 * E_ERROR
 * E_PARSE
 * E_WARNING
 * E_NOTICE
 */
error_reporting(E_ALL);
ini_set( 'display_errors', 'On');
ini_set('xdebug.collect_params',3);

//E_PARSE
$deal='';
//E_WARNING
$deal = [];

foreach($deal as $valuekey=>$value){
    echo $value;
}

function getUser($userName)
{
    $user['sex'] = getUserSex($userName);
    $user['age'] = getUserAge($userName,$user['sex']);
    return $user;
}
function getUserSex($userName){
    return 'man';
}
function getUserAge($userName){
    return 'userName:'.$userName.'userSex:'.$sex.'userAge:18';
}
var_dump(getUser('张三'));


?>