<?php

/** This file is part of KCFinder project
  *
  *      @desc CMS integration code: Yii2
  *   @package KCFinder
  *   @version 3.12
  *    @author Dany Alejandro Cabrera <otello2040@gmail.com>
  * @copyright 2010-2014 KCFinder Project
  *   @license http://opensource.org/licenses/GPL-3.0 GPLv3
  *   @license http://opensource.org/licenses/LGPL-3.0 LGPLv3
  *      @link http://kcfinder.sunhater.com
  */

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

defined('STDIN') or define('STDIN', fopen('php://stdin', 'r'));
defined('STDOUT') or define('STDOUT', fopen('php://stdout', 'w'));

require(__DIR__ . '/../../../../vendor/autoload.php');
require(__DIR__ . '/../../../../vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../../../../src/common/config/bootstrap.php');
require(__DIR__ . '/../../../../src/frontend/config/bootstrap.php');<?php

/** This file is part of KCFinder project
  *
  *      @desc CMS integration code: Yii2
  *   @package KCFinder
  *   @version 3.12
  *    @author Dany Alejandro Cabrera <otello2040@gmail.com>
  * @copyright 2010-2014 KCFinder Project
  *   @license http://opensource.org/licenses/GPL-3.0 GPLv3
  *   @license http://opensource.org/licenses/LGPL-3.0 LGPLv3
  *      @link http://kcfinder.sunhater.com
  */

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

defined('STDIN') or define('STDIN', fopen('php://stdin', 'r'));
defined('STDOUT') or define('STDOUT', fopen('php://stdout', 'w'));

require(__DIR__ . '/../../../vendor/autoload.php');
require(__DIR__ . '/../../../vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../../../src/common/config/bootstrap.php');
require(__DIR__ . '/../../../src/frontend/config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../../src/common/config/main.php'),
    require(__DIR__ . '/../../../src/frontend/config/main.php'),
    require(__DIR__ . '/../../../src/frontend/config/main-local.php')
);
/*$config['components']['request'] =
		[
            'cookieValidationKey' => 'JCFEmNRGeh7W6EVs4u78THO_G5d7SDue',
            'csrfParam' => '_backendCsrf',
        ];
$config['components']['session'] =
        [
            'name' => '_backendSessionId',
            'savePath' => __DIR__ . '/../../../../src/backend/runtime/sessions'
        ];*/
$application = new yii\web\Application($config);

if (!isset($_SESSION['KCFINDER']))
	$_SESSION['KCFINDER'] = array();
$_SESSION['KCFINDER']['disabled'] = Yii::$app->user->isGuest;
$_SESSION['KCFINDER']['access']['files']['upload'] = !Yii::$app->user->isGuest;
$_SESSION['KCFINDER']['uploadURL'] = Yii::getAlias('@web') . '/../../uploads';
$_SESSION['KCFINDER']['uploadDir'] = Yii::getAlias('@webroot') . '/../../uploads';
$_SESSION['KCFINDER']['preset'] = 'full';


$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../../../src/common/config/main.php'),
    require(__DIR__ . '/../../../../src/frontend/config/main.php'),
    require(__DIR__ . '/../../../../src/frontend/config/main-local.php')
);
/*$config['components']['request'] =
		[
            'cookieValidationKey' => 'JCFEmNRGeh7W6EVs4u78THO_G5d7SDue',
            'csrfParam' => '_backendCsrf',
        ];
$config['components']['session'] =
        [
            'name' => '_backendSessionId',
            'savePath' => __DIR__ . '/../../../../src/backend/runtime/sessions'
        ];*/
$application = new yii\web\Application($config);

if (!isset($_SESSION['KCFINDER']))
	$_SESSION['KCFINDER'] = array();
$_SESSION['KCFINDER']['disabled'] = Yii::$app->user->isGuest;
$_SESSION['KCFINDER']['access']['files']['upload'] = !Yii::$app->user->isGuest;
$_SESSION['KCFINDER']['uploadURL'] = Yii::getAlias('@web') . '/../../../uploads';
$_SESSION['KCFINDER']['uploadDir'] = Yii::getAlias('@webroot') . '/../../../uploads';
$_SESSION['KCFINDER']['preset'] = 'full';
