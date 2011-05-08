<?php

/**
 * Created by Femi TAIWO
 * dftaiwo@gmail.com
 */
?>
<?php
if($eventInfo['Event']['event_logo_url']){
    echo $this->Html->image("/uploads/logos/{$eventInfo['Event']['event_logo_url']}",array('align'=>'right','height'=>90));
}

?>

<h2><?php echo  $eventInfo['Event']['name']; ?></h2>
<h3>View Participants</h3>

<br />
<br />
<br />
<br />
<?php echo $this->Html->link('Back to Event Dashboard',"viewEvent/$eventId"); ?>
<table width="100%" border="1">
    <tr>
        <th width="10">
            
        </th>
        <th>
            First Name
        </th>
        <th>
            Last Name
        </th>
        <th>
            Email
        </th>
        <th>
            Registered
        </th>
        <th>
            Actions
        </th>
    </tr>
    <?php 
    $i=0;
    foreach($participants as $participant){ 
        $i++;
        ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $participant['User']['firstname']; ?></td>
        <td><?php echo $participant['User']['lastname']; ?></td>
        <td><?php echo $participant['User']['email']; ?></td>
        <td><?php echo $participant['Participant']['created']; ?></td>
        <td>
            <?php echo $this->Html->link('Reject','#'); ?> 
            <?php echo $this->Html->link('Contact','#'); ?>
        </td>
    </tr>
    
    
    
    
    <?php } ?>
<tr>
    <td colspan="10">
        <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
    </td>
</tr>
</table>