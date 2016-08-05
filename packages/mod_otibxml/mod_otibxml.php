<?php defined('_JEXEC') or die;
require_once  JPATH_SITE.'/components/com_otibxml/helper.php';

$otib = new Otib();
$app = JFactory::getApplication();
$lang = JFactory::getLanguage();
$lang->load('plg_content_otib', JPATH_ADMINISTRATOR, $lang->get('tag'), true);
$data = $otib->getContent($app->input->get('id'), 'id');

$data = json_decode($data[0]->attribs);
require JModuleHelper::getLayoutPath('mod_otibxml', $params->get('layout', 'default'));

