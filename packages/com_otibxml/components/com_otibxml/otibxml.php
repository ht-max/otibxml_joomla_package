<?php	defined( '_JEXEC' ) or die( 'Restricted access' );

require_once JPATH_COMPONENT.'/helper.php';
$app = JFactory::getApplication();
$input = $app->input;
$items = new Otib();
$data = $items->getContent($input->get('catid'));

/*** PAGE ***/
header("Content-type: text/xml; charset=UTF-8");
header("Content-encoding: UTF-8");
echo '<?xml version="1.0" encoding="UTF-8"?>'.chr(10);
echo '<vakwijs>'.chr(10);

if (isset($data)) {
    foreach ($data as $row) {
        $row = json_decode($row->attribs);
        if (
            empty($row->curNaam) ||
            empty($row->curBestemdVoor) ||
            empty($row->curOmschrijvingKort)
        ) {continue;}
        foreach (explode(',',trim($row->curLocatie)) as $a) {
            $curLocatie .= '<curLocatie>'.trim(htmlspecialchars($a)).'</curLocatie>';
        }

        echo '<cur>';
        if ($row->id){echo '<id>'.$row->id.'</id>';}
		if($row->curNaam){echo '<curNaam>' . htmlspecialchars($row->curNaam) . '</curNaam>';}
        echo '<curLocaties>'.($curLocatie).'</curLocaties>';
		if($row->curPrijsCursus){echo '<curPrijsCursus>' . intval($row->curPrijsCursus) . '</curPrijsCursus>';}
		if($row->curMaximumDeelnemers){echo '<curMaximumDeelnemers>' . intval($row->curMaximumDeelnemers) .'</curMaximumDeelnemers>';}
		if($row->curWebsiteUrl){echo '<curWebsiteUrl>' . htmlspecialchars($row->curWebsiteUrl) . '</curWebsiteUrl>';}
		if($row->curBestemdVoor){echo '<curBestemdVoor>' . htmlspecialchars($row->curBestemdVoor) . '</curBestemdVoor>';}
		if($row->curOmschrijvingKort){echo '<curOmschrijvingKort>' . htmlspecialchars($row->curOmschrijvingKort) . '</curOmschrijvingKort>';}
		if($row->curDuurCursus){echo '<curDuurCursus>' . intval($row->curDuurCursus) . '</curDuurCursus>';}
		if($row->curDuurCursusEenheid){echo '<curDuurCursusEenheid>'.intval($row->curDuurCursusEenheid).'</curDuurCursusEenheid>';}
		if($row->curDuurDoorloop){echo '<curDuurDoorloop>' . intval($row->curDuurDoorloop) . '</curDuurDoorloop>';}
		if($row->curDuurCursusEenheid){echo '<curDuurDoorloopEenheid>'.intval($row->curDuurCursusEenheid).'</curDuurDoorloopEenheid>';}
		if($row->curZelfstudie){echo '<curZelfstudie>' . floatval($row->curZelfstudie) . '</curZelfstudie>';}
		echo '</cur>';
    }
    echo '</vakwijs>' . chr(10);
    die();
}