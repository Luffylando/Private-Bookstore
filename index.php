<?php
session_start();

require_once 'config.php';

require_once 'classes/Bootstrap.php';
require_once 'classes/Model.php';
require_once 'classes/Controller.php';
require_once 'classes/Messages.php';

require_once 'models/home.php';
require_once 'models/show.php';
require_once 'models/auth.php';


require_once 'controllers/home.php';
require_once 'controllers/show.php';
require_once 'controllers/auth.php';


$bootstrap = new Bootstrap($_GET);

$controller = $bootstrap->createController();

	if($controller){
		$controller->executeAction();
	}


