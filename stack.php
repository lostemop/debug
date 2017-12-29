<?php
//ini_set('xdebug.collect_vars', 'on');
ini_set('xdebug.collect_params', '0');

function foo( $a ) {
    for ($i = 1; $i < $a['foo']; $i++) {
        if ($i == 10) xdebug_print_function_stack();
    }
}

class user{
    private  $name='张三';
    public function getuserName(){
       return $this->name;
    }
    public function setUserName($name){
        $this->name  = $name;
    }
}

set_time_limit(1);
$c = new user;
$c->setUserName = '李四';
$a = array(
    42 => false, 'foo' => 20,
    $c, new user, fopen( './code.php', 'r' )
);
foo( $a );
?>