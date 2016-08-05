<?php defined('_JEXEC') or die('Restricted access');

class Otib extends JModelLegacy
{
    private $db;

    function __construct()
    {
        $this->db = JFactory::getDbo();
    }
    public function getContent($cat_id, $is_cat = 'catid')
    {
        $sql = $this->db->getQuery(true);
        $sql->select($this->db->quoteName('attribs'))
            ->from($this->db->quoteName('#__content'))
            ->where(
                array(
                    $this->db->quoteName($is_cat).' = '. $this->db->quote($cat_id)
                )
            );
        $this->db->setQuery($sql);
        return $this->db->loadObjectList();
    }
    public function wrapIt($data, $wrap = 'h3'){
        return '<'.$wrap.'>'.$data.'</'.$wrap.'>';
    }
    public function wrapDay($id){
        switch ($id){
            case 1:
                return JText::_('OTIB_TU_HR');
            case 2:
                return JText::_('OTIB_TU_HALFDAY');
            case 3:
                return JText::_('OTIB_TU_DAY');
            case 4:
                return JText::_('OTIB_TU_WEEK');
            case 5:
                return JText::_('OTIB_TU_MONTH');
            case 6:
                return JText::_('OTIB_TU_QUARTERS');
            case 7:
                return JText::_('OTIB_TU_YEARS');
            default:
                return '';
        }
    }
}