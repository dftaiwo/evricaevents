<?php

/*
 * Landing Page for the Events Management
 * 
 */

echo $this->Html->link('Create New Event','createEvent');

if($myEvents){
//pr($myEvents);
    ?>
<ul>
    <?php
    foreach($myEvents as $myEvent){

        ?>
    <li>
        <?php echo $this->Html->link($myEvent['Event']['name'],"viewEvent/{$myEvent['Event']['id']}"); ?>
        <?php echo $this->Html->link('Edit',"editEvent/{$myEvent['Event']['id']}"); ?>
        <?php echo $this->Html->link('Advanced Settings',"advEvent/{$myEvent['Event']['id']}"); ?>
    </li>
        <?php

    }
?>
</ul>
    <?php
    
}

?>



