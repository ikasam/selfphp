<?php
require_once '../vendor/autoload.php';

class MySmarty extends Smarty {
  public function __construct() {
    // Execute parent's constructor
    parent::__construct();

    // Setting specific parameters
    $this->template_dir      = './templates';
    $this->compile_dir       = './templates_c';
    $this->default_modifiers = [ 'escape:"htmlall"' ];

    // Common template variables
    $this->assign('author', 'YAMADA, Yoshihiro');

  }

  public function d() {
    parent::display(basename($_SERVER['PHP_SELF'], '.php').'.tpl');
  }
}
