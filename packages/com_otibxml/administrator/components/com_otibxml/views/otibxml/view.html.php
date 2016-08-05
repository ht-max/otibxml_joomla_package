<?php defined( '_JEXEC' ) or die( 'Restricted access' );

class OtibXmlViewOtibXml extends JViewLegacy {

    function display($tpl = null) {
        $this->items = $this->get('Articles');
        parent::display();
    }
}
