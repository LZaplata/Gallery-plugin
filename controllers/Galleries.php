<?php namespace LZaplata\Gallery\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Galleries extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'default'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('LZaplata.Gallery', 'main-menu-item');
    }
}
