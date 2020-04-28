<?php
/**
* @package Boilerplate
*/
namespace Inc\Pages;

use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;
use \Inc\Api\Callbacks\AdminCallbacks;

class Admin extends BaseController
{

  public $settings;
  public $callbacks;
  public $pages;
  public $subpages;

  public function register() {
    $this->settings = new SettingsApi();
    $this->callbacks = new AdminCallbacks();

    $this->setPages();
    $this->setSubpages();
    $this->settings->addPages( $this->pages )->withSubPage( 'Dashboard' )->addSubPages( $this->subpages )->register();
  }

  public function setPages() {
    $this->pages = [
      [
        'page_title' => 'Boilerplate',
        'menu_title' => 'Boilerplate',
        'capability' => 'manage_options',
        'menu_slug' => 'boilerplate',
        'callback' => array( $this->callbacks, 'adminDashboard' ),
        'icon_url' => 'dashicons-store',
        'position' => 110
      ]
    ];
  }

  public function setSubpages() {
    $this->subpages = [
      [
        'parent_slug' => 'boilerplate',
        'page_title' => 'Custom post types',
        'menu_title' => 'CPT',
        'capability' => 'manage_options',
        'menu_slug' => 'boilerplate_cpt',
        'callback' => function() { echo '<h1>Custom post types</h1>'; }
      ],
      [
        'parent_slug' => 'boilerplate',
        'page_title' => 'Custom post types 2',
        'menu_title' => 'CPT2',
        'capability' => 'manage_options',
        'menu_slug' => 'boilerplate_cpt2',
        'callback' => function() { echo '<h1>Custom post types 2</h1>'; }
      ],
      [
        'parent_slug' => 'boilerplate',
        'page_title' => 'Custom post types 3',
        'menu_title' => 'CPT3',
        'capability' => 'manage_options',
        'menu_slug' => 'boilerplate_cpt3',
        'callback' => function() { echo '<h1>Custom post types 3</h1>'; }
      ]
    ];
  }


}
