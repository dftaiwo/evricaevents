<?php

/**
 * Created by Femi TAIWO
 * dftaiwo@gmail.com
 */
?>
Hi <?php echo $userInfo['User']['firstname']. ' ' . $userInfo['User']['lastname'] ?>!

<br />
<br />
<p>
You have been registered for <b><?php echo $eventInfo['Event']['name']; ?></b>
<?php echo date('l M dS',strtotime($eventInfo['EvDate']['start_date'])); 
if($eventInfo['EvDate']['start_date']!=$eventInfo['EvDate']['end_date']){
    echo ' to ' .date('l M dS, Y',strtotime($eventInfo['EvDate']['end_date']));
}
?>
</p>
<p>
For more information on this event, go to <?php echo $this->Html->url("/Evrivents/viewEvent/{$eventInfo['Event']['id']}",true); ?>
</p>

<p></p>