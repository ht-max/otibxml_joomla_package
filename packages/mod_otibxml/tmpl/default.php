<?php defined('_JEXEC') or die;
/** Wrappers $h */
$h = 'h3';
$p = 'p';
if (
    isset($data->curNaam) &&
    isset($data->curBestemdVoor) &&
    isset($data->curOmschrijvingKort)
){
    if($params->get('curNaam') == 1 && isset($data->curNaam)){
        echo $otib->wrapIt(JText::_('OTIB_CURNAAM'), $h);
        echo $otib->wrapIt($data->curNaam, $p);
    }

    if($params->get('curBestemdVoor') == 1 && isset($data->curBestemdVoor)){
        echo $otib->wrapIt(JText::_('OTIB_BESTEMDVOOR'), $h);
        echo $otib->wrapIt($data->curBestemdVoor, $p);
    }

    if($params->get('curPrijsCursus') == 1 && isset($data->curPrijsCursus)){
        echo $otib->wrapIt(JText::_('OTIB_PRIJSCURSUS'), $h);
        echo $otib->wrapIt($data->curPrijsCursus, $p);
    }

    if($params->get('curMaximumDeelnemers') == 1 && isset($data->curMaximumDeelnemers)){
        echo $otib->wrapIt(JText::_('OTIB_MAXDEELNEMERS'), $h);
        echo $otib->wrapIt($data->curMaximumDeelnemers, $p);
    }

    if($params->get('curWebsiteUrl') == 1 && isset($data->curWebsiteUrl)){
        echo $otib->wrapIt(JText::_('OTIB_URL'), $h);
        echo $otib->wrapIt($data->curWebsiteUrl, $p);
    }

    if($params->get('curOmschrijvingKort') == 1 && isset($data->curOmschrijvingKort)){
        echo $otib->wrapIt(JText::_('OTIB_OMSCH'), $h);
        echo $otib->wrapIt($data->curOmschrijvingKort, $p);
    }

    if($params->get('curDuurCursus') == 1 && isset($data->curDuurCursus)){
        echo $otib->wrapIt(JText::_('OTIB_DURCURS'), $h);
        echo $otib->wrapIt($data->curDuurCursus.' '.$otib->wrapDay($data->curDuurCursusEenheid), $p);
    }
    if($params->get('curDuurDoorloop') == 1 && isset($data->curDuurDoorloop)){
        echo $otib->wrapIt(JText::_('OTIB_DUURDOORLOOP'), $h);
        echo $otib->wrapIt($data->curDuurDoorloop.' '.$otib->wrapDay($data->curDuurDoorloopEenheid), $p);
    }

    if($params->get('curZelfstudie') == 1 && isset($data->curZelfstudie)){
        echo $otib->wrapIt(JText::_('OTIB_ZELFSTUDIE'), $h);
        echo $otib->wrapIt($data->curZelfstudie, $p);
    }

    if($params->get('curLocatie') == 1 && isset($data->curLocatie)){
        echo $otib->wrapIt(JText::_('OTIB_LOCATIE'), $h);
        echo $otib->wrapIt($data->curLocatie, $p);
    }
}
