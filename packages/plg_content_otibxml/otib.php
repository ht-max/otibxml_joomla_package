<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

class plgContentOtib  extends JPlugin
{
    protected $autoloadLanguage = true;

    public function __construct(& $subject, $config)
    {
        parent::__construct($subject, $config);
        $this->loadLanguage();
    }

    function onContentPrepareForm($form, $data) {
        $app = JFactory::getApplication();
        $doc = JFactory::getDocument();
        $doc->addStyleSheet(JUri::root().'plugins/content/otib/assets/css/otib.css');
        $option = $app->input->get('option');
        switch($option) {
            case 'com_content':
                if ($app->isAdmin()) {
                    JForm::addFormPath(__DIR__ . '/forms');
                    $form->loadFile('main', false);
                }
                break;
        }
        return true;
    }
}
?>