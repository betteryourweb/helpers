<?php
namespace Betteryourweb\Helpers;

use Betteryourweb\Helpers\Exception;
class Common
{
	public function __construct(){
		if(!defined('BASE_DIR')){
			throw new Exception("The base directory is not defined. Please define BASE_DIR to use this function");

		}
	}
	public static function base_dir($path){
		if(!$path) return BASE_DIR;
		return BASE_DIR."/".$path;
	}
}