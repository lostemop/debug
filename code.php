<?php
ini_set('xdebug.coverage_enable',1);
xdebug_start_code_coverage(-2);
function a($a) {
    echo $a * 2.5;
}

function b($count) {
    for ($i = 0; $i < $count; $i++) {
        a($i + 0.17);
    }
}

b(6);

var_dump(xdebug_get_code_coverage());

?>