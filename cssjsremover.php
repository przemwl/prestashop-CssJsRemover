<?php

/**
 * Blebox theme logic
 */

require_once 'CssJsRemover.php';

if (!defined('_PS_VERSION_'))
	exit;


class CssJsRemover extends Module
{
    protected $controller;

    public function __construct()
    {
        $this->name = 'cssjsremover';
        $this->tab = 'front_office_features';
        $this->version = '1.0';
        $this->author = 'Przemysław Wleklik | PodwysockiDESIGN';

        parent::__construct();

        $this->displayName = $this->l('CSS/JS Remover');
        $this->description = $this->l('Remove unnecesary css/js files from header');
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }
    
    public function install()
    {
        if (!parent::install() || !$this->registerHook('header')) {
            throw new Exception('Module CSS/JS Remover cannot be install or registered.');
        }
            
        return true;
    }
    
    public function hookHeader()
    {
       $this->includeClasses();
       $cssToRemove = SettingsReader::getInstance()->getCssToRemove();
       $jsToRemove = SettingsReader::getInstance()->getJsToRemove();
       
       Remover::removeCss($cssToRemove);
       Remover::removeJs($jsToRemove);
    }
    
    public function includeClasses()
    {
        include 'Remover.php';
        include 'SettingsReader.php';
    }
   
}
