$ <?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div class="wrap">

<div class="alleventL">
    <img src="<?php echo $this->Html->url('/img'); ?>/all_events.png" width="161" height="40" alt="All Events" />
    <ul>
        <?php foreach($allEvents as $event){ 
            
        ?>
        
        <li>
            <div class="eventtitle"><?php echo $this->Html->link($event['Event']['name'],"viewEvent/{$event['Event']['id']}"); ?></div>
        <div class="eventcontent">
            <?php if($event['Event']['event_logo_url']){ ?>
         <div class="imgevt">
       	  <?php echo $this->Html->image("/uploads/logos/{$event['Event']['event_logo_url']}",array('align'=>'right','height'=>80)); ?>
         </div>
            <?php } ?>
         <div class="detail">
             <?php echo $event['Event']['description']; ?>

                <div class="publish">
                	Published by &raquo; <?php echo $event['User']['firstname'].' '.$event['User']['lastname']; ?>
                    <label> Date &raquo; <?php echo date('M dS',strtotime($event['EvDate']['start_date'])); ?> <?php if($event['EvDate']['start_date']!=$event['EvDate']['end_date']){?> - <?php echo date('dS',strtotime($event['EvDate']['end_date'])); }?></label>
                    <div class="readmore">more +</div>
                </div>

        </div>
        <div class="clear">&nbsp;</div>
          </div>
        </li>
        <?php  } ?>
    </ul>


</div>
<div class="alleventA">
    	<div class="note blue rounded">
   	    <img src="<?php echo $this->Html->url('/img'); ?>/achived.png" width="200" height="36" alt="Archieved" />
             <ul>
            <li>Last Week</li>
            <li>This Week</li>
            <li>Next Week</li>
            <li>Next Month</li>
        </ul>
        </div>

    </div>
</div>