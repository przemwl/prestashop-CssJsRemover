<?php

class SettingsReader 
{
    
    /**
     * @var array 
     */
    protected $cssToRemove;
    
    /**
     * @var array 
     */
    protected $jsToRemove;
    
    /**
     * @var object::self
     */
    private static $instance;


    public function __construct()
    {
        $settings = $this->loadXML(); 
        $this->cssToRemove = $settings->cssFiles;
        $this->jsToRemove = $settings->jsFiles;
    }
    
    public static function getInstance()
    {
        if(!isset(self::$instance)) {
            self::$instance = new SettingsReader();
        }
        
        return self::$instance;
    }
    
    public function loadXML()
    {
        return simplexml_load_file(__DIR__ . '/settings.xml');
    }
    
    public function getCssToRemove()
    {
        return $this->cssToRemove;
    }
    
    public function getJsToRemove()
    {
        return $this->jsToRemove;
    }
}
