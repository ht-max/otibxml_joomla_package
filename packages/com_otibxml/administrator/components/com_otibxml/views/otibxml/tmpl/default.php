<?php defined( '_JEXEC' ) or die( 'Restricted access' );
JToolBarHelper::title('OTIB XML', 'generic.png');

?>
<div class="container">
<table class="table table-bordered">
    <tr>
        <th>Category name</th>
        <th>Link</th>
    </tr>
<?php foreach ($this->items as $item) { ?>
   <tr>
       <td>
            <a href="<?php echo JURI::root().'index.php?option=com_otibxml&catid='.$item->id; ?>" target="_blank">
                <strong><?php echo $item->title;?></strong>
                <em> - cat-ID <?php echo $item->id ?></em>
            </a>
       </td>
       <td>
           <div class="form-group">
               <input type="text" disabled style="width: 90%;"  value="<?php echo JURI::root().'index.php?option=com_otibxml&catid='.$item->id; ?>"/>
           </div>
       </td>
   </tr>
<?php } ?>
</table>
</div>
