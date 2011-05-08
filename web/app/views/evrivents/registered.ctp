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

<p></p>
<p></p>
<p>
Tell your friends about this event! <br />
<img src="<?php echo $this->Html->url('/img/social_networks.png'); ?>" width="209" height="34" />
</p>
<div>
    <ul>
        <li><b>First Name:</b> <?php echo $userInfo['User']['firstname'] ?></li>
        <li><b>Last Name:</b> <?php echo $userInfo['User']['lastname'] ?></li>
        <li><b>Email:</b> <?php echo $userInfo['User']['email'] ?></li>
    </ul>

</div>