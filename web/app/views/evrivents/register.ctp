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
<p></p>
<p></p>
<p>
    Please complete registration within 15 minutes. After 15 minutes, the reservation we're holding will be released to others.
    <br />
    Time Remaining: nn minutes
</p>
<div>
<?php echo $this->Form->create('Participant',array('url'=>"register/$eventId"));

echo $this->Form->input('first_name',array('div'=>false));
echo $this->Form->input('last_name',array('div'=>false));
echo $this->Form->input('email',array('div'=>false));
echo $this->Form->submit('Complete Registration');

?>


</div>