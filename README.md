# prestashop-CssJsRemover

Prestashop module

You can remove standard/non-standard Prestashop css/js.
Configure which files should be removed by settings.xml inside.


Settings have only two main nodes <cssFiles> and <jsFiles>. Both have <path> node
inside which you can paste unneeded css/js. 

Instead of <cssFiles> and <jsFiles> node, <path> node is unlimited.


Standard xml file look: 

<myxml>

settings.xml >
----------------------------------------------------------------------
<?xml version="1.0" encoding="UTF-8"?>

<settings>
    <cssFiles>
        <path>  /themes/your_theme_name/css/global.css </path>
        <path> /themes/your_theme_name/css/modules/blocktopmenu/css/blocktopmenu.css </path>
        <path> /themes/your_theme_name/css/modules/blocktopmenu/css/superfish-modified.css </path>
    </cssFiles>
    <jsFiles>
	<path> /themes/your_theme_name/js_to_remo.js </path>        
    </jsFiles>
</settings>

</myxml>
