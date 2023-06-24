<?php
import('lib.pkp.classes.plugins.ThemePlugin');
class TemaPruebaPlugin extends ThemePlugin {

    /**
     * Load the custom styles for our theme
     * @return null
     */
    public function init() {
        $this->setParent('defaultthemeplugin');
        $this->modifyStyle('stylesheet', array('addLess' => array('styles/index.less')));
    }

    /**
     * Get the display name of this theme
     * @return string
     */
    function getDisplayName() {
        return 'Tema hijo';
    }

    /**
     * Get the description of this plugin
     * @return string
     */
    function getDescription() {
        return 'Tema hijo para el tema predeterminado';
    }
}