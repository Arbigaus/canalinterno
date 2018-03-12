<?php
error_reporting(E_ALL);
ini_set("display_errors","on");

session_start();
require 'config.php';

require_once 'Library/Mailer/PHPMailer.php';
require_once 'Library/Mailer/SMTP.php';

spl_autoload_register(function ($class){
	if(strpos($class, 'Controller') > -1){
		if(file_exists('controllers/'.$class.'.php')){
			require_once 'controllers/'.$class.'.php';
		}
	} elseif (file_exists('models/'.$class.'.php')){
		require_once 'models/'.$class.'.php';
	} elseif (file_exists('core/'.$class.'.php')){
		require_once 'core/'.$class.'.php';
	} elseif (file_exists('library/'.$class.'.php')){
		require_once 'library/'.$class.'.php';
	}
});

$core = new Core();
$core->run();
 ?>
