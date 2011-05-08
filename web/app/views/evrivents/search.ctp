<?php

/**
 * Created by Femi TAIWO
 * dftaiwo@gmail.com
 */
?> 
<?php 
    echo $this->Form->create('Search',array('url'=>'search')); 
    echo $this->Form->input('search');
    echo $this->Form->end(); 
?>
<div class="alleventL">
    <ul>
        <?php foreach($allEvents as $event){ 
            
        ?>
        
        <li>
       <div class="eventtitle"><?php echo $this->Html->link($event['Event']['name'],"viewEvent/{$event['Event']['id']}"); ?></div> <div class="eventcontent">
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
                    <div class="readmore">
                        <?php echo $this->Html->link('more +',"viewEvent/{$event['Event']['id']}"); ?>
                    </div>
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
             <ul>
            <li></li>
        </ul>
        </div>

    </div>
</div>