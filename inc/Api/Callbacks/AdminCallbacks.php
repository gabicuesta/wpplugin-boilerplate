<?php
/**
* @package Boilerplate
*/
namespace Inc\Api\Callbacks;
use \Inc\Api\SettingsApi;


use \Inc\Base\BaseController;

class AdminCallbacks extends BaseController
{
  public function adminDashboard() {
    return require_once( "$this->plugin_path/templates/admin.php" );
  }
}
