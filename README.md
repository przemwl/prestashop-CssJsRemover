# prestashop-CssJsRemover

Prestashop module

You can remove standard/non-standard Prestashop css/js.
Configure which files should be removed by settings.xml inside.


Settings have only two main nodes <cssFiles> and <jsFiles>. Both have <path> node
inside which you can paste unneeded css/js. 

Instead of <cssFiles> and <jsFiles> node, <path> node is unlimited.


Standard xml file look: 

<myxml>

settings.xml 
----------------------------------------------------------------------

&lt;settings&gt; <br>
    &lt;cssFiles&gt;</span> <br>
        &lt;path&gt;  /themes/your_theme_name/css/global.css  &lt;/path&gt; <br>
        &lt;path&gt; /themes/your_theme_name/css/modules/blocktopmenu/css/blocktopmenu.css  &lt;/path&gt; <br>
        &lt;path&gt; /themes/your_theme_name/css/modules/blocktopmenu/css/superfish-modified.css  &lt;/path&gt; <br>
    &lt;/cssFiles&gt; <br>
    &lt;jsFiles&gt; <br>
	&lt;path&gt; /themes/your_theme_name/js_to_remove.js  &lt;/path&gt; <br>
    &lt;/jsFiles&gt;<br>
&lt;/settings&gt;<br>

</myxml>
