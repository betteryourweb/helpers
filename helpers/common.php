<?php

use Betteryourweb\Helpers\Common;

function base_dir($path){
	return Common::base_dir($path);
}

function print_var_name($var) {
    foreach($GLOBALS as $var_name => $value) {
        if ($value === $var) {
            return $var_name;
        }
    }

    return false;
}