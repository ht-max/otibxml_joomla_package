<?php defined('_JEXEC') or die ();

class OtibXmlModelOtibXml extends JModelLegacy{

    private $db;

    function __construct(){
        $this->db = JFactory::getDbo();
        parent::__construct();
    }

    public function getArticles(){
        $sql = $this->db->getQuery(true);
        $sql->select('*')
            ->from($this->db->quoteName('#__categories'))
            ->where($this->db->quoteName('extension').'='.$this->db->quote('com_content'))
            ->order($this->db->quote('title ASC'));
        $this->db->setQuery($sql);
        return $this->db->loadObjectList();
    }

}