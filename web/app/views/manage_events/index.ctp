<?php

/*
 * Landing Page for the Events Management
 * 
 */

echo $this->Html->link('Create New Event','createEvent');

if($myEvents){
    ?>
<ul>
    <?php
    foreach($myEvents as $myEvent){

        ?>
    <li>
        <?php echo $this->Html->link($myEvent['Event']['name'],"advEvent/{$myEvent['Event']['id']}");; ?>
    </li>
        <?php

    }
?>
</ul>
    <?php
    
}

?>



