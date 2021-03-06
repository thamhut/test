<?php

/*
  +------------------------------------------------------------------------+
  | Phalcon Developer Tools                                                |
  +------------------------------------------------------------------------+
  | Copyright (c) 2011-2014 Phalcon Team (http://www.phalconphp.com)       |
  +------------------------------------------------------------------------+
  | This source file is subject to the New BSD License that is bundled     |
  | with this package in the file docs/LICENSE.txt.                        |
  |                                                                        |
  | If you did not receive a copy of the license and are unable to         |
  | obtain it through the world-wide-web, please send an email             |
  | to license@phalconphp.com so we can send you a copy immediately.       |
  +------------------------------------------------------------------------+
  | Authors: Andres Gutierrez <andres@phalconphp.com>                      |
  |          Eduar Carvajal <eduar@phalconphp.com>                         |
  +------------------------------------------------------------------------+
*/

ini_set('display_errors', 1);
error_reporting(E_ALL);
	
defined('APP_PATH')
    || define('APP_PATH', realpath(dirname(__FILE__) . '/../app'));

defined('APP_ENV')
    || define('APP_ENV', getenv('APP_ENV') ? getenv('APP_ENV') : 'production');

use Phalcon\Web\Tools;

require 'webtools.config.php';

require PTOOLSPATH . '/scripts/Phalcon/Web/Tools.php';

Tools::main(PTOOLSPATH, PTOOLS_IP);
