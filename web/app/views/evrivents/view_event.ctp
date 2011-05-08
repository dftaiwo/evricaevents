<?php

/**
 * Created by Femi TAIWO
 * dftaiwo@gmail.com
 */

?>
<h3><?php echo $eventInfo['Event']['name']; ?></h3>
<h5><?php echo date('l M dS',strtotime($eventInfo['EvDate']['start_date'])); 
if($eventInfo['EvDate']['start_date']!=$eventInfo['EvDate']['end_date']){
    echo ' to ' .date('l M dS, Y',strtotime($eventInfo['EvDate']['end_date']));
}

?>


</h5>
<?php echo $eventInfo['Event']['description']; ?>
<p></p>
<p></p>
<b><?php echo $this->Html->link('Register',"register/{$eventInfo['Event']['id']}"); ?></b>
