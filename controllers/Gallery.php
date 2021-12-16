<?php namespace LZaplata\Gallery\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Gallery extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'all' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('LZaplata.Gallery', 'main-menu-item');
    }
}
