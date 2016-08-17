<?php


class Remover 
{

    public static function removeCss($filesPack)
    {
        foreach($filesPack->path as $path) {
            
            $path = (string) trim($path);
            if(isset(Context::getContext()->controller->css_files[$path])) {
                unset(Context::getContext()->controller->css_files[$path]);
            } else {
                throw new Exception('Invalid CSS/JS Remover settings - cannot remove path' . $path . '.');
            }
            
        }
    }
    
    public static function removeJs($filesPack)
    {
        
        foreach($filesPack->path as $path) {
            
            $path = (string) trim($path);
            if(isset(Context::getContext()->controller->css_files[$path])) {
                unset(Context::getContext()->controller->css_files[$path]);
            } else {
                throw new Exception('Invalid CSS/JS Remover settings - cannot remove path' . $path . '.');
            }
            
        }
    }
}
