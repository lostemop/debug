<?php
function a($txt) {
    b("Glenn");
}
function b($txt) {
    c("Cleveland");
}
function c($txt) {
    //debug_print_backtrace();
    xdebug_print_function_stack();
}

a("Peter");
?>