<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/12/28
 * Time: 18:15
 */
//ini_set('xdebug.var_display_max_children',2);
//ini_set('xdebug.var_display_max_data',160);
//ini_set('xdebug.var_display_max_depth',5);
var_dump(ini_get('xdebug.var_display_max_children'));
var_dump(ini_get('xdebug.var_display_max_data'));
var_dump(ini_get('xdebug.var_display_max_depth'));
class test {
    public $pub = false;
    private $priv = true;
    protected $prot = 42;
}
$t = new test;
$t->pub = $t;

$data = array(
    'one' => 'a somewhat long string!',
    'two' => array(
        'two.one' => array(
            'two.one.zero' => 210,
            'two.one.one' => array(
                'two.one.one.zero' => 3.141592564,
                'two.one.one.one'  => ['hello'],
            ),
        ),
    ),
    'three' => $t,
    'four' => range(0, 5),
);
var_dump($data);