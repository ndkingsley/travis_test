<?php

defined('YII_ENABLE_EXCEPTION_HANDLER') or define('YII_ENABLE_EXCEPTION_HANDLER',false);
defined('YII_ENABLE_ERROR_HANDLER') or define('YII_ENABLE_ERROR_HANDLER',false);
defined('YII_DEBUG') or define('YII_DEBUG',true);
$_SERVER['SCRIPT_NAME']='/'.basename(__FILE__);
$_SERVER['SCRIPT_FILENAME']=__FILE__;

class CTestCase extends PHPUnit_Framework_TestCase
{
  
  protected function setUp()
        {
                parent::setUp();
        }
  
}
