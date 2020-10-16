<?php

function controllers_autoload($classname){
    include 'controllers/' .$classname . '.php';
    
}
sql_autoload_register('controllers_autoload');